<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder ;
use Database\Seeders\GameSeeder ;
use Database\Seeders\ReviewingSeeder ;
use Database\Seeders\User_gameSeeder ;
use Database\Seeders\UserSeeder ;



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

        $this->call([
            CategorySeeder::class,
            GameSeeder::class,
            ReviewingSeeder::class,
            User_gameSeeder::class,
            UserSeeder::class,
        ]);
    }
}
