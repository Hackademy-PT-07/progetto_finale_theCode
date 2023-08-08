<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Category::create([
            'name' => 'Auto'
        ]);
        \App\Models\Category::create([
            'name' => 'Moto'
        ]);
        \App\Models\Category::create([
            'name' => 'Nautica'
        ]);
        \App\Models\Category::create([
            'name' => 'Videogiochi'
        ]);
        \App\Models\Category::create([
            'name' => 'Smartphone'
        ]);
        \App\Models\Category::create([
            'name' => 'PC'
        ]);
        \App\Models\Category::create([
            'name' => 'Collezionismo'
        ]);
        \App\Models\Category::create([
            'name' => 'Musica'
        ]);
        \App\Models\Category::create([
            'name' => 'Film'
        ]);
        \App\Models\Category::create([
            'name' => 'Libri'
        ]);
    }
}
