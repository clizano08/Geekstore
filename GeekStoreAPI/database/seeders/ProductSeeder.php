<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Producto 1
        $Producto = new \App\Models\Product();
        $Producto->name = 'Persona 5 Royal';
        $Producto->price = 35000;
        $Producto->typeproduct_id = 2;
        $Producto->save();
        $Producto->clasification()->attach([5, 6, 8]);
        //Producto 2
        $Producto = new \App\Models\Product();
        $Producto->name = 'Inuyasha';
        $Producto->price = 5000;
        $Producto->typeproduct_id = 5;
        $Producto->save();
        $Producto->clasification()->attach([2, 3]);
        //Producto 3
        $Producto = new \App\Models\Product();
        $Producto->name = 'Kagura';
        $Producto->price = 8000;
        $Producto->typeproduct_id = 5;
        $Producto->save();
        $Producto->clasification()->attach([2, 3]);
        //Producto 4
        $Producto = new \App\Models\Product();
        $Producto->name = 'Pokemon Shield + Expansion Pass';
        $Producto->price = 40000;
        $Producto->typeproduct_id = 2;
        $Producto->active = false;
        $Producto->save();
        $Producto->clasification()->attach([5, 6, 8]);
        //Producto 5
        $Producto = new \App\Models\Product();
        $Producto->name = 'Metroid Samus Returns';
        $Producto->price = 28000;
        $Producto->typeproduct_id = 2;
        $Producto->active = false;
        $Producto->save();
        $Producto->clasification()->attach([5, 6, 8, 3]);
    }
}
