@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="box-body table-responsive no-padding">
             <table class="table table-hover">
               <tr>
                 <th>ID</th>
                 <th>Image</th>
                 <th>Category</th>
                 <th>Tags</th>
                 <th>Title</th>
                 <th>Content</th>
                 <th>Author</th>
               </tr>

      @if($posts)
          @foreach($posts as $post)
               <tr>
                 <td>{{$post['id']}}</td>
                 <td><img src="{{  asset($post['picture']) }}" width='50' height='50'></td>
                 <td>{{$post['category']}}</td>
                 <td>{{$post['tabs']}}</td>
                 <td>{{$post['title']}}</td>
                 <td><?php echo strip_tags($post['content']); ?></td>
                 <td>{{$post['author']}}</td>
                 <th><span class='btn btn-info'>Edit</span></th>
                 <th><span class='btn btn-danger'>Delete</span></th>
               </tr>
          @endforeach
      @endif
             </table>
           </div>
</div>
@endsection
