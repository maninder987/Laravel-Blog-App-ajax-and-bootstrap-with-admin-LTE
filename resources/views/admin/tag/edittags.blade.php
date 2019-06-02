@extends('layouts.admin')

@section('content')

<div class="container">
  <br><br>

  <div class="col-md-10 col-md-offset-1">
    <div class="callout callout-info" align='center'>
      <h3>Edit OR Delete Tag</h3>
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
            foreach ($tags as $value) {
              $tagsingle = $value['tags'];
              ?>
              <tr class='row'>
                  <td>{{ $tagsingle }}</td>
                  <td>
                      <a href="#">
                        <span class='btn btn-info'>Edit</span>
                      </a>
                  </td>
                  <td>
                    <a href="#"  class='delete_category' data-name="<?php echo $tagsingle; ?>"><span class='btn btn-danger' >Delete</span>
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
