<?php


namespace App\Services\backend;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryService
{
    //cho product layout
    public function getCategory(){
        return Category::all();
    }

    public function getAll(){
        return Category::paginate(6);
    }
    public function getCategoryOnDelete(){
        return Category::onlyTrashed()->get();
    }
    public function createCategory(CategoryRequest $request){
        return Category::create([
            'name'=>$request->get('name'),
            'Slug'=>$request->get('Slug'),
            'description'=>$request->get('description'),
            'image_url'=>$request->get('image_url')
        ]);
    }
    public function getEdit($id){
        return Category::find($id);
    }
    public function updateCategory(CategoryRequest $request,$id){
        $category = Category::find($id);
        $category->update([
            'name'=>$request->get('name'),
            'Slug'=>$request->get('Slug'),
            'description'=>$request->get('description'),
            'image_url'=>$request->get('image_url')
        ]);
        return $category;
    }
    public function deleteCategory($id){
        return Category::find($id)->delete();
    }
    public function HardDelete($id){
        return Category::withTrashed()->find($id)->forceDelete();
    }
    public function restored($id){
        return Category::withTrashed()->find($id)->restore();
    }
}
