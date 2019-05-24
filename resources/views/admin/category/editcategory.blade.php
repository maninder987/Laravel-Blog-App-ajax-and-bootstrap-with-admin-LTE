@extends('layouts.admin')

@section('content')
    @if($name)


    <div class="container">
      <br><br>

      <div class="col-md-10 col-md-offset-1">
        <div class="callout callout-info" align='center'>
          <h3>Update Category</h3>
          </div>

          <form class="form" >
            {{csrf_field()}}
            
              <div class="form-group">
                  <input type="text" name="category" value="{{ $name }}" class='form-control' id='upcat'>
              </div>
              <input type="hidden" name="previous_name" value="{{ $name }}" id='previous_name'>
              <input type="hidden" name="token" class='token' id='uptoken' value='{{ csrf_token() }}'>
              <div class="form-group">
                  <input type="submit" name="submit" value="Update" class='btn btn-info' id='upcatsub'>
              </div>
          </form>





      </div>

    </div>

    @endif
@endsection
