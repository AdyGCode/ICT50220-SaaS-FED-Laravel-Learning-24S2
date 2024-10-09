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
                'name' => 'PHP',
                'description' => null,
                'category_id' => 0,
            ],
            [
                'id' => 101,
                'name' => 'Framework',
                'description' => null,
                'category_id' => 100,
            ],
            [
                'id' => 102,
                'name' => 'Update',
                'description' => null,
                'category_id' => 100,
            ],


            [
                'name' => 'Laravel',
                'description' => null,
                'category_id' => 101,
            ],
            [
                'name' => 'Symfony',
                'description' => null,
                'category_id' => 101,
            ],
            [
                'name' => 'Yii',
                'description' => null,
                'category_id' => 101,
            ],

            [
                'id' => 200,
                'name' => 'C',
                'description' => null,
                'category_id' => 0,
            ],

            [
                'id' => 300,
                'name' => 'Python',
                'description' => null,
                'category_id' => 0,
            ],

            [
                'id' => 400,
                'name' => 'JavaScript',
                'description' => null,
                'category_id' => 0,
            ],
            [
                'id' => 401,
                'name' => 'Frameworks',
                'description' => null,
                'category_id' => 400,
            ],
            [
                'id' => 402,
                'name' => 'React',
                'description' => null,
                'category_id' => 401,
            ],
            [
                'id' => 403,
                'name' => 'Vue',
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
