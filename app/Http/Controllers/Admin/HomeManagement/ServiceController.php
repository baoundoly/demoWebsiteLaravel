<?php

namespace App\Http\Controllers\Admin\HomeManagement;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function list() {
        $services = DB::table('services')->get();
        
        return view('admin.home-management.service-info.list', ['services' => $services]);
    }

    public function add() {
        return view('admin.home-management.service-info.add');
    }
    
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
                'icon' => 'required',
                'heading' => 'required',
                'description' => 'required',
            ], [
                'icon.required' => 'Icon field is required.',
                'heading.required' => 'Heading field is required.',
                'description.required' => 'Description field is required.',
            ]);
        
        // dd($validatedData['list']);

        $service = new Service();
        $service->icon = $request->icon;
        $service->heading = $request->heading;
        $service->description = $request->description;
        $service->save();
        
        // return back()->with('success', 'Project created successfully.');
        return redirect()->route('admin.home-management.service-info.list')->with('success', 'Service created successfully.');
    }

    public function edit(Service $editData) {
        return view('admin.home-management.service-info.add', ['editData' => $editData]);
    }

    public function update($service, Request $request) {
        $service = Service::find($service);
        $service->icon = $request->icon;
        $service->heading = $request->heading;
        $service->description = $request->description;
        $service->update();

        $services = $service->all();
        // return view('admin.productlist', ['products' => $products]);
        return redirect()->route('admin.home-management.service-info.list')->with('success', 'Service updated successfully.');
    }

    public function destroy(Request $request) {
        $service = Service::find($request->id);     
        $deleted = $service->delete();
        if($deleted){
            return response()->json(['status'=>'success','message'=>'Successfully Deleted']);
        }else{
            return response()->json(['status'=>'error','message'=>'Sorry something wrong']);
        }
    }
}
