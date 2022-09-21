<?php

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Seeder;


class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i =0; $i < 10; $i++){

            $new_trains= new Train();
            
            $new_trains->azienda = $faker->company();      
            $new_trains->stazione_di_partenza = $faker->city();      
            $new_trains->stazione_di_arrivo = $faker->city();      
            $new_trains->orario_di_partenza = $faker->time();
            $new_trains->orario_di_arrivo = $faker->time();
            $new_trains->codice_treno = $faker->ean8();
            $new_trains->numero_carrozze = $faker->randomDigit();
            $new_trains->in_orario = $faker->boolean();
            $new_trains->cancellato = $faker->boolean();
        
            $new_trains->save();
           
        }
    }
}