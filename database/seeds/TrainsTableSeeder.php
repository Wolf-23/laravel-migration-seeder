<?php
use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');
        for($i=0; $i<100; $i++) {
            $newTrain = new Train();
            $newTrain->brand = $faker->word();
            $newTrain->departure =  $faker->city();
            $newTrain->arrival =  $faker->city();
            $newTrain->date_departure = $faker->dateTimeThisYear();
            $newTrain->date_arrival = $faker->dateTimeThisYear();
            $newTrain->train_code = $faker->randomNumber(9, true);
            $newTrain->n_carriages = $faker->randomNumber(2, false);
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
