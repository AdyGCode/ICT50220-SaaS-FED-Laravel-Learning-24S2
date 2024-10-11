<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
use Illuminate\Support\Facades\DB;


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $table = 'cities';
        $model = 'City';

        $model = "App\\Models\\" . $model;
        $file = public_path("/seeders/$table" . ".csv");

        if (!file_exists($file) || !is_readable($file)) {
            $this->command->getOutput()->error('File does not exist or is not readable.');
            return;
        }

        $lineCount = $this->countLinesInFile($file);

        $handle = fopen($file, 'r');
        $header = fgetcsv($handle);

        $batchSize = 1000; // Adjust the batch size as needed
        $batch = [];
        $batchCount = $lineCount / $batchSize + ($lineCount / $batchSize > 0 ? 1 : 0);

        $this->command->getOutput()->progressStart($batchCount);

        while (($data = fgetcsv($handle)) !== FALSE) {
            $batch[] = [
                "name" => $data[0],
                "state_id" => $data[1] ?? null,
                "state_code" => $data[2] ?? null,
                "state_name" => $data[3] ?? null,
                "country_id" => $data[4] ?? null,
                "country_code" => $data[5] ?? null,
                "country_name" => $data[6] ?? null,
                "latitude" => $data[7] ?? null,
                "longitude" => $data[8] ?? null,
            ];

            if (count($batch) >= $batchSize) {
                $this->insertBatch($model, $batch);
                $batch = [];
                $batchCount++;
                $this->command->getOutput()->progressAdvance();
            }
        }

        if (!empty($batch)) {
            $this->insertBatch($model, $batch);
        }

        $this->command->getOutput()->progressFinish();

        fclose($handle);

        $this->command->getOutput()->info('Import Completed.');
    }


    public function insertBatch(string $model, array $batch)
    {
        DB::transaction(function () use ($model, $batch) {
            foreach ($batch as $data) {
                $model::create($data);
            }
        });
    }


    function countLinesInFile($filePath)
    {
        if (!file_exists($filePath) || !is_readable($filePath)) {
            throw new Exception('File does not exist or is not readable.');
        }

        $handle = fopen($filePath, 'r');
        $lineCount = 0;

        while (!feof($handle)) {
            $line = fgets($handle);
            if ($line !== false) {
                $lineCount++;
            }
        }

        fclose($handle);

        return $lineCount;
    }

}
