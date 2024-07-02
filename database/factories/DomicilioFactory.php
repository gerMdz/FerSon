<?php

namespace Database\Factories;

use App\Models\Domicilio;
use App\Models\Profiler;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DomicilioFactory extends Factory
{
    protected $model = Domicilio::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'address' => $this->faker->word() . ' ' . $this->faker->numberBetween(0,1000),
            'ciudad' => $this->faker->word(),
            'pais' => $this->faker->word(),
            'postal_code' => $this->faker->numberBetween(1000, 9999),
            'profiler_id' => Profiler::factory(),
        ];
    }
}
