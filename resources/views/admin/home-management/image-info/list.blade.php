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
            <h4 class="card-title">Images</h4>
            <a href="{{route('admin.home-management.image-info.add')}}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Image</a>
          </div>
          <div class="card-body">
            <table id="dataTable" class="table table-sm table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="15%">SL.</th>
                        <th width="50%" class="text-center">Image</th>
                        <th width="25%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="sortable" class="sortable">
                    @foreach($images as $image)
                    <tr data-id="{{$image->id}}">
                        <td>{{ $loop->iteration}}</td>
                        <td class="text-center">{{ $image->img }}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-success" href="{{route('admin.home-management.image-info.edit', [$image->id])}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger destroy" data-id="{{$image->id}}" data-route="{{route('admin.home-management.image-info.destroy')}}">
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