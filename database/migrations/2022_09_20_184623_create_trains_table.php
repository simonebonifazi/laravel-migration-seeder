<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');      
            $table->string('stazione_di_partenza');      
            $table->string('stazione_di_arrivo');      
            $table->timeTz('orario_di_partenza');
            $table->timeTz('orario_di_arrivo');
            $table->tinyInteger('codice_treno');
            $table->smallInteger('numero_carrozze');
            $table->boolean('in_orario')->default(0);
            $table->boolean('cancellato')->default(1);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}