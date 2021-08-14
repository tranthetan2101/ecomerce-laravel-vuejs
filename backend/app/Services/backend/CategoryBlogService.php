<?php


namespace App\Services\backend;
use App\Http\Requests\CategoryBlogRequest;
use App\Models\Category_Blog;

class CategoryBlogService
{
    //cho post layout
    public function getCategory(){
        return Category_Blog::all();
    }

    public function getAll(){
        return Category_Blog::paginate(6);
    }
    public function getBlogOnDelete(){
        return Category_Blog::onlyTrashed()->get();
    }
    public function createBlog(CategoryBlogRequest $request){
        return Category_Blog::create($request->all());
    }
    public function getEdit($id){
        return Category_Blog::find($id);
    }
    public function updateBlog(CategoryBlogRequest $request,$id){
        $category = Category_Blog::find($id);
        $category->update($request->all());
        return $category;
    }
    public function deleteBlog($id){
        return Category_Blog::find($id)->delete();
    }
    public function HardDelete($id){
        return Category_Blog::withTrashed()->find($id)->forceDelete();
    }
    public function restored($id){
        return Category_Blog::withTrashed()->find($id)->restore();
    }
}
