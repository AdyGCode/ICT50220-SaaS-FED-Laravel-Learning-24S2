<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = [
            [
                'id' => 100,
                'given_name' => 'Admin',
                'family_name' => 'Istrator',
                'nickname' => 'Admin',
                'email' => 'admin@example.com',
                'password' => 'Password1',
            ],
            [
                'id' => 500,
                'given_name' => 'Staff',
                'family_name' => 'Member',
                'nickname' => 'Staff',
                'email' => 'staff@example.com',
                'password' => 'Password1',
            ],
            [
                'id' => 1000,
                'given_name' => 'Eileen',
                'family_name' => 'Dover',
                'nickname' => 'Cliffwalker',
                'email' => 'eileen@example.com',
                'password' => 'Password1',
            ],

        ];

        $numRecords = count($records);
        // Create a progress coutner to monitor seeind progress
        $this->command->getOutput()->progressStart($numRecords);

        foreach ($records as $seedUser) {
            User::create($seedUser);
            // Update the Progress Counter
            $this->command->getOutput()->progressAdvance();
        }
        // End the Progress Coutner
        $this->command->getOutput()->progressFinish();

    }
}
