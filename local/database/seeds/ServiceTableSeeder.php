<?php

use Illuminate\Database\Seeder;
use App\Service;
use App\Supplier;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = Supplier::where('id', 1)->first();

        $service = new Service;
        $service->name = "T-shirt Embroidery";
        $service->name = "T-shirt Embroidery";
        $service->name = "T-shirt Embroidery";  
    }
}
