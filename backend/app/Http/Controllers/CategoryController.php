<?php

namespace App\Http\Controllers;
use App\Services\backend\CategoryService;
use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryService $categoryService){
        $this->categoryService = $categoryService;
    }
    public function index(){
        $category = $this->categoryService->getAll();
        return view('category.index',['category'=>$category]);
    }
    public function create(){
        return view('category.create');
    }
    public function store(CategoryRequest $request){
        $category = $this->categoryService->createCategory($request);
        return redirect()->route('category.index')->with('success','category create successfully');
    }
    public function edit($id){
        $category = $this->categoryService->getEdit($id);
        return view('category.update',['category'=>$category]);
    }
    public function update(CategoryRequest $request,$id){
        $category = $this->categoryService->updateCategory($request,$id);
        return redirect()->route('category.index')->with('success','category update successfully');
    }
    public function trashed(){
        $category = $this->categoryService->getCategoryOnDelete();
        return view('category.deleted',['category'=>$category]);
    }
    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);
        return redirect()->route('category.index')->with('success','category delete successfully');
    }
    public function deleted($id){
        $this->categoryService->HardDelete($id);
        return redirect()->route('category.trashed')->with('success','category delete successfully');
    }
    public function restore($id){
        $this->categoryService->restored($id);
        return redirect()->route('category.index')->with('success','category restore successfully');
    }
}
