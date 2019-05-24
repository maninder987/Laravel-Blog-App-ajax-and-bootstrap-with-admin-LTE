@extends('layouts.admin')

@section('content')
<div class="container">
  <br><br>
  <div class="col-md-10 col-md-offset-1">
    <div class="callout callout-info" align='center'>
      <h3>Add New Post</h3>
    </div>
     <form  id="multiselectForm"   enctype="multipart/form-data" class="form-horizontal" >
       {{ csrf_field() }}
        <div class="form-group">
          <input type="text" name="title" class='form-control' id='ptitle' placeholder='Add Title Here'>
        </div>
        <div class="form-group">
          <label for="image">Select Featured Image</label>
           <input  name="pimage" type="file" id="pimage" class='form-control'>
        </div>
        <div class="form-group">
          <label for="category">Select Category</label>
          <select class="form-control" name="category" id='pcategory'>
            @if($categories)
                @foreach($categories as $category)
                  <option value="{{ $category->id}}">{{ $category->category}}</option>
                @endforeach
            @endif
          </select>
        </div>

        <div class="form-group">
                        <label>Add Tags</label>
                        <select name="tags" id="ptab" class="form-control select2" multiple="multiple" data-placeholder="Add Multiple Tags"
                                style="width: 100%;">
                          <option value='Alabama'>Alabama</option>
                          <option value='Alaska'>Alaska</option>
                          <option value='California'>California</option>
                          <option value='Delaware'>Delaware</option>
                          <option value='Tennessee'>Tennessee</option>
                          <option value='Texas'>Texas</option>
                          <option value='Washington'>Washington</option>
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
          <input type="submit" name="submit" class='btn btn-info' id='ap_submit'>
        </div>
        <br>
        <div class="output_results"></div>
     </form>



  </div>

</div>


<script type="text/javascript" src="{{ asset('backend/bower_components/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
//adding CKEditor
CKEDITOR.replace('editor1')
</script>
@endsection
