<?php
namespace App\Http\Controllers\Admin\PostManagement;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function list() {
        // $posts = Post::all();
        $posts = DB::table('posts')->get();
        // echo $posts;
        return view('admin.post-management.post-info.list', ['posts' => $posts]);
    }
    public function add() {
        return view('admin.post-management.post-info.add');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
            ], [
                'title.required' => 'Title field is required.',
                'description.required' => 'Description field is required.',
            ]);
      
        $user = Post::create($validatedData);
            
        return redirect()->route('admin.post-management.post-info.list')->with('success', 'Post created successfully.');
    }

    public function edit(Post $editData) {
        return view('admin.post-management.post-info.add', ['editData' => $editData]);
    }

    public function update($post, Request $request) {
        $post = Post::find($post);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->update();
        
        return redirect()->route('admin.post-management.post-info.list')->with('success', 'Post updated successfully.');
    }

    public function destroy(Request $request) {
        $post = Post::find($request->id);     
        $deleted = $post->delete();
        if($deleted){
            return response()->json(['status'=>'success','message'=>'Successfully Deleted']);
        }else{
            return response()->json(['status'=>'error','message'=>'Sorry something wrong']);
        }
    }
}
