<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tipo 1
        $typeVehicle = new \App\Models\TypeVehicle();
        $typeVehicle->description = 'Carro';
        $typeVehicle->save();
        //Tipo 2
        $typeVehicle = new \App\Models\TypeVehicle();
        $typeVehicle->description = 'Moto';
        $typeVehicle->save();
        //Tipo 3
        $typeVehicle = new \App\Models\TypeVehicle();
        $typeVehicle->description = 'Pickup';
        $typeVehicle->save();
    }
}
