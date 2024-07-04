<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

   
        Product::insert([
            'name' => 'Test Product1',
            'description' => 'This is a short description of the product1.',
            'price' => 1000,
            'image' => '/storage/Images/image_test_1.jpg'
        ]);
        Product::insert([
            'name' => 'Test Product2',
            'description' => 'This is a short description of the product2.',
            'price' => 1000,
            'image' => '/storage/Images/image_test_2.jpg'
        ]);
        Product::insert([
            'name' => 'Test Product3',
            'description' => 'This is a short description of the product2.',
            'price' => 1000,
            'image' => '/storage/Images/image_test_3.jpg'
        ]);
        Product::insert([
            'name' => 'Test Product3',
            'description' => 'This is a short description of the product3.',
            'price' => 1000,
            'image' => '/storage/Images/image_test_4.jpg'
        ]);
        Product::insert([
            'name' => 'Test Product4',
            'description' => 'This is a short description of the product4.',
            'price' => 1000,
            'image' => '/storage/Images/image_test_5.jpg'
        ]);
        Product::insert([
            'name' => 'Test Product5',
            'description' => 'This is a short description of the product5.',
            'price' => 1000,
            'image' => '/storage/Images/image_test_6.jpg'
        ]);
     

    }
}
