<?php

namespace App\Http\Controllers\Admin\HomeManagement;

use App\Http\Controllers\Controller;
use App\Models\Nav;
use Dotenv\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class NavController extends Controller
{
    public function list() {
        $navs = Nav::all();
        
        return view('admin.home-management.nav-info.list', ['navs' => $navs]);
    }

    public function add() {
        return view('admin.home-management.nav-info.add');
    }


	public function store(Request $request): RedirectResponse
	{
        $validator = FacadesValidator::make($request->all(), 
            [
			'name' => ['required'],
			'sort' => ['required']
            ]
        );

        if ($validator->fails()) {
            if($request->ajax()){
                return response()->json(
                    array(
                        'status' => 'validation',
                        'errors' => $validator->getMessageBag()->toArray()

                    )
                );
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $NavData = new Nav();
        $NavData->name   = $request->name;

        if($request->main_nav != ''){
            $parent = $request->main_nav;
        }else{
            $parent = 0;
        }

        $NavData->parent = $parent;
        $NavData->sort   = $request->sort;
        $NavData->save();
            
		return redirect()->route('admin.home-management.nav-info.list')->with('success', 'Data created successfully.');
	}

	public function edit(Nav $editData) {
        return view('admin.home-management.nav-info.add', ['editData' => $editData]);
    }

	public function update(Request $request,$id)
	{
        $validator = FacadesValidator::make($request->all(), 
            [
			'name' => ['required'],
			'sort' => ['required'],
            ]
        );

        if ($validator->fails()) {
            if($request->ajax()){
                return response()->json(
                    array(
                        'status' => 'validation',
                        'errors' => $validator->getMessageBag()->toArray()

                    )
                );
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }  
		DB::beginTransaction();
		try {
			$NavData = Nav::find($id);
			$NavData->name   = $request->name;

			if($request->main_nav != ''){
				$parent = $request->main_nav;
			}else{
				$parent = 0;
			}

			$NavData->parent = $parent;
			$NavData->sort   = $request->sort;
			$NavData->created_by   = auth()->user()->id;
            $NavData->save();

			DB::commit();
			return response()->json(['status'=>'success','message'=>'Data Successfully Updated','reload_url'=>route('admin.home-management.nav-info.list')]);
		} catch (\Exception $e) {
			DB::rollback();
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);
		}
	}

    public function destroy(Request $request) {
        $nav = Nav::find($request->id);     
        $deleted = $nav->delete();
        if($deleted){
            return response()->json(['status'=>'success','message'=>'Successfully Deleted']);
        }else{
            return response()->json(['status'=>'error','message'=>'Sorry something wrong']);
        }
    }

	public function getSubNav(Request $request){
		$parent = $request->parent;
		return $this->getPrivateSubNav($wheredata=['parent'=>$parent],$selected_sub_Nav_id = null);
	}


	private function getPrivateSubNav($wheredata = ['parent' => null], $selected_sub_Nav_id = null)
	{
		$sub_Navs = Nav::where('parent', $wheredata['parent'])->orderBy('sort', 'asc')->get();
		$html      = '<option value="">' . __('Select Sub Nav') . '</option>';
		foreach ($sub_Navs as $key => $sub_Nav) {
			if ($selected_sub_Nav_id == $sub_Nav->id) {
				$select = 'selected';
			} else {
				$select = '';
			}
			$html .= '<option value="' . $sub_Nav['id'] . '" ' . @$select . '>' . $sub_Nav['name'] . '</option>';
		}
		return $html;
	}
}
