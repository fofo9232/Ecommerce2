<?php

namespace Database\Seeders;

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
        DB::table ('products')->insert(
      
        [
            'name'=>'ring',
            'price'=>'80$',
            'description'=> 'Silver RING',
            'category'=> 'accssori',
            'gallery' => 'https://image.shutterstock.com/z/stock-photo-macro-picture-of-white-gold-engagement-ring-with-big-oval-sapphire-with-diamonds-placed-on-blue-and-1694623000.jpg'

        ]
    );
    }
}
