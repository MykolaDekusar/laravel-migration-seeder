<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $data = new Train();
            $data->agency = $faker->company;
            $data->departure_station = $faker->city;
            $data->arrival_station = $faker->city;
            $data->departure_time = $faker->dateTimeThisMonth;
            $data->arrival_time = $faker->dateTimeThisMonth;
            $data->train_code = $faker->bothify('??####');
            $data->train_length = $faker->numberBetween(2, 30);
            $data->is_in_time = $faker->boolean();
            $data->is_cancelled = $faker->boolean();
            $data->save();
        }
    }
}
