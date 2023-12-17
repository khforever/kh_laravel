<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;

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
    //     $posts=new Post();
    //     $posts->postTitle =$request->postTitle;
    //     $posts->author =$request->author;
    //     $posts->description=$request->description;
    //     if($request->published)
    //     {
    //         $posts->published=1;

    //     }
    //     else
    //     $posts->published=0;
        
        
    //     $posts->save();
    //    // return "Data added successfully";

    //    return redirect('posts');


//best practice validate



$data=$request->validate([
  'postTitle'=>'required|string|max:50',
  'author'=>'required|string|max:50',
  'description'=>'required|string'
  
 ]);
  $data['published']=isset($request->published);
 Post::create ($data);
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
        Post::where('id',$id)->delete();
        return redirect('posts');
    }


    public function forceDelete(string $id)
    {
        
    Post::where('id',$id)->forceDelete();
        return  redirect('posts');
        
    }

    public function trashed()
    {
        
     
        $posts = Post::onlyTrashed()->get();
        return view('posttrashed', compact('posts'));
        
        

    }




    public function restore(string $id)
    {
        
    Post::where('id',$id)->restore();
        return  redirect('posts');
        
        

    }








}
