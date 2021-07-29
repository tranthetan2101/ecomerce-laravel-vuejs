<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Image_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            ['product_id' => 1,'image_name'=>'images/tantran.jpg','created_at'=>null,'updated_at'=>null],
            ['product_id' => 2,'image_name'=>'images/tantran.jpg','created_at'=>null,'updated_at'=>null],
            ['product_id' => 3,'image_name'=>'images/tantran.jpg','created_at'=>null,'updated_at'=>null],
            ['product_id' => 4,'image_name'=>'images/tantran.jpg','created_at'=>null,'updated_at'=>null],
            ['product_id' => 5,'image_name'=>'images/tantran.jpg','created_at'=>null,'updated_at'=>null],
            ['product_id' => 6,'image_name'=>'images/tantran.jpg','created_at'=>null,'updated_at'=>null],
            ['product_id' => 7,'image_name'=>'images/tantran.jpg','created_at'=>null,'updated_at'=>null],
            ['product_id' => 8,'image_name'=>'images/tantran.jpg','created_at'=>null,'updated_at'=>null],
            ['product_id' => 9,'image_name'=>'images/tantran.jpg','created_at'=>null,'updated_at'=>null],
            ['product_id' => 10,'image_name'=>'images/tantran.jpg','created_at'=>null,'updated_at'=>null],
        ]);
    }
}
