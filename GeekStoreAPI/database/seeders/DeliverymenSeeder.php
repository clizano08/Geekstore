<?php

namespace Database\Seeders;

use App\Models\Deliverymen;
use Illuminate\Database\Seeder;

class DeliverymenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Personal entregra 1
        $Personal = \App\Models\Deliverymen::create([
            'name' => 'Jose',
            'sournames' => 'Mena Urtado',
            'vehicle_id' => 1,
            'phone' => '89878812'
        ]);
        //Personal entregra 2
        $Personal = \App\Models\Deliverymen::create([
            'name' => 'Esteban',
            'sournames' => 'Fonseca Zamora',
            'vehicle_id' => 2,
            'phone' => '89878812'
        ]);
        //Personal entregra 3
        $Personal = \App\Models\Deliverymen::create([
            'name' => 'Gabriela',
            'sournames' => 'Salas Alfaro',
            'vehicle_id' => 1,
            'phone' => '87878212'
        ]);
        //Personal entregra 4
        $Personal = \App\Models\Deliverymen::create([
            'name' => 'Audry',
            'sournames' => 'Fonseca Montes',
            'vehicle_id' => 2,
            'phone' => '89878812',
            'active'=>false
        ]);
        //Personal entregra 5
        $Personal = \App\Models\Deliverymen::create([
            'name' => 'Mariana',
            'sournames' => 'Lopez Montes',
            'vehicle_id' => 1,
            'phone' => '83898014',
            'active' => false
        ]);

    }
}
