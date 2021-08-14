<?php
namespace App\Services\frontend;
use App\Models\Banner;

class BannerApi
{
    public function getAll(){
        return Banner::all();
    }
}