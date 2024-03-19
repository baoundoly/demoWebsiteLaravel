<?php

namespace App\Http\Controllers\Admin\HomeManagement;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function list() {
        // $posts = Post::all();
        $sliders = DB::table('sliders')->get();
        // echo $posts;
        return view('admin.home-management.slider-info.list', ['sliders' => $sliders]);
    }

    public function add() {
        return view('admin.home-management.slider-info.add');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'img' => 'required',
            ], [
                'title.required' => 'Title field is required.',
                'description.required' => 'Description field is required.',
                'img.required' => 'Image field is required.',
            ]);
      
        $user = Slider::create($validatedData);
            
        // return back()->with('success', 'Post created successfully.');
        return redirect()->route('admin.home-management.slider-info.list')->with('success', 'Slider created successfully.');
    }

    public function edit(Slider $editData) {
        return view('admin.home-management.slider-info.add', ['editData' => $editData]);
    }

    public function update($slider, Request $request) {
        $slider = Slider::find($slider);
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->img = $request->input('img');
        $slider->update();

        $sliders = $slider->all();
        // return view('admin.sliderlist', ['sliders' => $sliders]);
        return redirect()->route('admin.home-management.slider-info.list')->with('success', 'Slider updated successfully.');
    }

    public function destroy(Request $request) {
        $slider = Slider::find($request->id);     
        $deleted = $slider->delete();
        if($deleted){
            return response()->json(['status'=>'success','message'=>'Successfully Deleted']);
        }else{
            return response()->json(['status'=>'error','message'=>'Sorry something wrong']);
        }
    }
}
