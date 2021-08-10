<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $product = [
            [
                'name' => 'Foldig Gate',
                'img' => 'Picture1.png',
            ],
            [
                'name' => 'Canopy',
                'img' => 'Picture2.png',
            ],
            [
                'name' => 'Ralling Tangga',
                'img' => 'Picture3.png',
            ],
            [
                'name' => 'Tralis',
                'img' => 'Picture4.png',
            ],
            [
                'name' => 'Pagar',
                'img' => 'Picture5.png',
            ],
            [
                'name' => 'Pitu Henderson',
                'img' => 'Picture6.png',
            ],
        ];
        
        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
