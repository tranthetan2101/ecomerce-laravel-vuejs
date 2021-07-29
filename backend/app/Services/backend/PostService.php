<?php
namespace App\Services\backend;
use App\Http\Requests\PostRequest;
use App\Models\Posts;
use Auth;
class PostService
{
    public function getAll(){
        return Posts::paginate(10);
    }
    public function findPostById($id){
        return Posts::find($id);
    }
    public function createPost(PostRequest $request){
        if (Auth::check()){
            $userId = Auth::user()->id;
        }
        $data = [
            'name'=>$request->get('name'),
            'content'=>$request->get('content'),
            'image_url'=> $request->get('image_url'),
            'user_id'=>$userId,
            'category_id'=>$request->get('category_id'),
        ];
        return Posts::create($data);
    }
    public function updatePost(PostRequest $request,$id){
        if (Auth::check()){
            $userId = Auth::user()->id;
        }
        $data = [
            'name'=>$request->get('name'),
            'content'=>$request->get('content'),
            'image_url'=> $request->get('image_url'),
            'user_id'=>$userId,
            'category_id'=>$request->get('category_id'),
        ];
        $post =Posts::find($id);
        $post->update($data);
        return $post;
    }
    public function deletePost($id){
        $post = Posts::find($id);
        $post->delete();
        return $post;
    }
    public function hardDelete($id){
        $post = Posts::withTrashed();
        $post->find($id)->forceDelete();
        return $post;
    }
    public function restored($id){
        $post = Posts::withTrashed();
        $post->find($id)->restore();
        return $post;
    }
    public function getPostonDelete(){
        return Posts::onlyTrashed()->get();
    }
}