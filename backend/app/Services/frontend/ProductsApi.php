<?php
namespace App\Services\frontend;
use App\Models\Product;

class ProductsApi
{
    public function getall(){
        return Product::with('images','category')->get();
    }
}