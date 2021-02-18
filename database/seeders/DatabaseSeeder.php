<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Productos;
use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Venta;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Productos::factory(100)->create();
        Categoria::factory(100)->create();
        Cliente::factory(100)->create();
        Venta::factory(100)->create();
      
    }
}
