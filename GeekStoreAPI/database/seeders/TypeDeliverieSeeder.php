<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeDeliverieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tipo 1
        $typeDeliverie = new \App\Models\TypeDeliverie();
        $typeDeliverie->description = 'Pasa a llevar';
        $typeDeliverie->save();
        //Tipo 2
        $typeDeliverie = new \App\Models\TypeDeliverie();
        $typeDeliverie->description = 'Express';
        $typeDeliverie->save();
    }
}
