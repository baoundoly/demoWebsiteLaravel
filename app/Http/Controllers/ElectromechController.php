<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Image;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Stock;
use Illuminate\Http\Request;

class ElectromechController extends Controller
{
    public function index ()
    {
        $sliders = Slider::all();
        $abouts = About::all();            
        $products = Product::all();            
        $stocks = Stock::all();            
        $services = Service::all();
        $images = Image::all();
        return view('.admin.electromech.home', [
            'sliders' => $sliders,
            'abouts' => $abouts,
            'products' => $products,
            'stocks' => $stocks,
            'services' => $services,
            'images' => $images,
        ]);
    }

    public function contacts (){
        return view('admin.electromech.contact');
    }
    public function ongoings (){
        return view ('admin.electromech.ongoingproject');
    }
    public function BOD (){
        return view ('admin.electromech.bod');
    }
    public function videos (){
        return view ('admin.electromech.video');
    }
    public function completeproject (){
        return view ('admin.electromech.completedproject');
    }
    public function projectpage2 (){
        return view ('admin.electromech.compage2');
    }
    public function projectpage3 (){
        return view ('admin.electromech.compage3');
    }
    public function new (){
        return view ('admin.electromech.news');
    }
    public function certificate(){
        return view ('admin.electromech.ceritfication');
    }
    public function glances(){
        return view ('admin.electromech.glance');
    }
    public function maintains(){
        return view ('admin.electromech.maintain');
    }
    public function manufact(){
        return view ('admin.electromech.manufacturing');
    }
    public function suppply(){
        return view ('admin.electromech.supply');
    }
    public function test(){
        return view ('admin.electromech.testing');
    }
    public function transform(){
        return view ('admin.electromech.transformer');
    }
    public function world(){
        return view ('admin.electromech.world-super');
    }
    public function economic(){
        return view ('admin.electromech.economic-series');
    }
    public function miniatures(){
        return view ('admin.electromech.miniature');
    }
}
