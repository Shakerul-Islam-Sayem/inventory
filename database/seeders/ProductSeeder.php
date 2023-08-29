<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'product_title' => 'Smartphone Model X',
                'product_description' => 'High-end smartphone with advanced features.',
                'product_sku' => 'SMX123',
                'purchase_price' => 500,
                'sale_price' => 800,
                'category_id' => 1,
                'supplier_id' => 1,
                'quantity' => 20,
            ],
            [
                'product_title' => 'Fashionable Jacket',
                'product_description' => 'Stylish jacket suitable for all occasions.',
                'product_sku' => 'JKT456',
                'purchase_price' => 100,
                'sale_price' => 150,
                'category_id' => 2,
                'supplier_id' => 2,
                'quantity' => 20,
            ],
            [
                'product_title' => 'LED TV 55"',
                'product_description' => 'High-definition LED TV with a large display.',
                'product_sku' => 'TVL789',
                'purchase_price' => 800,
                'sale_price' => 1200,
                'category_id' => 1,
                'supplier_id' => 3,
                'quantity' => 20,
            ],
            [
                'product_title' => 'Classic Novel Collection',
                'product_description' => 'Set of timeless classic novels.',
                'product_sku' => 'NOV932',
                'purchase_price' => 50,
                'sale_price' => 80,
                'category_id' => 4,
                'supplier_id' => 4,
                'quantity' => 20,
            ],
            [
                'product_title' => 'Running Shoes',
                'product_description' => 'High-performance running shoes for athletes.',
                'product_sku' => 'SHO753',
                'purchase_price' => 80,
                'sale_price' => 120,
                'category_id' => 5,
                'supplier_id' => 5,
                'quantity' => 20,
            ],
            [
                'product_title' => 'Compact Blender',
                'product_description' => 'Powerful blender for smoothies and shakes.',
                'product_sku' => 'BLE234',
                'purchase_price' => 60,
                'sale_price' => 90,
                'category_id' => 3,
                'supplier_id' => 6,
                'quantity' => 20,
            ],
            [
                'product_title' => 'Designer Sunglasses',
                'product_description' => 'Trendy sunglasses with UV protection.',
                'product_sku' => 'SUN567',
                'purchase_price' => 40,
                'sale_price' => 70,
                'category_id' => 2,
                'supplier_id' => 2,
                'quantity' => 20,
            ],
            [
                'product_title' => 'Wireless Gaming Mouse',
                'product_description' => 'Responsive gaming mouse for eSports enthusiasts.',
                'product_sku' => 'MOU876',
                'purchase_price' => 50,
                'sale_price' => 80,
                'category_id' => 1,
                'supplier_id' => 3,
                'quantity' => 20,
            ],
            [
                'product_title' => 'Fitness Tracker Watch',
                'product_description' => 'Monitor your health and fitness with this smartwatch.',
                'product_sku' => 'FIT345',
                'purchase_price' => 70,
                'sale_price' => 110,
                'category_id' => 5,
                'supplier_id' => 5,
                'quantity' => 20,
            ],
            [
                'product_title' => 'Cookbook Collection',
                'product_description' => 'Assortment of cookbooks for culinary enthusiasts.',
                'product_sku' => 'COOK789',
                'purchase_price' => 30,
                'sale_price' => 60,
                'category_id' => 4,
                'supplier_id' => 4,
                'quantity' => 20,
            ],
            [
                'product_title' => 'Headphone WI 3v',
                'product_description' => 'Headphone WI 3v Assortment of cookbooks for culinary enthusiasts.',
                'product_sku' => 'HPWI3V',
                'purchase_price' => 350,
                'sale_price' => 410,
                'category_id' => 2,
                'supplier_id' => 3,
                'quantity' => 20,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
