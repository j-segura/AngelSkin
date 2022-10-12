<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(UserSeeder::class);
        $this->call(FotoSeeder::class);
        $this->call(CategoriaSeeder::class);
        Marca::factory(20)->create();
        Articulo::factory(50)->create();
    }
}
