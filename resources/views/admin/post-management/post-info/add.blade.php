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
            <a href="{{route('admin.post-management.post-info.list') }}" class="btn btn-sm btn-info"><i class="fas fa-list"></i> Post List</a>
          </div>
          <div class="card-body">
            <form method="POST" action="{{(@$editData)?(route('admin.post-management.post-info.update',$editData)):(route('admin.post-management.post-info.store')) }}" enctype="multipart/form-data" id="formSubmit">
              @csrf
              <div class="form-group">
                  <label>Title :</label>
                  <input type="text" name="title" class="form-control" value="{{@$editData->title}}"/>
              </div>  
              <div class="form-group">
                  <label><strong>Description :</strong></label>
                  <textarea class="ckeditor form-control" name="description">{{@$editData->description}}</textarea>
              </div>
              <div class="form-group text-center">
                  <button type="submit" class="btn btn-success btn-md">Save</button>
              </div>
          </form>
          </div>
        </div>         
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  $(function(){
    $('#formSubmit').validate({
      errorPlacement: function(error, element){
        if (element.attr("name") == "user_role" ){ error.insertAfter(element.next()); }
        else{error.insertAfter(element);}
      },
      errorClass:'text-danger',
      validClass:'text-success',
      rules:{
        title:{
          required: true
        }        
      }
    });
  });
</script>
@endsection