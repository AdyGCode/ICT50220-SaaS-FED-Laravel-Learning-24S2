<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $table = 'products';
        $file = public_path("/seeders/$table.csv");


        // store returned data into array of records
        $records = DatabaseSeeder::import_CSV($file);

        $numRecords = count($records);
        $this->command->getOutput()->progressStart($numRecords);

        // add each record to the posts table in DB
        foreach ($records as $key => $record) {
            Product::create($record);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();

    }
}
