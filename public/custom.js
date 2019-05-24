$(document).ready(function(){
    //Initialize Select2 Elements
     $('.select2').select2();

     $(".sure_message").hide();

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




    //delete category using ajax
    $(".delete_category").click(function(e){
      e.preventDefault();
      $(".sure_message").show();
      $(".delete_category").removeClass('deleteNow');
      $(this).addClass('deleteNow');
    });


    $("#delete_sure").click(function(){
      var categoryName = $(".deleteNow").attr("data-name");
      var url = '/deletecategory/'+categoryName;
      $.ajax({
           type: "get",
           data: {'category':categoryName
                 },
           url:url,
           success: function(data) {
                $(".output").html("<span class='alert alert-success'>"+data+"</span>")
                $(".deleteNow").parent().parent().hide();
                $(".sure_message").hide();
               },
           error: function(data) {
               $(".output").html("<span class='alert alert-danger'>"+data+"</span>");
           }
       });
    });

    $("#close_delete").click(function(){
      $(".sure_message").hide(10);
    });






    //adding posts using ajax

    $("#ap_submit").click(function(e){
      e.preventDefault();
      var title = $("#ptitle").val();
      var imgName = $("#pimage").val();
      var category = $("#pcategory").val();
      var tabs = $("#ptab").val();
      var content = CKEDITOR.instances["editor1"].getData();
      var authorId = $("#authorid").val();
      var newTabs = tabs.toString();

      var totalFormData = new FormData($("#multiselectForm")[0]);
      totalFormData.append('content',content);
      totalFormData.append('tags',newTabs);
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:"/post/store",///post/store
        type:"POST",
        data:totalFormData,
        processData: false,
        contentType: false,
        cache: false,
        success:function(data){
          $(".output_results").html(data);
        },
        error: function(data) {
          $(".output_results").html(data);
        }
      });





      //console.log(imgName+token);dataType:"JSON",
    });


});
