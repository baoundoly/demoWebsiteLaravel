<?php

namespace App\Http\Controllers\Admin\HomeManagement;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function list() {
        // $posts = Post::all();
        $abouts = DB::table('abouts')->get();
        // echo $posts;
        return view('admin.home-management.about-info.list', ['abouts' => $abouts]);
    }

    public function add() {
        return view('admin.home-management.about-info.add');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
                'description' => 'required',
            ], [
                'description.required' => 'Description field is required.',
            ]);
      
        $user = About::create($validatedData);
            
        // return back()->with('success', 'About created successfully.');
        return redirect()->route('admin.home-management.about-info.list')->with('success', 'About created successfully.');
    }

    public function edit(About $editData) {
        return view('admin.home-management.about-info.add', ['editData' => $editData]);
    }

    public function update($about, Request $request) {
        $about = About::find($about);
        $about->description = $request->input('description');
        $about->update();

        $abouts = $about->all();
        // return view('admin.aboutlist', ['abouts' => $abouts]);
        return redirect()->route('admin.home-management.about-info.list')->with('success', 'About updated successfully.');
    }

    public function destroy(Request $request) {
        $about = About::find($request->id);     
        $deleted = $about->delete();
        if($deleted){
            return response()->json(['status'=>'success','message'=>'Successfully Deleted']);
        }else{
            return response()->json(['status'=>'error','message'=>'Sorry something wrong']);
        }
    }
}
