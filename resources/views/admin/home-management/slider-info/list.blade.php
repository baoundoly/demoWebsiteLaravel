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
            <h4 class="card-title">Posts</h4>
            <a href="{{route('admin.home-management.slider-info.add')}}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Post</a>
          </div>
          <div class="card-body">
            <table id="dataTable" class="table table-sm table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">SL.</th>
                        <th>Title</th>
                        <th width="30%">Description</th>
                        <th width="30%">Image</th>
                        <th width="15%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="sortable" class="sortable">
                    @foreach($sliders as $slider)
                    <tr data-id="{{$slider->id}}">
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->description }}</td>
                        <td class="text-center">{{ $slider->img }}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-success" href="{{route('admin.home-management.slider-info.edit', [$slider->id])}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            {{-- <a class="btn btn-sm btn-danger destroy" data-id="{{$slider->id}}" data-route="{{route('admin.slider.delete', [$slider->id])}}">
                                <i class="fa fa-trash"></i>
                            </a> --}}
                            <a class="btn btn-sm btn-danger destroy" data-id="{{$slider->id}}" data-route="{{route('admin.home-management.slider-info.destroy')}}">
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