<?php

use App\Modeling;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modeling::truncate();
        $model = [
            [
                'product_id' => 1,
                'img' => 'Picture7.png',
                'name' => 'Folding Gate',
            ],
            [
                'product_id' => 1,
                'img' => 'Picture8.png',
                'name' => 'Rolling Door',
            ],
            [
                'product_id' => 2,
                'img' => 'Picture9.png',
                'name' => 'Canopy Polycarbonate',
            ],
            [
                'product_id' => 2,
                'img' => 'Picture10.png',
                'name' => 'Canopy Alderon',
            ],
            [
                'product_id' => 2,
                'img' => 'Picture11.png',
                'name' => 'Canopy Kain',
            ],
            [
                'product_id' => 2,
                'img' => 'Picture12.png',
                'name' => 'Canopy Kaca',
            ],
            [
                'product_id' => 3,
                'img' => 'Picture13.png',
                'name' => 'Model-1',
            ],
            [
                'product_id' => 3,
                'img' => 'Picture14.png',
                'name' => 'Model-2',
            ],
            [
                'product_id' => 3,
                'img' => 'Picture15.png',
                'name' => 'Model-3',
            ],
            [
                'product_id' => 3,
                'img' => 'Picture16.png',
                'name' => 'Model-4',
            ],
            [
                'product_id' => 3,
                'img' => 'Picture17.png',
                'name' => 'Model-5',
            ],
            [
                'product_id' => 3,
                'img' => 'Picture18.png',
                'name' => 'Model-6',
            ],
            [
                'product_id' => 3,
                'img' => 'Picture19.png',
                'name' => 'Model-7',
            ],
            [
                'product_id' => 4,
                'img' => 'Picture20.png',
                'name' => 'Model-1',
            ],
            [
                'product_id' => 4,
                'img' => 'Picture21.png',
                'name' => 'Model-2',
            ],
            [
                'product_id' => 4,
                'img' => 'Picture22.png',
                'name' => 'Model-3',
            ],
            [
                'product_id' => 4,
                'img' => 'Picture23.png',
                'name' => 'Model-4',
            ],
            [
                'product_id' => 4,
                'img' => 'Picture24.png',
                'name' => 'Model-5',
            ],
            [
                'product_id' => 4,
                'img' => 'Picture25.png',
                'name' => 'Model-6',
            ],
            [
                'product_id' => 4,
                'img' => 'Picture26.png',
                'name' => 'Model-7',
            ],
            [
                'product_id' => 5,
                'img' => 'Picture27.png',
                'name' => 'Model-1',
            ],
            [
                'product_id' => 5,
                'img' => 'Picture28.png',
                'name' => 'Model-2',
            ],
            [
                'product_id' => 5,
                'img' => 'Picture29.png',
                'name' => 'Model-3',
            ],
            [
                'product_id' => 5,
                'img' => 'Picture30.png',
                'name' => 'Model-4',
            ],
            [
                'product_id' => 5,
                'img' => 'Picture31.png',
                'name' => 'Model-5',
            ],
            [
                'product_id' => 5,
                'img' => 'Picture32.png',
                'name' => 'Model-6',
            ],
            [
                'product_id' => 6,
                'img' => 'Picture33.png',
                'name' => 'Model-1',
            ],
            [
                'product_id' => 6,
                'img' => 'Picture34.png',
                'name' => 'Model-2',
            ],
            [
                'product_id' => 6,
                'img' => 'Picture35.png',
                'name' => 'Model-3',
            ],
            [
                'product_id' => 6,
                'img' => 'Picture36.png',
                'name' => 'Model-4',
            ],
            [
                'product_id' => 6,
                'img' => 'Picture37.png',
                'name' => 'Model-5',
            ],
            [
                'product_id' => 6,
                'img' => 'Picture38.png',
                'name' => 'Model-6',
            ],
        ];
        
        foreach ($model as $key => $value) {
            Modeling::create($value);
        }
    }
}
