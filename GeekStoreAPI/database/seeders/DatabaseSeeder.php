<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //independientes
        $this->call(RolSeeder::class);
        $this->call(ClasificationSeeder::class);
        $this->call(TypeProductSeeder::class);
        $this->call(TypeVehicleSeeder::class);
        $this->call(TypeDeliverieSeeder::class);
        //dependientes
        $this->call(UserSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(DeliverymenSeeder::class);
        $this->call(ProductSeeder::class);
       // $this->call(Clasification_ProductSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(BillSeeder::class);
    }
}
