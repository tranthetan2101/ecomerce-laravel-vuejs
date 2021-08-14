<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Services\frontend\BannerApi;
class BannerApiController extends Controller
{
    protected $bannerApi;

    public function __construct(BannerApi $bannerApi){
        $this->bannerApi =$bannerApi;
    }
    public function index(){
        $banner = $this->bannerApi->getAll();
        return response()->json($banner, 200);;
    }
}
