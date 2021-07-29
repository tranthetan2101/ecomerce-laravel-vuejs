<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryBlogRequest;
use App\Services\backend\CategoryBlogService;

class CategoryBlogController extends Controller
{
    protected $categoryBlogService;
    public function __construct(CategoryBlogService $categoryBlogService){
        $this->categoryBlogService = $categoryBlogService;
    }
    public function index(){
        $blog = $this->categoryBlogService->getAll();
        return view('blogs.index',['blog'=>$blog]);
    }
    public function create(){
        return view('blogs.create');
    }
    public function store(CategoryBlogRequest $request){
        $this->categoryBlogService->createBlog($request);
        return redirect()->route('blogs.index')->with('success','blog create successfully');
    }
    public function edit($id){
        $blog = $this->categoryBlogService->getEdit($id);
        return view('blogs.update',['blog'=>$blog]);
    }
    public function update(CategoryBlogRequest $request,$id){
        $this->categoryBlogService->updateBlog($request,$id);
        return redirect()->route('blogs.index')->with('success','blog update successfully');
    }
    public function trashed(){
        $blog = $this->categoryBlogService->getBlogOnDelete();
        return view('blogs.deleted',['blog'=>$blog]);
    }
    public function destroy($id)
    {
        $this->categoryBlogService->deleteBlog($id);
        return redirect()->route('blogs.index')->with('success','blog delete successfully');
    }
    public function deleted($id){
        $this->categoryBlogService->HardDelete($id);
        return redirect()->route('blogs.trashed')->with('success','blog delete successfully');
    }
    public function restore($id){
        $this->categoryBlogService->restored($id);
        return redirect()->route('blogs.index')->with('success','category restore successfully');
    }
}
