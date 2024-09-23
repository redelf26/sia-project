<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            'name' => 'Sample Product 1',
            'description' => 'This is a sample product 1.',
            'price' => 19.99,
            'stock' => 100
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'description' => 'This is a sample product 2.',
            'price' => 29.99,
            'stock' => 200
        ]);
    }
}
