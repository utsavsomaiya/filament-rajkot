<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Admin::factory()->create([
            'name' => 'Laravel Rajkot',
            'email' => 'laravel@rajkot.com',
            'password' => bcrypt('laravel_rajkot'),
        ]);
        $this->command->info('Admin created successfully.');
    }
}
