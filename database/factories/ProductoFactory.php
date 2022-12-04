<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->word(),
            'editorial' => fake()->word(),
            'ano_de_publicacion' => fake()->numerify('####'),
            'mes_de_publicacion' => fake()->monthName(),
            'tipo_de_publicacion' => fake()->randomElement(['ficcion', 'fantasia', 'crimen']),
            'pais' => fake()->country(),
            'paginas' => fake()->numberBetween(1, 1000),
            'descripcion' => fake()->paragraph(),
            'precio' => fake()->numberBetween(1, 1000),
            'stock' => fake()->numberBetween(1, 100),
        ];
    }
}
