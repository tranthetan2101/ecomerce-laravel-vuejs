<?php


namespace App\Services\backend;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Models\Category_Blog;

class BannerService{
    public function getAll(){
        return Banner::paginate(10);
    }
    public function createBanner(BannerRequest $request){
        $data = [
            'name' => $request->get('name'),
            'banner_url'=>$request->get('banner_url')
        ];
        $banner = Banner::create($data);
        return $banner;
    }
    public function editBanner($id){
        return Banner::find($id);
    }
    public function updateBanner(BannerRequest $request,$id){
        $data = [
            'name' => $request->get('name'),
            'banner_url'=>$request->get('banner_url')
        ];
        $banner = Banner::where('id',$id);
        $banner->update($data);
        return $banner;
    }
    public function getBanneronDelete(){
        return Banner::onlyTrashed()->get();
    }
    public function deleteBanner($id){
        return Banner::where('id',$id)->delete();
    }
    public function hardDelete($id){
        return Banner::withTrashed()->find($id)->forceDelete();
    }
    public function restored($id){
        return Banner::withTrashed()->find($id)->restore();
    }
}