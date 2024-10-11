<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Data from: https://github.com/dr5hn/countries-states-cities-database
     */
    public function run(): void
    {

        $table = 'states';
        $file = public_path("/seeders/$table".".csv");


        // store returned data into array of records
        $records =  DatabaseSeeder::import_CSV($file);

        $numRecords = count($records);
        $this->command->getOutput()->progressStart($numRecords);

        // add each record to the posts table in DB
        foreach ($records as $key => $record) {
            State::create($record);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();

    }
}
