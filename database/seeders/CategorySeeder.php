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
                "name" => "Fresh Produce",
                "description" => "Fresh fruits and vegetables",
                "slug" => "fresh-produce",
                "id" => 100,
                "category_id" => 0,
            ],
            [
                "name" => "Fruits",
                "description" => "A variety of fresh fruits",
                "slug" => "fresh-produce-fruits",
                "id" => 110,
                "category_id" => 100,
            ],
            [
                "name" => "Vegetables",
                "description" => "A variety of fresh vegetables",
                "slug" => "fresh-produce-vegetables",
                "id" => 120,
                "category_id" => 100,
            ],
            [
                "name" => "Apples",
                "description" => "Sweet and crispy apples",
                "slug" => "fresh-produce-fruits-apples",
                "id" => 111,
                "category_id" => 110,
            ],
            [
                "name" => "Carrots",
                "description" => "Crunchy and nutritious carrots",
                "slug" => "fresh-produce-vegetables-carrots",
                "id" => 121,
                "category_id" => 120,
            ],
            [
                "name" => "Dairy",
                "description" => "Dairy products including milk and cheese",
                "slug" => "dairy",
                "id" => 200,
                "category_id" => 0,
            ],
            [
                "name" => "Milk",
                "description" => "Fresh milk in various types",
                "slug" => "dairy-milk",
                "id" => 210,
                "category_id" => 200,
            ],
            [
                "name" => "Cheese",
                "description" => "A selection of delicious cheeses",
                "slug" => "dairy-cheese",
                "id" => 220,
                "category_id" => 200,
            ],
            [
                "name" => "Cheddar",
                "description" => "Sharp and flavorful cheddar cheese",
                "slug" => "dairy-cheese-cheddar",
                "id" => 221,
                "category_id" => 220,
            ],
            [
                "name" => "Brie",
                "description" => "Creamy and soft brie cheese",
                "slug" => "dairy-cheese-brie",
                "id" => 222,
                "category_id" => 220,
            ],
        ];

        $numRecords = count($records);
        $this->command->getOutput()->progressStart($numRecords);


        foreach ($records as $seedCategory) {
            Category::create($seedCategory);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();



        /* Second part of the categories are coming from a CSV */
        $table = 'categories';
        $file = public_path("/seeders/$table" . ".csv");


        // store returned data into array of records
        $records = DatabaseSeeder::import_CSV($file);

        $numRecords = count($records);
        $this->command->getOutput()->progressStart($numRecords);

        // add each record to the posts table in DB
        foreach ($records as $key => $record) {
            Category::firstOrCreate($record);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();


    }
}
