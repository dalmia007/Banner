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
}
