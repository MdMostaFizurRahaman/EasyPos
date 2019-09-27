<?php

use Illuminate\Database\Seeder;

use App\Item;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name' => "Shopping Bag",
            'brand' => "Easy",
            'rate' => 15,
            'unit' =>'pcs',
        ]);

        Item::create([
            'name' => "Wholesale Bag",
            'brand' => "Easy",
            'rate' => 11,
            'unit' =>'pcs',
        ]);

        Item::create([
            'name' => "Hand Tag",
            'brand' => "Easy",
            'rate' => 2,
            'unit' =>'pcs',
        ]);


        Item::create([
            'name' => "Visiting Card",
            'brand' => "Easy",
            'rate' => 0.8,
            'unit' =>'pcs',
        ]);
    }
}
