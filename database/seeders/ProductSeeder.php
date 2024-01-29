<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        {
            Product::create([
                'name' => 'Fertilizer',
                'stock_level' => 100,
            ]);
            $this->call(ProductSeeder::class);
            // Add more sample data as needed
        }
    }
}
