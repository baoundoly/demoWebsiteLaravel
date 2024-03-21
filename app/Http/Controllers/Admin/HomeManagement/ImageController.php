<?php

namespace App\Http\Controllers\Admin\HomeManagement;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function list() {
        $images = Image::all();
        // $images = new Image();
        // echo $posts;
        return view('admin.home-management.image-info.list', ['images' => $images]);
    }

    public function add() {
        return view('admin.home-management.image-info.add');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
                'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'img.required' => 'Image field is required.',
            ]);
            
        $image = new Image();
        $file = $request->file('img');
        if($file){
            $file_name = $file->getClientOriginalName();
            $upload_path = 'public/common/images/';
            $file->move($upload_path, $file_name);
            $image->img = $file_name;
        }
        $image->save();
            
        // return back()->with('success', 'Post created successfully.');
        return redirect()->route('admin.home-management.image-info.list')->with('success', 'image created successfully.');
    }

    public function edit(image $editData) {
        return view('admin.home-management.image-info.add', ['editData' => $editData]);
    }

    public function update($image, Request $request) {
        $image = Image::find($image);
        // $image->img = $request->input('img');
        $file = $request->file('img');
        if($file){
            $file_name = $file->getClientOriginalName();
            $upload_path = 'public/common/images/';
            $file->move($upload_path, $file_name);
            $image->img = $file_name;
        }
        $image->update();

        $images = $image->all();
        // return view('admin.imagelist', ['images' => $images]);
        return redirect()->route('admin.home-management.image-info.list')->with('success', 'image updated successfully.');
    }

    public function destroy(Request $request) {
        $image = Image::find($request->id);     
        $deleted = $image->delete();
        if($deleted){
            return response()->json(['status'=>'success','message'=>'Successfully Deleted']);
        }else{
            return response()->json(['status'=>'error','message'=>'Sorry something wrong']);
        }
    }
}
