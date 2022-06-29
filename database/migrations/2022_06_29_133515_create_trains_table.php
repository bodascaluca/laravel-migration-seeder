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
            $table->string('azienda', 40 );
            $table->string('Stazione_di_partenza', 30);
            $table->string('Stazione_di_arrivo', 30);
            $table->time('orario_partenza', 5);
            $table->time('orario_di_arrivo', 5);
            $table->string('codice_treno', 30);
            $table->tinyInteger('numero_carrozze', 20);
            $table->boolean('in_orario',1);
            $table->boolean('cancellato', 0);
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
