<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class CyberCartWebsiteController extends Controller
{
    public function index(){
        $slider = Slider::where('status',1)->orderBy('serial', 'asc')->get();
        return view('frontend.home.index', compact('slider'));
    }
}
