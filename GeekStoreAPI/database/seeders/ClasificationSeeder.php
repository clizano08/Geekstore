<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClasificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Clasificacion 1
        $clasification = new \App\Models\Clasification();
        $clasification->description='Antiguedades';
        $clasification->save();
        //Clasificacion 2
        $clasification = new \App\Models\Clasification();
        $clasification->description = 'Accesorio';
        $clasification->save();
        //Clasificacion 3
        $clasification = new \App\Models\Clasification();
        $clasification->description = 'Articulo de colección';
        $clasification->save();
        //Clasificacion 4
        $clasification = new \App\Models\Clasification();
        $clasification->description = 'Deportivo';
        $clasification->save();
        //Clasificacion 5
        $clasification = new \App\Models\Clasification();
        $clasification->description = 'Videojuegos y consolas';
        $clasification->save();
        //Clasificacion 6
        $clasification = new \App\Models\Clasification();
        $clasification->description = 'Tecnología';
        $clasification->save();
        //Clasificacion 7
        $clasification = new \App\Models\Clasification();
        $clasification->description = 'Redes';
        $clasification->save();
        //Clasificacion 8
        $clasification = new \App\Models\Clasification();
        $clasification->description = 'Entretenimiento';
        $clasification->save();
        //Clasificacion 9
        $clasification = new \App\Models\Clasification();
        $clasification->description = 'Joyería';
        $clasification->save();
        //Clasificacion 10
        $clasification = new \App\Models\Clasification();
        $clasification->description = 'Ropa';
        $clasification->save();
        //Clasificacion 11
        $clasification = new \App\Models\Clasification();
        $clasification->description = 'Zapatos';
        $clasification->save();
        //Clasificacion 12
        $clasification = new \App\Models\Clasification();
        $clasification->description = 'Hogar';
        $clasification->save();


    }
}
