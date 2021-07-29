<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'tantran','image'=>'images/tantran.jpg','email'=>'tantran21012000@gmail.com','password'=>Bcrypt('tantran2412'),'level'=>1,'remember_token'=>'12323324','created_at'=>null,'updated_at'=>null,'deleted_at'=>null],
        ]);
    }
}
