<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $posts =Post::get();
      return view('posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $posts=new Post();
        $posts->postTitle =$request->postTitle;
        $posts->author =$request->author;
        $posts->description=$request->description;
        if($request->published)
        {
            $posts->published=1;

        }
        else
        $posts->published=0;
        
        
        $posts->save();
       // return "Data added successfully";

       return redirect('posts');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('showPost',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
       return view('updatePost',compact('post'));
    }

    
 
  private $columns = ['postTitle', 'created_at'];


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
       
      $data=$request->only($this->columns); 
      
      Post::where ('id',$id) ->update($data);
      return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
