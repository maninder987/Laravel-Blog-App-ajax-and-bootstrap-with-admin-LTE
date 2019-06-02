@extends('layouts.admin')

@section('content')

<div class="container">
  <br><br>

  <div class="col-md-10 col-md-offset-1">
    <div class="callout callout-info" align='center'>
      <h3>Add New Tag</h3>
      <form action="{{ route('admin.datatag') }}" method="post" id="multiselectForm"  class="form-horizontal">
         <div class="form-group">
           <input type="text" name="tag" class='form-control' placeholder='Add tag Here' id='tag_field'>
         </div>
         <input type="hidden" name="token" class='token' id='token' value='{{ csrf_token() }}'>
          <input type="hidden" id="authorid" name="authorid" data="{{ Auth::user()->id  }}">
         <div class="form-group">
           <input type="submit" name="submit" class='btn btn-info' id='tag_sender'>
         </div>
      </form>

      <br>
    </div>

  </div>

</div>

@endsection
