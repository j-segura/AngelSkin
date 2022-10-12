<?php

namespace Database\Seeders;

use App\Models\Foto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Foto::create([
            'image' => 'gallery1.jpg'
        ]);

        Foto::create([
            'image' => 'gallery2.jpg'
        ]);

        Foto::create([
            'image' => 'gallery3.jpg'
        ]);

        Foto::create([
            'image' => 'gallery4.jpg'
        ]);

        Foto::create([
            'image' => 'gallery5.jpg'
        ]);

        Foto::create([
            'image' => 'gallery6.jpg'
        ]);
    }
}
