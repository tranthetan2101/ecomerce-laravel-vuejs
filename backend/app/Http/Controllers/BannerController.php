<?php

namespace App\Http\Controllers;
use App\Http\Requests\BannerRequest;
use App\Services\backend\BannerService;

class BannerController extends Controller
{
    protected $bannerService;
    public function __construct(BannerService $bannerService)
    {
        $this->bannerService = $bannerService;
    }
    public function index(){
        $banner = $this->bannerService->getAll();
        return view('banner.index',['banner'=>$banner]);
    }
    public function create(){
        return view('banner.create');
    }
    public function store(BannerRequest $request){
        $this->bannerService->createBanner($request);
        return redirect()->route('banner.index')->with('success','create banner successfully');
    }
    public function edit($id){
        $banner = $this->bannerService->editBanner($id);
        return view('banner.update',['banner'=>$banner]);
    }
    public function update(BannerRequest $request,$id){
        $this->bannerService->updateBanner($request,$id);
        return redirect()->route('banner.index')->with('success','update banner successfully');
    }
    public function destroy($id){
        $this->bannerService->deleteBanner($id);
        return redirect()->route('banner.index')->with('success','delete banner successfully');
    }
    public function trashed(){
        $banner = $this->bannerService->getBanneronDelete();
        return view('banner.deleted',['banner'=>$banner]);
    }
    public function restore($id){
        $this->bannerService->restored($id);
        return redirect()->route('banner.index')->with('success','restore banner successfully');
    }
    public function deleted($id){
        $this->bannerService->hardDelete($id);
        return redirect()->route('banner.index')->with('success','delete banner successfully');
    }
}
