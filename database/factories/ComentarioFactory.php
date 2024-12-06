<?php

namespace Database\Factories;

use App\Models\Comentario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ComentarioFactory extends Factory
{
    protected $model = Comentario::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
