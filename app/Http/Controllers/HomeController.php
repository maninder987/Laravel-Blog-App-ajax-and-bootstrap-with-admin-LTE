<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use App\Category;
use App\Tag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   

        $user_id = Auth::user()->id;
        //$post = DB::table('posts')->where('author', $user_id)->get();
        $posts = count(Post::with('category')->where('author', $user_id)->get());
        $category = count(Category::where('author', $user_id)->get());
        $tags = count(Tag::where('author', $user_id)->get());

        //$posts = count(Post::all());
        $user = count(User::all());
        return view('home')->with('users',$user)
                           ->with('posts',$posts)
                           ->with('categories',$category)
                           ->with('tags',$tags);
    }
}
