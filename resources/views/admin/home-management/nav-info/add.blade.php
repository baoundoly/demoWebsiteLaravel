@extends('admin.layouts.app')   
@section('content')
<?php 

if (!function_exists('getPrivateSubNav')) {
	function getPrivateSubNav($wheredata = ['parent' => null], $selected_sub_Nav_id = null)
	{
		$sub_Nav = App\Models\Nav::where('parent', $wheredata['parent'])->orderBy('sort', 'asc')->get();
		$html      = '<option value="">' . __('Select Sub Nav') . '</option>';
		foreach ($sub_Nav as $key => $sub_Nav) {
			if ($selected_sub_Nav_id == $sub_Nav->id) {
				$select = 'selected';
			} else {
				$select = '';
			}
			$html .= '<option value="' . $sub_Nav['id'] . '" ' . @$select . '>' . $sub_Nav['name']  . '</option>';
		}
		return $html;
	}
}
?>
<section class="content">  
	<div class="container-fluid">  
		<div class="row">  
			<div class="col-lg-12">  
				<div class="card">  
					<div class="card-header text-right">  
						<h4 class="card-title">Nav</h4>
						<a href="{{route('admin.home-management.nav-info.list')}}" class="btn btn-sm btn-info"><i class="fas fa-list"></i> Nav List</a>  
					</div>  
					<div class="card-body">  
						<form id="submitForm" method="POST" action="{{(@$editData)?(route('admin.home-management.nav-info.update',$editData)):(route('admin.home-management.nav-info.store')) }}" enctype="multipart/form-data">  
							@csrf  
							<div class="row">  
								<div class="col-sm-4">  
									<div class="form-group">  
										<label class="control-label">Nav Name </label>  
										<input type="text" name="name" value="{{@$editData->name}}" class="form-control form-control-sm name" placeholder="Enter navber Name" >                 
									</div>  
								</div> 
								<div class="col-sm-4">  
									<div class="form-group">   
										<label class="control-label">Parent</label>  
										<select name="main_nav" class="form-control form-control-sm select2 main_nav">  
											<?php echo getPrivateSubNav($wheredata=['parent'=>0],$selected_sub_Nav_id = @$menu_parent[0]);?>   
										</select>  
									</div>  
								</div>  
								<div class="col-sm-4">  
									<div class="form-group">  
										<label class="control-label">Sort Order</label>  
										<input type="number"  value="{{@$editData->sort}}" name="sort" class="form-control form-control-sm sort" placeholder="Enter Sort Number">  
									</div>  
								</div>   
							<div class="row">	   
								<div class="col-sm-6">  
									<div class="form-group">  
										<button type="submit" class="btn btn-sm btn-success">{{(@$editData) ? __('Update') : __('Save')}}</button>  
									</div>  
								</div>  
							</div>  
						</form>  
					</div>  
				</div>  
			</div>  
		</div>  
	</div>	   
</section>  

@endsection  
