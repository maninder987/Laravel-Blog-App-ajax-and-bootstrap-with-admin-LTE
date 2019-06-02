<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;
use Illuminate\Support\Facades\Auth;
class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tag.addtags');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->id;
        $alltags = Tag::where('author', $user_id)->get();
        return view('admin.tag.edittags')->with('tags',$alltags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        if((Tag::where(['tags' => $request->tags,'author'=>$request->author]))->count()>0){
              echo "<span class='alert alert-danger'>Tag Already Exists</span>";
        }else{

                $validatedData = $request->validate([
                    'tags' => 'required',
                    'author' => 'required',
                ]);
                $handleTags = new Tag;
                $handleTags->tags = $request->tags;
                $handleTags->token = $request->_token;
                $handleTags->author = $request->author;
                $handleTags->save();

                if($handleTags->save()){
                    echo "<span class='alert alert-success'>Tag Has Been Added Successfully</span>";
                }else{
                    echo "<span class='alert alert-danger'>Failed ,Contact Admin</span>";
                }

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
