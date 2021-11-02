<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(30)->create();
        // User::factory()
        //     ->times(30)
        //     ->hashPosts(1)
        //     ->create();
        // $this->call([
        //     UserSeeder::class,
        //     PostSeeder::class,
        // ]);
    }
}