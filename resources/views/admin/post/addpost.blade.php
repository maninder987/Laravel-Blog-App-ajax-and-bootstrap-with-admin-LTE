@extends('layouts.admin')

@section('content')

<div class="container">
  <br><br>

  <div class="col-md-10 col-md-offset-1">
    <div class="callout callout-info" align='center'>
      <h3>Add New Post</h3>
    </div>
     <form action="index.html" method="post" id="multiselectForm" method="post" class="form-horizontal">
        <div class="form-group">
          <input type="text" name="title" class='form-control' placeholder='Add Title Here'>
        </div>
        <div class="form-group">
          <label for="image">Select Featured Image</label>
          <input type="file" name="image"  class='form-control'>
        </div>
        <div class="form-group">
          <label for="category">Select Category</label>
          <select class="form-control" name="category">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
          </select>
        </div>

        <div class="form-group">
                        <label>Add Tags</label>
                        <select class="form-control select2" multiple="multiple" data-placeholder="Add Multiple Tags"
                                style="width: 100%;">
                          <option>Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
        </div>
        <div class="form-group">
          <div class="box box-info">
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                    </textarea>
          </div>
        </div>
        <input type="hidden" id="authorid" name="authorid" value="{{ Auth::user()->id  }}">
        <div class="form-group">
          <input type="submit" name="submit" class='btn btn-info' >
        </div>

     </form>
  </div>

</div>
<script type="text/javascript" src="{{ asset('backend/bower_components/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
//adding CKEditor
CKEDITOR.replace('editor1')
</script>
@endsection
