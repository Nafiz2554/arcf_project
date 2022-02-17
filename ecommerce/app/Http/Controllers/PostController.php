<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all(); 
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Post;
        $post->id= $request->post;
        $post->heading= $request->heading;
        $post->description= $request->description;
        $post->image= $request->image->store('post');
        $post->save();
         return redirect()->back()->with('message','Post Successfully Created');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function change_status(Post $post)
    {
        if($post->status==1){
            $post->update(['status'=>0]);
        }else{
            $post->update(['status'=>1]);
        }
        return redirect()->back()->with('message','Status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
         return view('admin.post.edit',compact('post')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $update=$post->update([
            'heading'=>$request->heading,
            'description'=>$request->description,
            'image'=>$request->file('image')->store('post')
        ]);
        if($update){
            return redirect('/posts')->with('message','Post updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Post $post)
    {
        unlink(storage_path('app/public/'.$post->image));
        $delete=$post->delete();
        if($delete){
            return redirect()->back()->with('message','Post deleted successfully');
        }
    }
}
