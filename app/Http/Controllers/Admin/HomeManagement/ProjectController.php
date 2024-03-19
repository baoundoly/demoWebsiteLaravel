<?php

namespace App\Http\Controllers\Admin\HomeManagement;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function list() {
        $projects = DB::table('projects')->get();
        
        return view('admin.home-management.project-info.list', ['projects' => $projects]);
    }

    public function add() {
        return view('admin.home-management.project-info.add');
    }
    
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
                'cname' => 'required',
                'type' => 'required',
                'location' => 'required',
                'status' => 'required',
            ], [
                'cname.required' => 'Client Name field is required.',
                'type.required' => 'Project Type field is required.',
                'location.required' => 'Project Location field is required.',
            ]);
        
        // dd($validatedData['list']);

        $project = new Project();
        $project->cname = $request->cname;
        $project->type = $request->type;
        $project->location = $request->location;
        $project->status = $request->status;
        $project->save();
        
        // return back()->with('success', 'Project created successfully.');
        return redirect()->route('admin.home-management.project-info.list')->with('success', 'Project created successfully.');
    }

    public function edit(Project $editData) {
        return view('admin.home-management.project-info.add', ['editData' => $editData]);
    }

    public function update($project, Request $request) {
        $project = Project::find($project);
        $project->cname = $request->cname;
        $project->type = $request->type;
        $project->location = $request->location;
        $project->status = $request->status;
        $project->update();

        $projects = $project->all();
        // return view('admin.productlist', ['products' => $products]);
        return redirect()->route('admin.home-management.project-info.list')->with('success', 'Project updated successfully.');
    }

    public function destroy(Request $request) {
        $project = Project::find($request->id);     
        $deleted = $project->delete();
        if($deleted){
            return response()->json(['status'=>'success','message'=>'Successfully Deleted']);
        }else{
            return response()->json(['status'=>'error','message'=>'Sorry something wrong']);
        }
    }
}
