<?php

namespace Database\Factories;

use App\Models\Entrada;
use App\Models\EntradaEtiqueta;
use App\Models\Etiqueta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EntradaEtiquetaFactory extends Factory
{
    protected $model = EntradaEtiqueta::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'entrada_id' => Entrada::factory(),
            'etiqueta_id' => Etiqueta::factory(),
        ];
    }
}
