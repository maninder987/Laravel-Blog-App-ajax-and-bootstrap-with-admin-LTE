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
                   <td>
                      <span class='id_displayed' data="{{$post['id']}}">{{$post['id']}}
                      </span>
                    </td>

                    <td>
                      <img  class='id_picture' src="{{  asset($post['picture']) }}" width='300' height='200'>
                    </td>
                    
                    <td>
                      <span  class='id_category' data="{{$post->Category->category}}">
                        <?php echo ($post->Category->category);?>
                      </span>
                    </td>

                    <td>
                      <span  class='id_tags' data="{{$post['tabs']}}">             {{$post['tabs']}}
                      </span>
                    </td>

                    <td>
                        <span  class='id_title' data="<?php echo substr($post['title'],0,40);  ?>">
                          <?php echo substr($post['title'],0,40);  ?>
                        </span>
                    </td>

                    <td >
                      <span  class='id_content' data="<?php echo strip_tags($post['content']); ?>">
                          <?php echo substr(strip_tags($post['content']),0,80); ?>
                        </span>
                    </td>
                    
                    <td>
                      <span class='id_author' data="<?php  echo ucfirst($post->user->name);?>">
                      </span><?php  echo ucfirst($post->User->name);?>
                    </td>
                 
                    <td>
                        <a data_id="{{$post['id']}}" class='edit'>
                            <span type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Edit
                            </span>
                        </a>
                    </td>
                    <td>
                        <span class='btn btn-danger'>Delete</span>
                    </td>
               </tr>

          @endforeach

      @endif


             </table>
             {{ $posts->links()  }}
           </div>



           

          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content" id='form_box_wrapper'>
                 <form class='form'>
                  <div class='thumbnail'>
                    <img src="" id='model_image_output' width="400" height="250">
                  </div>
                  <div class='form-group'>
                      <label>Select New Image Here</label>
                     <input type="file" name="update_image" 
                     id='model_image' class='form-control'>
                   </div>
                   <label>Title Here</label>
                   <div class='form-group'>
                     <input type="text" name="update_title" 
                     id='model_title' class='form-control'>
                   </div>
                   <div class='form-group'>
                    <label>Update Content</label>
                     <textarea type="text" name="update_content" 
                     id='model_content' class='form-control'></textarea>
                   </div>
                   <div class='form-group'>
                    <label>Select Category</label>
                     <select id='model_category'>
                        @if($categories)
                          @foreach($categories as $category)
                            <option value="{{ $category['category'] }}" > 
                              {{ $category['category'] }}
                            </option>
                          @endforeach
                        @endif
                     </select>
                   </div>
                   <div class='form-group'>
                    <label>Add Or Remove Tags</label>
                     <input type="text" name="update_content" 
                     id='model_tags' class='form-control'>
                   </div>
                    
                   <input type="submit" name="submit" class='btn btn-info'>
                  </form>
                </div>
              </div>
            </div>






</div>
@endsection
