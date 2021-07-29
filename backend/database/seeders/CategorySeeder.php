<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'danh muc laptop 1','Slug'=>'danh-muc-1','description'=>'day la danh muc laptop','created_at'=>null,'updated_at'=>null,'deleted_at'=>null,'image_url'=>'images/tantran.jpg'],
            ['name' => 'danh muc laptop 2','Slug'=>'danh-muc-2','description'=>'day la danh muc laptop','created_at'=>null,'updated_at'=>null,'deleted_at'=>null,'image_url'=>'images/tantran.jpg'],
            ['name' => 'danh muc laptop 3','Slug'=>'danh-muc-3','description'=>'day la danh muc laptop','created_at'=>null,'updated_at'=>null,'deleted_at'=>null,'image_url'=>'images/tantran.jpg'],
            ['name' => 'danh muc laptop 4','Slug'=>'danh-muc-4','description'=>'day la danh muc laptop','created_at'=>null,'updated_at'=>null,'deleted_at'=>null,'image_url'=>'images/tantran.jpg'],
        ]);
    }
}
