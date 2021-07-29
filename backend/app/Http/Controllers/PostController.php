<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Services\backend\PostService;
use App\Services\backend\CategoryBlogService;

class PostController extends Controller
{
    protected $postService,$categoryBlogService;
    public function __construct(PostService $postService,CategoryBlogService $categoryBlogService){
        $this->postService = $postService;
        $this->categoryBlogService = $categoryBlogService;
    }
    public function index(){
        $posts = $this->postService->getAll();
        return view('posts.index',['posts'=>$posts]);
    }
    public function create(){
        $blogs = $this->categoryBlogService->getCategory();
        return view('posts.create',['blogs'=>$blogs]);
    }
    public function store(PostRequest $request){
        $this->postService->createPost($request);
        return redirect()->route('post.index')->with('success', 'post craete successfully.');;
    }
    public function edit($id){
        $blogs = $this->categoryBlogService->getCategory();
        $posts = $this->postService->findPostById($id);
        return view('posts.update',compact('blogs','posts'));
    }
    public function update(PostRequest $request,$id){
        $this->postService->updatePost($request,$id);
        return redirect()->route('post.index')->with('success', 'post update successfully.');;
    }
    public function destroy($id){
        $this->postService->deletePost($id);
        return redirect()->route('post.index')->with('success', 'post delete successfully.');
    }
    public function trashed(){
        $posts = $this->postService->getPostonDelete();
        return view('posts.deleted',['posts'=>$posts]);
    }
    public function deleted($id){
        $this->postService->hardDelete($id);
        return redirect()->route('post.index')->with('success', 'post delete successfully.');
    }
    public function restored($id){
        $this->postService->restored($id);
        return redirect()->route('post.index')->with('success', 'post restore successfully.');
    }
}
