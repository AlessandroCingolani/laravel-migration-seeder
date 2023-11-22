<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->agency = $faker->words(3, true);
            $train->departure_station = $faker->words(3, true);
            $train->arrival_station = $faker->words(3, true);
            $train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrival_time = $train->departure_time;
            $train->train_code = $faker->numerify('AB###');
            $train->number_carriage = $faker->numberBetween(3, 12);
            // $train->is_in_time = $faker->words(3, true);
            // $train->is_delete = $faker->words(3, true);
        }
        dump($train);
    }
}
