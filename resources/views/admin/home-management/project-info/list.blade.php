@extends('admin.layouts.posts')
@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header text-right">
						<h4 class="card-title">Projects</h4>
						<a href="{{route('admin.home-management.project-info.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Project</a>
					</div>
					<div class="card-body">
						<table id="dataTable" class="table table-sm table-bordered table-striped">
							<thead>
								<tr>
									<th width="5%">SL.</th>
									<th width="10%">Client Name</th>
									<th width="40%">Project Type</th>
									<th>Project Location</th>
									<th>Status</th>
									<th width="10%" class="text-center">Action</th>
								</tr>
							</thead>
							<tbody id="sortable" class="sortable">
								@foreach($projects as $project)
                                {{-- @dd($project) --}}
								<tr data-id="{{$project->id}}">
									<td>{{ $loop->iteration}}</td>
									<td>{{ $project->cname }}</td>
									<td>{{ $project->type }}</td>
									<td>{{ $project->location }}</td>
									<td>{!! activeStatus($project->status) !!}</td>
									<td class="text-center">
										<a class="btn btn-sm btn-success" href="{{route('admin.home-management.project-info.edit',[$project->id])}}">
											<i class="fa fa-edit"></i>
										</a>
										<a class="btn btn-sm btn-danger destroy" data-id="{{$project->id}}" data-route="{{route('admin.home-management.project-info.destroy')}}">
											<i class="fa fa-trash"></i>
										</a>
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
{{-- <script type="text/javascript">
	$(function(){
		$("#sortable").sortable({
			update:function(event, ui){
				var jsonSortable = [];
				jsonSortable.length = 0;
				$("#sortable tr").each(function (index, value){
					let item = {};
					item.id = $(this).data("id");
					jsonSortable.push(item);
				});

				var jsondata = JSON.stringify(jsonSortable);
				$.ajax({
					url: "{{route('admin.home-management.project-info.sorting')}}",
					type: "get",
					data: {jsondata:jsondata},
					dataType: 'json',
					success: function (data) {
						console.log(data);
					}
				});
			}
		}).disableSelection();
	})
</script> --}}
@endsection