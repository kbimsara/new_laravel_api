<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

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

        // Seed Brands
        $brandId1 = \Illuminate\Support\Facades\DB::table('brands')->insertGetId([
            'brand_name' => 'Apple',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $brandId2 = \Illuminate\Support\Facades\DB::table('brands')->insertGetId([
            'brand_name' => 'Samsung',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed Product Models
        \Illuminate\Support\Facades\DB::table('product_models')->insert([
            [
                'brand_id' => $brandId1,
                'model_name' => 'iPhone 15 Pro',
                'is_active' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => $brandId1,
                'model_name' => 'MacBook Pro M3',
                'is_active' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => $brandId2,
                'model_name' => 'Galaxy S24 Ultra',
                'is_active' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
