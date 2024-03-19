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
            <h4 class="card-title">Abouts</h4>
            <a href="{{route('admin.home-management.about-info.list') }}" class="btn btn-sm btn-info"><i class="fas fa-list"></i> About List</a>
          </div>
          <div class="card-body">
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
            @endif
            <form method="POST" action="{{(@$editData)?(route('admin.home-management.about-info.update',$editData)):(route('admin.home-management.about-info.store')) }}" enctype="multipart/form-data">
              @csrf 
                <div class="form-group">
                    <label><strong>Description :</strong></label>
                    <textarea class="ckeditor form-control" name="description">{{@$editData->description}}</textarea>
                </div>
                <div class="form-group text-center col-md-12">
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
    $('#permission').validate({
      errorPlacement: function(error, element){
        if (element.attr("name") == "user_role" ){ error.insertAfter(element.next()); }
        else{error.insertAfter(element);}
      },
      errorClass:'text-danger',
      validClass:'text-success',
      rules:{
        user_role:{
          required: true
        }        
      }
    });
  });
</script>

<script type="text/javascript">
  $(function() {
    var menu='';
    $('.checkboxesTree').on('changed.jstree', function(e, data) {
      var i, j, r = [];
      nodesOnSelectedPath = [...data.selected.reduce(function (acc, nodeId) {
        var node = data.instance.get_node(nodeId);
        return new Set([...acc, ...node.parents, node.id]);
      }, new Set)];
      menu = nodesOnSelectedPath.join(',');
      $('#jsondata').val(menu); 
      console.log(menu);
    });
  });
</script>
<script type="text/javascript">
  $(function(){
    $('#add').on('click',function(){
      var url="{{route('admin.role-management.role-permission-info.store')}}";
      var role_id="{{request()->user_role}}";
      var menu_id=$('#menu_id').val();
      var jsondata=$('#jsondata').val();
      if(jsondata){
        $.ajax({
          'url':url,
          'type':'POST',
          'data':{_token:"{{csrf_token()}}",jsondata:jsondata,role_id:role_id,menu_id:menu_id},
          beforeSend : function(){
            $('.preload').show();
          },
          success:function(data){
            if(data.status=='success'){
              Swal.fire({
                icon: "success",
                title: data.message,
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
              });
              setTimeout(function(){
                location.reload();
              }, 2000);
            }else{
              Swal.fire({
                icon: "error",
                title: data.message,
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
              });
              $('.preload').hide();
            }
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            Swal.fire({
              icon: "error",
              title: "দুঃখিত !!সফটওয়্যার মেইনটেনেন্স সমস্যার কারনে তথ্য সংরক্ষন করা যাচ্ছে না। আপনি রিলোড না নিয়ে সংশিষ্ট সাপোর্ট ইঞ্জিনিয়ারকে জানান",
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000
            });
            $('.preload').hide();
          }
        });
      }else{
        Swal.fire({
          icon: "error",
          title: "Plese select any Menus",
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
        $('.preload').hide();   
      }     
    });
  });
</script>
<script type="text/javascript">
  $(document).on('change','#user_role,#menu_id',function(){
    $('#deleteifchangeselectoption').remove();
  });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $('.checkboxesTree').jstree({
      'core' : {
        'themes' : {
          'responsive': false
        }
      },

      'types' : {
        'default' : {
          'icon' : 'fa fa-file-text-o'
        },
        'file' : {
          'icon' : 'fa fa-file-text'
        }
      },

      'plugins' : ['types', 'checkbox']
    });
  });
</script>
@endsection