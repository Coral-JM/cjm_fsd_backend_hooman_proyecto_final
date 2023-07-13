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

        $this->call([
            RoleSeeder::class
        ]);

        \App\Models\User::factory()->create([
            'role_id'=> 1,
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '1234Admin'
        ]);
        \App\Models\User::factory()->create([
            'role_id'=> 2,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '1234'
        ]);




    }
}
