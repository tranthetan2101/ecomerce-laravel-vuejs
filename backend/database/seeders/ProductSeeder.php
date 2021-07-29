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
        DB::table('products')->insert([
            ['name' => 'laptop dell 1','name_vi'=>'laptop gaming','price'=>123,'SKU'=>'sp1','Slug'=>'lap-top-1','description1'=>'day la laptop dell gaming','description2'=>'day la laptop dell gaming','description3'=>'day la laptop dell gaming','category_id'=>1,'created_at'=>null,'updated_at'=>null,'deleted_at'=>null],
            ['name' => 'laptop dell 2','name_vi'=>'laptop gaming','price'=>123,'SKU'=>'sp2','Slug'=>'lap-top-2','description1'=>'day la laptop dell gaming','description2'=>'day la laptop dell gaming','description3'=>'day la laptop dell gaming','category_id'=>2,'created_at'=>null,'updated_at'=>null,'deleted_at'=>null],
            ['name' => 'laptop dell 3','name_vi'=>'laptop gaming','price'=>123,'SKU'=>'sp3','Slug'=>'lap-top-3','description1'=>'day la laptop dell gaming','description2'=>'day la laptop dell gaming','description3'=>'day la laptop dell gaming','category_id'=>3,'created_at'=>null,'updated_at'=>null,'deleted_at'=>null],
            ['name' => 'laptop dell 4','name_vi'=>'laptop gaming','price'=>123,'SKU'=>'sp4','Slug'=>'lap-top-4','description1'=>'day la laptop dell gaming','description2'=>'day la laptop dell gaming','description3'=>'day la laptop dell gaming','category_id'=>4,'created_at'=>null,'updated_at'=>null,'deleted_at'=>null],
            ['name' => 'laptop dell 5','name_vi'=>'laptop gaming','price'=>123,'SKU'=>'sp5','Slug'=>'lap-top-5','description1'=>'day la laptop dell gaming','description2'=>'day la laptop dell gaming','description3'=>'day la laptop dell gaming','category_id'=>1,'created_at'=>null,'updated_at'=>null,'deleted_at'=>null],
            ['name' => 'laptop dell 6','name_vi'=>'laptop gaming','price'=>123,'SKU'=>'sp6','Slug'=>'lap-top-6','description1'=>'day la laptop dell gaming','description2'=>'day la laptop dell gaming','description3'=>'day la laptop dell gaming','category_id'=>2,'created_at'=>null,'updated_at'=>null,'deleted_at'=>null],
            ['name' => 'laptop dell 7','name_vi'=>'laptop gaming','price'=>123,'SKU'=>'sp7','Slug'=>'lap-top-7','description1'=>'day la laptop dell gaming','description2'=>'day la laptop dell gaming','description3'=>'day la laptop dell gaming','category_id'=>3,'created_at'=>null,'updated_at'=>null,'deleted_at'=>null],
            ['name' => 'laptop dell 8','name_vi'=>'laptop gaming','price'=>123,'SKU'=>'sp8','Slug'=>'lap-top-8','description1'=>'day la laptop dell gaming','description2'=>'day la laptop dell gaming','description3'=>'day la laptop dell gaming','category_id'=>4,'created_at'=>null,'updated_at'=>null,'deleted_at'=>null],
            ['name' => 'laptop dell 9','name_vi'=>'laptop gaming','price'=>123,'SKU'=>'sp9','Slug'=>'lap-top-9','description1'=>'day la laptop dell gaming','description2'=>'day la laptop dell gaming','description3'=>'day la laptop dell gaming','category_id'=>1,'created_at'=>null,'updated_at'=>null,'deleted_at'=>null],
            ['name' => 'laptop dell 10','name_vi'=>'laptop gaming','price'=>123,'SKU'=>'sp10','Slug'=>'lap-top-10','description1'=>'day la laptop dell gaming','description2'=>'day la laptop dell gaming','description3'=>'day la laptop dell gaming','category_id'=>2,'created_at'=>null,'updated_at'=>null,'deleted_at'=>null],
        ]);
    }
}
