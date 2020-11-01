<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cliente 1
        $Usuario = \App\Models\User::create([
            'name' => 'Mario',
            'sournames' => 'Quintero Salinas',
            'email' => 'mquintero@geekstore.com',
            'password' => bcrypt('123456'),
            'rol_id' => 3,
            'phone' => '89878812'
        ]);
        //cliente 2
       $Usuario = \App\Models\User::create([
            'name' => 'Roy',
            'sournames' => 'Salavatierra Oreamuno',
            'email' => 'rsalvatierra@geekstore.com',
            'password' => bcrypt('123456'),
            'rol_id' => 3,
            'phone' => '83838333'
       ]);
        //cliente 2
        $Usuario = \App\Models\User::create([
            'name' => 'Akira',
            'sournames' => 'Onigumo Granados',
            'email' => 'aonigumo@geekstore.com',
            'password' => bcrypt('123456'),
            'rol_id' => 3,
            'phone' => '83838333'
        ]);
        //vendedor 1
        $Usuario = \App\Models\User::create([
            'name' => 'Jorge',
            'sournames' => 'Murillo Zamora',
            'email' => 'jmurillo@geekstore.com',
            'password' => bcrypt('123456'),
            'rol_id' => 2,
            'phone' => '84898192',
            'active'=> false
        ]);
        //admin 1
        $Usuario = \App\Models\User::create([
            'name' => 'Lenore',
           'sournames' => 'Saint Germain',
           'email' => 'lsaint@geekstore.com',
           'password' => bcrypt('123456'),
            'rol_id' => 1,
            'phone' => '89895911',
            'active'=> false
        ]);
        //admin 2
     //   $Usuario = \App\Models\User::create([
           // 'name' => 'Rocio',
            //'sournames' => 'Villegas Salas',
            //'email' => 'rvillegas@geekstore.com',
            //'password' => bcrypt('123456'),
          //  'rol_id' => 1,
           // 'phone' => '87835810'
    //    ]);
        //admin 2
   //     $Usuario = \App\Models\User::create([
    //        'name' => 'Carlos',
      //      'sournames' => 'Lizano Araya',
        //    'email' => 'clizano@geekstore.com',
          //  'password' => bcrypt('123456'),
            //'rol_id' => 1,
            //'phone' => '88905311'
        //]);
    }
}
