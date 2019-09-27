<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'T-shirt',
            'rate' => 500
        ]
    );
    Product::create([
        'name' => 'Gabardine Pant',
        'rate' => 1655
    ]
    );
    Product::create([
        'name' => 'Shirt',
        'rate' => 1580
    ]
    );
    Product::create([
        'name' => 'Panjabi',
        'rate' => 1980
    ]
    );
    }
}
