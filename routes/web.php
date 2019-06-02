<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
      Auth::routes();

      Route::get('/home', 'HomeController@index')->name('home');


      // Route::get('/', function () {
      //     return view('index');
      // });

      //Displaying posts to front end
      Route::get("/",[
        'uses'=>'FrontpageController@index',
        'as'=>'home'
      ]);

      Route::get("/test",[
        'uses'=>'Auth\LoginController@handleProviderCallback',
        'as'=>'test'
      ]);

      Route::get('/blog',[
        'uses'=>'BlogController@index',
        'as'=>'blog'
      ]);
      


      Route::get('login/github', 'Auth\LoginController@redirectToProvider');
      Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

//'middleware' => 'admin'
Route::group(['middleware' => 'auth'], function(){

      //route for adding form for new post
      Route::get('/post/addpost',[
          'uses'=>'PostController@index',
          'as'=>'admin.addpost'
      ]);

      //Adding posts using ajaxupload
      Route::post("/post/store",[
        'uses'=>'PostController@store',
        'as'=>'post.store'
      ]);

      //Adding posts using ajaxupload
      Route::get("/post/create",[
        'uses'=>'PostController@create',
        'as'=>'post.create'
      ]);

      


      //route for adding form for new category
      Route::get('/post/addcategory',[
          'uses'=>'CategoryController@index',
          'as'=>'admin.addcategory'
      ]);

      //storing categories to database
      Route::post('/post/addcategory',[
        'uses'=>'CategoryController@store',
        'as'=>'admin.addcat'
      ]);


      //getting all categories and displaying them
      Route::get('/post/showcategory',[
        'uses'=>'CategoryController@create',
        'as'=>'admin.showcategory'
      ]);

      //getting single category
      Route::get('/post/editcategory/{name}',[
        'uses'=>'CategoryController@edit',
        'as'=>'admin.editcategory'
      ]);

      //updating single category
      Route::put('/upcategory/{name}',[
        'uses'=>'CategoryController@update',
        'as'=>'admin.upcat'
      ]);

      //delete category
      Route::get("/deletecategory/{id}",[
        'uses'=>'CategoryController@destroy',
        'as'=>'admin.deletecategory'
      ]);



      //adding tags
      Route::get("/post/addtags",[
        'uses'=>'TagController@index',
        'as'=>'admin.addtags'
      ]);


      //processing tags form
      Route::post('/tag/store',[
        'uses'=>'TagController@store',
        'as'=>'admin.datatag'
      ]);

      //displaying tags in edit page
      Route::get("tag/create",[
        'uses'=>'TagController@create',
        'as'=>'admin.showtags'
      ]);


 });
