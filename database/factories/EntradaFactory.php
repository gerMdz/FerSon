<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Entrada;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Entrada>
 */
class EntradaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'titulo'=> fake('es_AR')->sentence(),
                'body'=> fake('es_AR')->text(),
                'category_id' => Category::query()->inRandomOrder()->first()->id
        ];
    }
}
