<?php

use App\Models\Train;
use Illuminate\Database\Seeder;


class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_trains= new Train();
          
            $new_trains->azienda = 'rfi';      
            $new_trains->stazione_di_partenza = '';      
            $new_trains->stazione_di_arrivo = '';      
            $new_trains->orario_di_partenza = '';
            $new_trains->orario_di_arrivo = '';
            $new_trains->codice_treno = '';
            $new_trains->numero_carrozze = '';
            $new_trains->in_orario = '';
            $new_trains->cancellato = '';
        
            $new_trains->save();
           
    }
}