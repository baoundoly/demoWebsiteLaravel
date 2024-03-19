@extends('admin.layouts.app')
@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header text-right">
						<h4 class="card-title">{{@$title}}</h4>
						@if(sorpermission('admin.content-management.manage-page.add'))
						<a href="{{route('admin.content-management.manage-page.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Page</a>
						@endif
					</div>
					<div class="card-body">
						<table id="dataTable" class="table table-sm table-bordered table-striped">
							<thead>
								<tr>
									<th width="5%">SL.</th>
									<th>Title</th>
									<th>Description</th>
									<th>Status</th>
									<th width="10%" class="text-center">Action</th>
								</tr>
							</thead>
							<tbody id="sortable" class="sortable">
								@foreach($pages as $list)
								<tr data-id="{{$list->id}}">
									<td>{{ $loop->iteration}}</td>
									<td>{{ @$list->title ?? 'N/A' }}</td>
									<td>{!! @$list->description ?? 'N/A' !!}</td>
								
									<td>{!! activeStatus($list->status) !!}</td>
									<td class="text-center">
										@if(sorpermission('admin.content-management.manage-page.edit'))
										<a class="btn btn-sm btn-success" href="{{route('admin.content-management.manage-page.edit',$list->id)}}">
											<i class="fa fa-edit"></i>
										</a>
										@endif
										@if(sorpermission('admin.content-management.manage-page.destroy'))
										<a class="btn btn-sm btn-danger destroy" data-id="{{$list->id}}" data-route="{{route('admin.content-management.manage-page.destroy')}}">
											<i class="fa fa-trash"></i>
										</a>
										@endif
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection