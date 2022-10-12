<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'name' => 'Skincare',
            'image' => 'category-1.png'
        ]);

        Categoria::create([
            'name' => 'Labios',
            'image' => 'category-2.png'
        ]);

        Categoria::create([
            'name' => 'Cabello',
            'image' => 'category-3.png'
        ]);

        Categoria::create([
            'name' => 'Ojo',
            'image' => 'category-4.png'
        ]);

        Categoria::create([
            'name' => 'Maquillaje',
            'image' => 'category-5.png'
        ]);

        Categoria::create([
            'name' => 'Fragancias',
            'image' => 'category-6.png'
        ]);
    }
}
