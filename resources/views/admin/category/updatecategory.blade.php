@extends('layouts.admin')

@section('content')

<div class="container">
  <br><br>

  <div class="col-md-10 col-md-offset-1">
    <div class="callout callout-info" align='center'>
      <h3>Edit OR Delete Category</h3>
      </div>
        <span class='sure_message'>
              <div class='well'>
                <span>Are You Sure </span>
                                    </br>
              <a href='#' id='delete_sure' data='nothing'>Yes</a>
                                    </br>
              <a href='#' id='close_delete' data='nothing'>No</a>
          </div>
        </span>
      <table class="table table-hover">


            <?php
            foreach ($categories as $value) {
              $categorySingle = $value['category'];
              ?>
              <tr class='row'>
                  <td>{{ $categorySingle }}</td>
                  <td>
                      <a href="{{ route('admin.editcategory',['name'=>$categorySingle]) }}">
                        <span class='btn btn-info'>Edit</span>
                      </a>
                  </td>
                  <td>
                    <a href="{{ route('admin.deletecategory',['id'=>$categorySingle]) }}"  class='delete_category' data-name="<?php echo $categorySingle; ?>"><span class='btn btn-danger' >Delete</span>
                      </a>

                  </td>
              </tr>
              <?php
            }
            ?>



      </table>






  </div>

</div>

@endsection
