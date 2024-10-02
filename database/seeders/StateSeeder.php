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
     */
    public function run(): void
    {
        $states = [
            [
                'name' => 'Western Australia',
                'code' => 'WA',
                'country'=>"Australia",
            ],

        ];

        foreach ($states as $state) {
            $country = Country::where('name','=',$state['country'])->get()??null;
            unset($state['country']);
            if (! is_null($country[0])) {
                $state['country_id'] = $country[0]->id;
            }
            State::create($state);
        }

        State::factory(100)->create();

    }
}
