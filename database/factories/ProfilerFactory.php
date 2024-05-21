<?php

namespace Database\Factories;

use App\Models\Profiler;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProfilerFactory extends Factory
{
    protected $model = Profiler::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'job' => $this->faker->jobTitle(),
            'phone' => $this->faker->phoneNumber(),
            'website' => $this->faker->url(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'postal_code' => $this->faker->postcode(),
            'image' => $this->faker->imageUrl(),


        ];
    }
}
