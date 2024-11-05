<?php

namespace Database\Factories;

use App\Models\Images;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ImagesFactory extends Factory
{
    protected $model = Images::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
