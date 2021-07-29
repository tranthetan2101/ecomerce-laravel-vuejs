<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\backend\ProductService;
use App\Services\backend\CategoryService;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    protected $categoryService;
    protected $productService;
    public function __construct(ProductService $productService,CategoryService $categoryService){
        $this->productService =$productService;
        $this->categoryService =$categoryService;
    }
    public function index()
    {
        $products = $this->productService->getAll();
        return view('products.index',compact('products'));
    }
    public function create()
    {
        $categories = $this->categoryService->getCategory();
        return view('products.create',compact('categories'));
    }
    public function trashed(){
        $products = $this->productService->getProductOnDelete();
        return view('products.deleted',['products'=>$products]);
    }
    public function edit($id)
    {
        $product = $this->productService->findProductById($id);
        $categories = $this->categoryService->getCategory();
        return view('products.update',compact('product','categories'));
    }
    public function store(ProductRequest $request)
    {
        $this->productService->addProduct($request);
        return redirect()->route('product.index')->with('success', 'product created successfully.');
    }
    public function update(ProductRequest $request,$id)
    {
        $this->productService->updateProduct($request,$id);
        return redirect()->route('product.index')->with('success', 'product update successfully.');
    }
    public function destroy($id)
    {
        $this->productService->delete($id);
        return redirect()->route('product.index')->with('success','product delete successfully');
    }
    public function deleted($id){
        $this->productService->HardDelete($id);
        return redirect()->route('product.trashed')->with('success','product delete successfully');
    }
    public function restore($id){
        $this->productService->restored($id);
        return redirect()->route('product.index')->with('success','product restore successfully');
    }
}
