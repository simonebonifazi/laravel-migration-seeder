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
            $table->string('Azienda');      
            $table->string('Stazione di partenza');      
            $table->string('Stazione di arrivo');      
            $table->timeTz('Orario di partenza');
            $table->timeTz('Orario di arrivo');
            $table->tinyInteger('Codice treno');
            $table->smallInteger('Numero carrozze');
            $table->boolean('In orario')->default(0);
            $table->boolean('Cancellato')->default(1);
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