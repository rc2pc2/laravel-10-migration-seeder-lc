<?php

namespace Database\Seeders;

use App\Helpers\Reader;
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

        $csvData = Reader::readCSV(__DIR__ . '/../../resources/assets/trains.csv');

        foreach ($csvData as $i => $trainRow) {
            if($i > 0){
                $newTrain = new Train();
                $newTrain->company = $trainRow[0];
                $newTrain->departing_station = $trainRow[1];
                $newTrain->arriving_station = $trainRow[2];
                $newTrain->departing_time = $trainRow[3];
                $newTrain->arriving_time = $trainRow[4];
                $newTrain->train_code =  $trainRow[5];
                $newTrain->wagons_no = $trainRow[6];
                $newTrain->on_time = $trainRow[7];
                $newTrain->cancelled = $trainRow[8];
                $newTrain->save();
            }
        }

        // for ($i=0; $i < 100; $i++) {
        //     $newTrain = new Train();
        //     $newTrain->company = $faker->company();
        //     $newTrain->departing_station = $faker->city();
        //     $newTrain->arriving_station = $faker->city();
        //     $newTrain->departing_time = $faker->time();
        //     $newTrain->arriving_time = $faker->time();
        //     $newTrain->train_code =  $faker->regexify('[A-Z]{10}[0-9]{8}');
        //     $newTrain->wagons_no = $faker->numberBetween(5, 15);
        //     $newTrain->on_time = $faker->boolean(30);
        //     $newTrain->cancelled = $faker->boolean(15);
        //     $newTrain->save();
        // }

    }
}
