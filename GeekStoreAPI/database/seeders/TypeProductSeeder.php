<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Pendiente
        //Tipo 1
        $typeProduct = new \App\Models\TypeProduct();
        $typeProduct->description = 'Consola';
        $typeProduct->save();
        //Tipo 2
        $typeProduct = new \App\Models\TypeProduct();
        $typeProduct->description = 'Videojuego';
        $typeProduct->save();
        //Tipo 3
        $typeProduct = new \App\Models\TypeProduct();
        $typeProduct->description = 'Amiibo';
        $typeProduct->save();
        //Tipo 4
        $typeProduct = new \App\Models\TypeProduct();
        $typeProduct->description = 'Control';
        $typeProduct->save();
        //Tipo 5
        $typeProduct = new \App\Models\TypeProduct();
        $typeProduct->description = 'Figura';
        $typeProduct->save();
        //Tipo 6
        $typeProduct = new \App\Models\TypeProduct();
        $typeProduct->description = 'Funko Pop';
        $typeProduct->save();
        //Tipo 7
        $typeProduct = new \App\Models\TypeProduct();
        $typeProduct->description = 'Camisa';
        $typeProduct->save();
        //Tipo 8
        $typeProduct = new \App\Models\TypeProduct();
        $typeProduct->description = 'Consola';
        $typeProduct->save();
    }
}
