<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        $aziende = [
            'trenitalia', 
            'Frecciarossa',
            'Italo'
        ];

        for($i=0; $i < 13; $i++){
            $train = new Train();
            $train->azienda = $aziende[rand(0, count($aziende) - 1)];
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_partenza = $faker->time('H:i');
            $train->orario_di_arrivo= $faker->time('H:i');
            $train->codice_treno= "NIUNIEN43" . $i;
            $train->price = rand(5, 100);


            $train->save();
        }
         

    }
}
