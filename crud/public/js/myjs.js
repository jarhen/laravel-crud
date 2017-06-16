$(document).ready(function(){

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
        });

     // delete a post
        $(document).on('click', '.delete-modal', function() {
            var id = $(this).attr("data-id");
            $('.modal-title').text('Delete');
            $('#id').val(id);
           
            $('#deleteModal').modal('show');

            var id = $(this).attr("data-id");
            //console.log(id);
        });


        $('.modal-footer').on('click', '.delete', function() {
            var id = $('#id').val(); 
                console.log(id);
                 console.log($('input[name=_token]').val());
            $.ajax({
                type: 'POST',
                url: 'destroy/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                },
                success: function(data) {
                  toastr.success('<div class="container"><div class="alert alert-success">Successfully deleted!</div></div>', {timeOut: 5000});
                  $('#deleteModal').modal('hide');
                }
            });
        });
       
        // datatable
        $('#mytable').DataTable();

      if($('#success').is(":visible")){
        setTimeout(function() {
            $('#success').fadeOut('fast');

            }, 3000);
      }else{
        // do nothing
      }
       if($('#failed').is(":visible")){
        console.log('yes');
         setTimeout(function() {
            $('#failed').fadeOut('fast');
            
            }, 3000);

       }else{
        // do nothing
       }

        $(document).on('click','.del',function(){
           var id = $(this).attr("data-id");
          console.log(id);
         $.confirm({

           

            title: 'Confirm!',
            content: 'Are you sure about this ?',
            buttons: {
            confirm: function () {
                $.alert('Record Deleted!');
                console.log($('input[name=_token]').val());

            $.ajax({
                type: 'POST',
                url: 'destroy/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                },
                success: function(data) {
                  toastr.success('<div class="container"><div class="alert alert-success">Successfully deleted !</div></div>', {timeOut: 5000});
                  $('#deleteModal').modal('hide');
                }
            });

            },
            cancel: function () {
                $.alert('Canceled!');
            }
          }
           
            });
         });

        

       // $('success').is(":visible"); 
     });