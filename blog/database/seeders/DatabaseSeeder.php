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
        \App\Models\Article::factory(20)->create();
        \App\Models\Comment::factory(40)->create();

        $list = ['News', 'Tech', 'Web', 'Mobile', 'Oss'];
        foreach($list as $name) {
            \App\Models\Category::create(['name' => $name]);
        }

        \App\Models\User::factory()->create([
            'name' => 'Alice',
            'email' => 'alice@gmail.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Bob',
            'email' => 'bob@gmail.com',
        ]);
    }
}
