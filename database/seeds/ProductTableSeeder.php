<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => '...',
        	'title' => 'Harry portar',
        	'description' =>'Super cool - at least as a child',
        	'price' => 10
        ]);
    }
}
