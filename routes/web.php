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


      Route::get('/', function () {
          return view('index');
      });

      Route::get('/blog',[
        'uses'=>'BlogController@index',
        'as'=>'blog'
      ]);
//
Route::group( ['middleware'=>'auth'], function(){

      //route for adding form for new post
      Route::get('/post/addpost',[
          'uses'=>'PostController@index',
          'as'=>'admin.addpost'
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

 });
