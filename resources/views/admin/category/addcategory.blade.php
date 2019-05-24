@extends('layouts.admin')

@section('content')

<div class="container">
  <br><br>

  <div class="col-md-10 col-md-offset-1">
    <div class="callout callout-info" align='center'>
      <h3>Add New Category</h3>
      <form action="{{ route('admin.addcat') }}" method="post" id="multiselectForm"  class="form-horizontal">
         <div class="form-group">
           <input type="text" name="category" class='form-control' placeholder='Add Category Here' id='cat_field'>
         </div>
         <input type="hidden" name="token" class='token' id='token' value='{{ csrf_token() }}'>
         <div class="form-group">
           <input type="submit" name="submit" class='btn btn-info' id='cat_sender'>
         </div>
      </form>

      <br>
    </div>

  </div>

</div>

@endsection
