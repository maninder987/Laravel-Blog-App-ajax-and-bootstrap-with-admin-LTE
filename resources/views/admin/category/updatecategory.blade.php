@extends('layouts.admin')

@section('content')

<div class="container">
  <br><br>

  <div class="col-md-10 col-md-offset-1">
    <div class="callout callout-info" align='center'>
      <h3>Edit OR Delete Category</h3>
      </div>
      <table class="table table-hover">


            <?php
            foreach ($categories as $value) {
              $categorySingle = $value['category'];
              ?>
              <tr>
                  <td>{{ $categorySingle }}</td>
                  <td>
                      <a href="{{ route('admin.editcategory',['name'=>$categorySingle]) }}">
                        <span class='btn btn-info'>Edit</span>
                      </a>
                  </td>
                  <td><a href='#'><span class='btn btn-danger'>Delete</span>
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
