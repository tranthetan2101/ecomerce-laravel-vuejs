<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use  App\Services\frontend\CategoryApi;
class CategoryApiController extends Controller
{
    protected $categoryApi;
    public function __construct(CategoryApi $categoryApi){
        $this->categoryApi = $categoryApi;
    }
    public function index(){
        return $this->categoryApi->getCategoryWithProduct();
    }
}
