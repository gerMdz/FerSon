<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Profiler;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(100)->create()
             ->each(fn(User $user) => Profiler::factory()->create([
                 'user_id' => $user->id
             ]))
         ;
         Category::factory(10)->create();
//         Profiler::factory(100)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
