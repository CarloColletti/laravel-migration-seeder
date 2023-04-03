<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\train;
class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_train = new train;

        $new_train->azienda='asas';
        $new_train->stazione_di_partenza='asasa';
        $new_train->stazione_di_arrivo='asas';
        $new_train->orario_di_partenza='11:11:11';
        $new_train->orario_di_arrivo='11:11:11';
        $new_train->codice_treno='02558';
        $new_train->numero_carrozze='4';

        $new_train->save();
    }
}
