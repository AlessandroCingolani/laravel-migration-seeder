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
            $train->departure_station = $faker->city;
            $train->arrival_station = $faker->city;
            $train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrival_time = $faker->dateTimeInInterval($train->departure_time, '+3 days');
            $train->train_code = $faker->numerify('AB###');
            $train->number_carriage = $faker->numberBetween(3, 12);
            $train->is_in_time = $faker->numberBetween(0, 1);
            $train->is_delete = $faker->numberBetween(0, 1);

            $train->save();
        }
    }
}
