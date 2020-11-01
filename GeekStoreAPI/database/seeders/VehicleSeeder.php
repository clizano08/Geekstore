<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vehiculo 1 Moto
        $Vehiculo = \App\Models\Vehicle::create([
            'licensePlate' => '236745',
            'brand' => 'Formula',
            'typeVehicle_id' => 2,

        ]);
        //Vehiculo 2 Carro
        $Vehiculo = \App\Models\Vehicle::create([
            'licensePlate' => '226849',
            'brand' => 'Toyota',
            'typeVehicle_id' => 1,

        ]);
        //Vehiculo 3 Carro
        $Vehiculo = \App\Models\Vehicle::create([
            'licensePlate' => '325809',
            'brand' => 'Yaris',
            'typeVehicle_id' => 1,

        ]);
        //Vehiculo 4 Moto
        $Vehiculo = \App\Models\Vehicle::create([
            'licensePlate' => '446585',
            'brand' => 'Kawasaki',
            'typeVehicle_id' => 2,

        ]);
        //Vehiculo 3 Carro
        $Vehiculo = \App\Models\Vehicle::create([
            'licensePlate' => '626806',
            'brand' => 'Tacoma',
            'typeVehicle_id' => 3,

        ]);
    }
}
