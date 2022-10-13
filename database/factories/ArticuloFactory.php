<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->word();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'image' => $this->faker->randomElement([
                'product-1.jpg',
                'product-2.jpg',
                'product-3.jpg',
                'product-4.jpg',
                'product-5.jpg',
                'product-6.jpg',
                'product-7.jpg',
                'product-8.jpg',
            ]),
            'descripcion' => $this->faker->text(300),
            'precio' => $this->faker->randomElement(['4.000', '5.000', '10.000', '12.000', '100.000']),
            'categoria_id' => Categoria::all()->random()->id,
            'marca_id' => Marca::all()->random()->id,
        ];
    }
}
