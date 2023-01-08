<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index(){
        $banners =  Banner::get();
        return view('banners.list',['banners'=>$banners]);
    }

    public function create(){
        return view('banners.new');
    }

    public function store(Request $request){

        $banner = new Banner;
        $banner->title = $request->title;
        $banner->url = $request->url;
        $banner->image_mobile = $request->image_mobile;
        $banner->image_desktop = $request->image_desktop;
        $banner->save();
        return redirect('/');
    }
}
