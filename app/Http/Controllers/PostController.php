<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Post;

use Validator;

use Session;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\File;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.post.addpost')->with('categories',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $post = Post::all();
        return view('admin.post.display')->with('posts',$post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('pimage')) {
             $post = new Post;
             $post->title = $request->Input('title');
             $post->content = $request->Input("content");
             $post->category =   $request->Input('category');
             $image = $request->file('pimage');
             $post->tabs = $request->tags;
             $post->author = $request->Input('authorid');



             $image_name = time().'.'.$image->getClientOriginalExtension();
             $destinationPath = public_path('/images');
             $image->move($destinationPath, $image_name);
             $post->picture='images/'.$image_name;
             $post->save();

             echo"<span class='alert alert-success'>Post Published Successfully</span>";
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
