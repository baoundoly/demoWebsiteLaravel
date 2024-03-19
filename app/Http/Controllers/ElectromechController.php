<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectromechController extends Controller
{
    public function index ()
    {
         return view('.admin.electromech.home');
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
}
