<?php

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
        DB::table('products')->insert([

            [
                'name' => 'Micromax in note 1 (128GB)',
                'price' => '12499',
                'description' => 'Smart Phone Micromax best Price in India',
                'category' => 'Mobile',
                'gallery' => 'https://static.digit.in/default/a39c4bf3729fe9d377bedfbd5d1993f8c4ddc577.png'
    
            ],
            [
                'name' => 'Nokia',
                'price' => '15000',
                'description' => 'Take your smartphone experience',
                'category' => 'Mobile',
                'gallery' => 'hhttps://i.gadgets360cdn.com/products/large/1542200657_635_nokia_106_2018.jpg'
     
            ],
            [
                'name' => 'Whirlpool ',
                'price' => '25000',
                'description' => 'Whirlpool 265 L 3 Star Inverter Frost-Free Double Door Refrigerator (INTELLIFRESH INV CNV 278 3S, German Steel, Convertible)',
                'category' => 'HomeAppliance',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/71deNmhURuL._SL1500_.jpg'
     
            ],
            [
                'name' => 'Sony Bravia',
                'price' => '30000',
                'description' => 'Sony Bravia 108 cm (43 inches) Full HD Smart LED TV KDL-43W6603 (Black) (2020 Model)',
                'category' => 'TV',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/81lpllAGcBL._SL1500_.jpg'
     
            ]


        ]);
    }
}
