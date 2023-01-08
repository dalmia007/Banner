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

        //Data Validation
        $request->validate([
            'title'=>'required|unique:banners',
            'url'=>'required|url',
            'image_mobile'=>'required|url',
            'image_desktop'=>'required|url',
        ]);

        $banner = new Banner;
        $banner->title = $request->title;
        $banner->url = $request->url;
        $banner->image_mobile = $request->image_mobile;
        $banner->image_desktop = $request->image_desktop;
        $banner->save();
        return redirect('/');
    }

    public function edit($id){
        $banner = Banner::where('id',$id)->first();
        return view('banners.edit',['banner'=> $banner]);
    }

    public function update(Request $request,$id){
        $banner = Banner::where('id',$id)->first();
         //Data Validation
         $request->validate([
            'title'=>'required',
            'url'=>'required|url',
            'image_mobile'=>'required|url',
            'image_desktop'=>'required|url',
        ]);

        $banner->title = $request->title;
        $banner->url = $request->url;
        $banner->image_mobile = $request->image_mobile;
        $banner->image_desktop = $request->image_desktop;
        $banner->save();
        return redirect('/');
    }

    public function delete($id){
        $banner = Banner::where('id',$id)->first();
        $banner->delete();
        return redirect('/');
    }
}
