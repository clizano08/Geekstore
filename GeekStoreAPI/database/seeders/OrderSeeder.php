<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fecha1 = Carbon::yesterday();
        $fecha2 = Carbon::now();
        //Orden 1
        $Orden = \App\Models\OrderHeader::create([
            'user_id' => 1,
            'deliverymen_id' => 2,
            'typedeliverie_id' => 2,
            'date' => $fecha1->toDate(),
            'hour'=> $fecha2->toTimeString(),
            'address' => 'Grecia, 300mts noreste de la iglesia',
            'shipping' => 2000,
            'tax' => 500,
            'Total' => 10500,
        ]);
        //Detalle 1
        $Detalle = \App\Models\OrderDetail::create([
            'product_id' => 2,
            'orderheader_id' => 1,
            'quantity' => 2,
            'price' => 5000,
            'subtotal' => 10000,

        ]);
        //Orden 2
        $Orden = \App\Models\OrderHeader::create([
            'user_id' => 2,
            'deliverymen_id' => 1,
            'typedeliverie_id' => 1,
            'date' => $fecha1->toDate(),
            'hour' => $fecha2->toTimeString(),
            'address' => 'Naranjo, 300mts noreste de la iglesia',
            'shipping' => 2000,
            'tax' => 550,
            'Total' => 3750,
        ]);
        //Detalle 2
        $Detalle = \App\Models\OrderDetail::create([
            'product_id' => 1,
            'orderheader_id' => 2,
            'quantity' => 1,
            'price' => 35000,
            'subtotal' => 35000,

        ]);
        //Detalle 2
        $Detalle = \App\Models\OrderDetail::create([
            'product_id' => 2,
            'orderheader_id' => 2,
            'quantity' => 1,
            'price' => 35000,
            'subtotal' => 35000,

        ]);

        //Orden 3
        $Orden = \App\Models\OrderHeader::create([
            'user_id' => 3,
            'deliverymen_id' => 3,
            'typedeliverie_id' => 2,
            'date' => $fecha1->toDate(),
            'hour' => $fecha2->toTimeString(),
            'address' => 'Alajuela, 350mts noreste de la UTN',
            'shipping' => 3000,
            'tax' => 850,
            'Total' => 55000,
        ]);
        //Detalle 3
        $Detalle = \App\Models\OrderDetail::create([
            'product_id' => 3,
            'orderheader_id' => 3,
            'quantity' => 1,
            'price' => 8000,
            'subtotal' => 8000,

        ]);
        //Detalle 3
        $Detalle = \App\Models\OrderDetail::create([
            'product_id' => 1,
            'orderheader_id' => 3,
            'quantity' => 1,
            'price' => 35000,
            'subtotal' => 35000,

        ]);
        //Orden 4
        $Orden = \App\Models\OrderHeader::create([
            'user_id' => 4,
            'deliverymen_id' => 5,
            'typedeliverie_id' => 1,
            'date' => $fecha1->toDate(),
            'hour' => $fecha2->toTimeString(),
            'address' => 'San Jose, 300mts noreste de la iglesia',
            'shipping' => 0,
            'tax' => 750,
            'Total' => 45000,
            'status'=> false
        ]);
        //Detalle 4
        $Detalle = \App\Models\OrderDetail::create([
            'product_id' => 1,
            'orderheader_id' => 4,
            'quantity' => 1,
            'price' => 35000,
            'subtotal' => 35000,

        ]);
        //Detalle 4
        $Detalle = \App\Models\OrderDetail::create([
            'product_id' => 3,
            'orderheader_id' => 4,
            'quantity' => 1,
            'price' => 35000,
            'subtotal' => 35000,

        ]);
        //Detalle 4
        $Detalle = \App\Models\OrderDetail::create([
            'product_id' => 2,
            'orderheader_id' => 4,
            'quantity' => 1,
            'price' => 5000,
            'subtotal' => 5000,

        ]);
        //Orden 5
        $Orden = \App\Models\OrderHeader::create([
            'user_id' => 2,
            'deliverymen_id' => 2,
            'typedeliverie_id' => 2,
            'date' => $fecha1->toDate(),
            'hour' => $fecha2->toTimeString(),
            'address' => 'Palmares, 350mts noreste de la UTN',
            'shipping' => 3000,
            'tax' => 850,
            'Total' => 55000,
            'status' => false
        ]);
        //Detalle 5
        $Detalle = \App\Models\OrderDetail::create([
            'product_id' => 3,
            'orderheader_id' => 5,
            'quantity' => 1,
            'price' => 8000,
            'subtotal' => 8000,

        ]);
        //Detalle 5
        $Detalle = \App\Models\OrderDetail::create([
            'product_id' => 1,
            'orderheader_id' => 5,
            'quantity' => 1,
            'price' => 35000,
            'subtotal' => 35000,

        ]);

    }
}
