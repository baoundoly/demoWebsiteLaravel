@extends('admin.layouts.posts')
@section('content')
<link href="{{asset('extra-plugins/jstree/style.css')}}" rel="stylesheet" type="text/css"/>
<script src="{{asset('extra-plugins/jstree/jstree.js')}}"></script>
{{-- <style>
  [data-inline="true"]{
    display:initial;
  }

.jstree-default .jstree-clicked {
  background: #beebff00;
}
</style> --}}
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-right">
            <h4 class="card-title">Services</h4>
            <a href="{{route('admin.home-management.service-info.add')}}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Service</a>
          </div>
          <div class="card-body">
            <table id="dataTable" class="table table-sm table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">SL.</th>
                        <th>Icon</th>
                        <th>Heading</th>
                        <th width="50%">Description</th>
                        <th width="10%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="sortable" class="sortable">
                    @foreach($services as $service)
                    <tr data-id="{{$service->id}}">
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $service->icon }}</td>
                        <td>{{ $service->heading }}</td>
                        <td>{{ $service->description }}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-success" href="{{route('admin.home-management.service-info.edit', [$service->id])}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger destroy" data-id="{{$service->id}}" data-route="{{route('admin.home-management.service-info.destroy')}}">
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
@endsection