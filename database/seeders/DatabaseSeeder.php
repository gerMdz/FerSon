<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Curso;
use App\Models\Domicilio;
use App\Models\Entrada;
use App\Models\Lesson;
use App\Models\Profiler;
use App\Models\Section;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create()
            ->each(fn(User $user) => Profiler::factory(1)->create([
                'user_id' => $user->id
            ])
                ->each(fn($profiler) => Domicilio::factory()->create([
                    'profiler_id' => $profiler->id
                ]))
            );
        Category::factory(10)->create();
        Entrada::factory(100)->create();

        Curso::factory(10)->create()
            ->each(fn($curso) => Section::factory(2)->create([
                'curso_id' => $curso->id
            ])
                ->each(fn($section) => Lesson::factory(3)->create([
                    'section_id' => $section->id
                ]))
            );

    }
}
