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
        //multiple data
        DB::table('products')->insert([
          [  'name'=>'Apple Triiple Camera',
            'price'=>'100000',
            'category'=>('Mobile'),
            'description'=>"A smartphone wth 6gb ram and much more feature",
            'gallery'=>"admin_assets/images/apple.jpg"
        ],
        [  'name'=>'Laptop',
        'price'=>'32000',
        'category'=>('Laptop'),
        'description'=>"A smartlaptop with 360 foldable",
        'gallery'=>"admin_assets/images/bg-title-01.jpg"
    ],
    [  'name'=>'Samsung',
        'price'=>'22000',
        'category'=>('Mobile'),
        'description'=>"A smartphone wth 8gb ram and much more feature",
        'gallery'=>"admin_assets/images/samsung.jpg"
],
          [  'name'=>'Huddies',
        'price'=>'500',
        'category'=>('clothe'),
        'description'=>"it is in good febric",
        'gallery'=>"admin_assets/images/hudies.jpg"
          ]
       
          

        ]);

    }
}
