<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Admin::factory()->create([
            'name' => 'Laravel Rajkot',
            'email' => 'laravel@rajkot.com',
            'password' => bcrypt('laravel_rajkot'),
        ]);
        $this->command->info('Admin created successfully.');

        Category::factory(25)->create();
        $this->command->info('Categories are created successfully');
    }
}
