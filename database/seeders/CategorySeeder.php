<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['title' => 'Electronics', 'description' => 'Electronic products', 'status' => 1],
            ['title' => 'Clothing', 'description' => 'Clothing and fashion items', 'status' => 1],
            ['title' => 'Home Appliances', 'description' => 'Appliances for home use', 'status' => 1],
            ['title' => 'Books', 'description' => 'Books and literature', 'status' => 1],
            ['title' => 'Sports', 'description' => 'Sports equipment and gear', 'status' => 1],
            ['title' => 'Beauty', 'description' => 'Beauty and personal care products', 'status' => 1],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
