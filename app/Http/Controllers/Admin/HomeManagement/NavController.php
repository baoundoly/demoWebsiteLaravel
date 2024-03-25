<?php

namespace App\Http\Controllers\Admin\HomeManagement;

use App\Http\Controllers\Controller;
use App\Models\Nav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NavController extends Controller
{
    public function list() {
        $navs = Nav::all();
        
        return view('admin.home-management.nav-info.list', ['navs' => $navs]);
    }

    public function add() {
        return view('admin.home-management.nav-info.add');
    }


	public function store(Request $request)
	{
        $validator = Validator::make($request->all(), 
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

		DB::beginTransaction();
		try {
			$menuData = new Nav();
			$menuData->name   = $request->name;

			if($request->sub_menu_4 != ''){
				$parent = $request->sub_menu_4;
			}else if($request->sub_menu_3 != ''){
				$parent = $request->sub_menu_3;
			}else if($request->sub_menu_2 != ''){
				$parent = $request->sub_menu_2;
			}else if($request->sub_menu_1 != ''){
				$parent = $request->sub_menu_1;
			}else if($request->main_menu != ''){
				$parent = $request->main_menu;
			}else{
				$parent = 0;
			}

			$menuData->parent = $parent;
			$menuData->sort   = $request->sort;
            $menuData->save();
			
			DB::commit();
			return redirect()->route('admin.home-management.nav-info.list')->with('success', 'Data created successfully.');
		} catch (\Exception $e) {
			DB::rollback();
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);
		}
	}

	public function edit(Request $request,$id)
	{
        $data['title'] = 'Edit Menu';
		$data['editData'] = Nav::find($id);

		$menu_parent = [];
		$x = $data['editData']['parent'];
		while($x > 0) {
			$menu_parent[] = $x;
			$menu = Nav::find($x);
			$x = $menu['parent'];
		} 
		$data['menu_parent']=array_reverse($menu_parent);
		return view('admin.home-management.nav-info.add',$data);
	}

	public function update(Request $request,$id)
	{
        $validator = Validator::make($request->all(), 
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
		DB::beginTransaction();
		try {
			$menuData = Nav::find($id);
			$menuData->name   = $request->name;

			if($request->sub_menu_4 != ''){
				$parent = $request->sub_menu_4;
			}else if($request->sub_menu_3 != ''){
				$parent = $request->sub_menu_3;
			}else if($request->sub_menu_2 != ''){
				$parent = $request->sub_menu_2;
			}else if($request->sub_menu_1 != ''){
				$parent = $request->sub_menu_1;
			}else if($request->main_menu != ''){
				$parent = $request->main_menu;
			}else{
				$parent = 0;
			}

			$menuData->parent = $parent;
			$menuData->sort   = $request->sort;
			// $menuData->created_by   = auth()->user()->id;
            $menuData->save();

			DB::commit();
			return redirect()->route('admin.home-management.nav-info.list')->with('success', 'Data updated successfully.');
		} catch (\Exception $e) {
			DB::rollback();
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);
		}
	}

	public function getSubMenu(Request $request){
		$parent = $request->parent;
		return $this->getPrivateSubMenu($wheredata=['parent'=>$parent],$selected_sub_menu_id = null);
	}


	private function getPrivateSubMenu($wheredata = ['parent' => null], $selected_sub_menu_id = null)
	{
		$sub_menus = Nav::where('parent', $wheredata['parent'])->orderBy('sort', 'asc')->get();
		$html      = '<option value="">' . __('Select Sub Menu') . '</option>';
		foreach ($sub_menus as $key => $sub_menu) {
			if ($selected_sub_menu_id == $sub_menu->id) {
				$select = 'selected';
			} else {
				$select = '';
			}
			$html .= '<option value="' . $sub_menu['id'] . '" ' . @$select . '>' . $sub_menu['name'] . '</option>';
		}
		return $html;
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
}
