<?php
namespace App\Services\frontend;
use App\Models\Product;

class ProductsApi
{
    public function getAll(){
        return Product::with('images','category')->get();
    }
    public function getProductById($id){
        return Product::where('id',$id)->with('images','category')->get();
    }
}