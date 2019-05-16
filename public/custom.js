$(document).ready(function(){
    //Initialize Select2 Elements
     $('.select2').select2();

     //inserting category in database
     $('#cat_sender').click(function(e){
          e.preventDefault();
          var $form = $(this);

          url = $form.attr('action');


          var category = $("#cat_field").val();
          var token = $("#token").val();

          if(category == '' || token == ''){
            $(".output").html("<span class='alert alert-danger'>Field Is Empty</span>");
          }else{
             $.ajax({
                type: "post",
                data: {'category':category,
                       '_token': token
                      },
                success: function(data) {
                    $(".output").html("<span class='alert alert-success'>"+data+"</span>")
                },
                error: function(data) {
                    $(".output").html("<span class='alert alert-danger'>"+data+"</span>");
                }
            });
          }
      });

      //updating category
      $("#upcatsub").click(function(e){
             e.preventDefault();

            if(upcategory == '' ){
              $(".output").html("<span class='alert alert-danger'>Field Is Empty</span>");
            }else{

                          var upcategory = $("#upcat").val();
                          var uptoken = $("#uptoken").val();
                          var id = $("#previous_name").val();
                          var url = '/upcategory/'+id;

                           $.ajax({
                                type: "PUT",
                                //url: "{{ url('/post/upcategory') }}",
                                data: {'category':upcategory,
                                       '_token': uptoken
                                      },
                                url:url,
                                success: function(data) {
                                     $(".output").html("<span class='alert alert-success'>"+data+"</span>")
                                    //console.log(data+'Pass');

                                },
                                error: function(data) {
                                    $(".output").html("<span class='alert alert-danger'>"+data+"</span>");
                                     //console.log(data+'Failed');
                                     //alert(data);
                                }
                            });
           }
    });
});
