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
            'slug' => 'skincare',
            'image' => 'category-1.png',
        ]);

        Categoria::create([
            'name' => 'Labios',
            'slug' => 'labios',
            'image' => 'category-2.png'
        ]);

        Categoria::create([
            'name' => 'Cabello',
            'slug' => 'cabello',
            'image' => 'category-3.png'
        ]);

        Categoria::create([
            'name' => 'Ojo',
            'slug' => 'ojo',
            'image' => 'category-4.png'
        ]);

        Categoria::create([
            'name' => 'Maquillaje',
            'slug' => 'maquillaje',
            'image' => 'category-5.png'
        ]);

        Categoria::create([
            'name' => 'Fragancias',
            'slug' => 'fragancias',
            'image' => 'category-6.png'
        ]);
    }
}
