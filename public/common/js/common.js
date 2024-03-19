
$.widget.bridge('uibutton', $.ui.button)

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $('.select2').select2();
    
    $(document).on('click','.destroy',function(){
        var thisBtn = $(this);
        var url = $(thisBtn).data('route');
        var id = $(thisBtn).data('id');
        Swal.fire({
            icon: 'error',
            iconHtml: '<i class="fa fa-trash"></i>',
            title: 'Delete',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return $.ajax({
                    'url':url,
                    'type':'POST',
                    'data':{
                        _token:$('[name=csrf-token]').attr('content'),
                        id:id
                    },
                }).then(response => {
                    if (response.status != 'success') {
                        throw new Error(response.message)
                    }
                    return response;
                })
                .catch(error => {
                    Swal.showValidationMessage(error.message?error.message:error.responseJSON.message)
                })
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    icon: "success",
                    title: result.value.message,
                });
                $(thisBtn).parents('tr').hide('');

            }
        });
    });
});

window.addEventListener('online', () => {
    Swal.fire({
  // position: 'top-end',
      icon: 'success',
      title: 'Internet connection is online',
      showConfirmButton: false,
      timer: 1500
  });
});

window.addEventListener('offline', () => {
    Swal.fire({
  // position: 'top-end',
      icon: 'error',
      title: 'Internet connection is offline',
      showConfirmButton: false,
      // timer: 3000
      allowOutsideClick: false
  });
});