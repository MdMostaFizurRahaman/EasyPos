<?php

use Illuminate\Database\Seeder;
use App\Supplier;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
            'name' => "Sepal",
            'proprietor' => "Shahin",
            'address' => "Keranigonj",
            'mobile' =>'0183407645',
            'status' => 'Active'
        ]);

        Supplier::create([
            'name' => "Color Master ",
            'proprietor' => "Arif",
            'address' => "Fakirapul",
            'mobile' =>'01713429330',
            'status' => 'Active'
        ]);

        Supplier::create([
            'name' => "Jahid Printers ",
            'proprietor' => "Jahid",
            'address' => "Badda",
            'mobile' =>'01713429333',
            'status' => 'Active'
        ]);
    }
}
