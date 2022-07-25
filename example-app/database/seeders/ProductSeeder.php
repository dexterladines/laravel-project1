<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo A3s',
            'price'=>"5999",
            "description"=>"Smartphone with 8gb RAM and much more feature",
            "category"=>'Oppo',
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSflOkxm3ebyGIcrtZl_CwBVI6WjQf2-dYUeHreQ0S-dAhzzYBxuvQdloO4KSVCKfPpetM&usqp=CAU"
            ],
            [
                'name'=>'Oppo Reno8',
            'price'=>"13999",
            "description"=>"Smartphone with 8gb RAM and much more feature",
            "category"=>'Oppo',
            "gallery"=>"https://fdn2.gsmarena.com/vv/bigpic/oppo-reno8.jpg"
            ],
            [
                'name'=>'Oppo A77',
            'price'=>"7999",
            "description"=>"Smartphone with 8gb RAM and much more feature",
            "category"=>'Oppo',
            "gallery"=>"https://fdn2.gsmarena.com/vv/bigpic/oppo-a77-5g.jpg"
            ],
            [
                'name'=>'Vivo Y33',
            'price'=>"10999",
            "description"=>"Smartphone with 8gb RAM and much more feature",
            "category"=>'Vivo',
            "gallery"=>"https://fdn2.gsmarena.com/vv/bigpic/vivo-y53s-4g.jpg"
            ],
            [
                'name'=>'Vivo Y75',
            'price'=>"15999",
            "description"=>"Smartphone with 8gb RAM and much more feature",
            "category"=>'Vivo',
            "gallery"=>"https://fdn2.gsmarena.com/vv/bigpic/vivo-y55-5g.jpg"
            ]
        ]);
    }
}
