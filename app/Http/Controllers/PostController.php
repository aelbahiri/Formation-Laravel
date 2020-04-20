<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(\App\Post::all());  debuggage
        return view('posts.index', [
            'posts' => Post::all()
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            // dd(\App\Post::find($id)); debugage

            return view('posts.show', [ 
                'post' => Post::find($id)
            ]);

    }

    public function create(){
        return view('posts.create');
    }

    public function store(StorePost $request){

        // //Validation form required
        // $validateData = $request->validate();
         
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');

         $post->slug = Str::slug($post->title, '-');
         $post->active = false;

        $post->save();

        $request->session()->flash('status', 'Post Created successfuly!');
        
        return redirect()->route('posts.index') ;
    }

    public function edit($id){
        
        $post = Post::findOrFail($id) ;

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(){

    }

}
