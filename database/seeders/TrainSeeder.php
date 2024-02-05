<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i=0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departing_station = $faker->city();
            $newTrain->arriving_station = $faker->city();
            $newTrain->departing_time = $faker->time();
            $newTrain->arriving_time = $faker->time();
            $newTrain->train_code =  $faker->regexify('[A-Z]{10}[0-9]{8}');
            $newTrain->wagons_no = $faker->numberBetween(5, 15);
            $newTrain->on_time = $faker->boolean(30);
            $newTrain->cancelled = $faker->boolean(15);
            $newTrain->save();
        }

    }
}
