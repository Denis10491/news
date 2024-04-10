<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'test'
        ]);

        Admin::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => 'admin'
        ]);

        Post::factory(25)->create();

        Comment::factory(50)
            ->for(User::factory())
            ->create();
    }
}
