<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $records = [
            [
                'id' => 100,
                'name' => 'Food',
                'description' => null,
                'category_id' => 0,
            ],
            [
                'id' => 101,
                'name' => 'Vegetables',
                'description' => null,
                'category_id' => 100,
            ],
            [
                'id' => 102,
                'name' => 'Meat & Poultry',
                'description' => null,
                'category_id' => 100,
            ],


            [
                'name' => 'Carrots',
                'description' => null,
                'category_id' => 101,
            ],
            [
                'name' => 'Potatoes',
                'description' => null,
                'category_id' => 101,
            ],
            [
                'name' => 'Sweetcorn',
                'description' => null,
                'category_id' => 101,
            ],

            [
                'id' => 200,
                'name' => 'Hardware',
                'description' => null,
                'category_id' => 0,
            ],

            [
                'id' => 300,
                'name' => 'Clothes',
                'description' => null,
                'category_id' => 0,
            ],

            [
                'id' => 400,
                'name' => 'Cleaning',
                'description' => null,
                'category_id' => 0,
            ],
            [
                'id' => 401,
                'name' => 'Bleach',
                'description' => null,
                'category_id' => 400,
            ],
            [
                'id' => 402,
                'name' => 'Washing up liquid',
                'description' => null,
                'category_id' => 401,
            ],
            [
                'id' => 403,
                'name' => 'Laundry detergent',
                'description' => null,
                'category_id' => 401,
            ],
        ];

        $numRecords = count($records);
        $this->command->getOutput()->progressStart($numRecords);


        foreach ($records as $seedCategory) {
            Category::create($seedCategory);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();

    }
}
