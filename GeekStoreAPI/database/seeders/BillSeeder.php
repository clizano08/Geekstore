<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factura 1
        $factura = \App\Models\Bill::create([
            'orderheader_id' => 1,
            'status' => true,

        ]);
        //factura 2
        $factura = \App\Models\Bill::create([
            'orderheader_id' => 2,
            'status' => false,

        ]);
        //factura 3
        $factura = \App\Models\Bill::create([
            'orderheader_id' => 3,
            'status' => true,

        ]);
        //factura 4
        $factura = \App\Models\Bill::create([
            'orderheader_id' => 4,
            'status' => false,

        ]);
        //factura 5
        $factura = \App\Models\Bill::create([
            'orderheader_id' => 5,
            'status' => true,

        ]);
    }
}
