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
            $table->string('azienda', 40);
            $table->string('Stazione_di_partenza', 30);
            $table->string('Stazione_di_arrivo', 30);
            $table->time('orario_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_treno', 30);
            $table->integer('numero_carrozze');
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);
            $table->decimal('price',6,2);
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
