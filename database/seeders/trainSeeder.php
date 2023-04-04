<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\train;

use Faker\Generator as Faker;

class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // generare manualmente il dato da inserire nel database
    // public function run()
    // {
    //     $new_train = new train;

    //     $new_train->azienda='asas';
    //     $new_train->stazione_di_partenza='asasa';
    //     $new_train->stazione_di_arrivo='asas';
    //     $new_train->orario_di_partenza='11:11:11';
    //     $new_train->orario_di_arrivo='11:11:11';
    //     $new_train->codice_treno='02558';
    //     $new_train->numero_carrozze='4';

    //     $new_train->save();
    // }

    public function run(Faker $faker)
    {

      for($i = 0; $i < 100; $i++){
        $new_train = new train;
  
  
        $new_train->azienda = $faker->word();
        $new_train->stazione_di_partenza = $faker->word();
        $new_train->stazione_di_arrivo = $faker->word();
        $new_train->orario_di_partenza = $faker->time();
        $new_train->orario_di_arrivo = $faker->time();
        $new_train->codice_treno = $faker->randomNumber(5, true);
        $new_train->numero_carrozze = $faker->randomDigit();
        $new_train->in_orario = $faker->boolean();
        $new_train->cancellato = $faker->boolean();
  
  
        $new_train->save();
      }
    }
}
