<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Services\frontend\ProductsApi;
use App\Http\Requests\ProductRequest;

class ProductApiController extends Controller
{
    protected $productsApi;

    public function __construct(ProductsApi $productsApi){
        $this->productsApi =$productsApi;
    }
    public function index(){
        $product = $this->productsApi->getAll();
        return response()->json($product, 200);;
    }
}
