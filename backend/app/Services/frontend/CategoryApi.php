<?php
namespace App\Services\frontend;
use App\Models\Category;

class CategoryApi
{
    public function getCategoryWithProduct(){
        return Category::with('product')->get();
    }
}