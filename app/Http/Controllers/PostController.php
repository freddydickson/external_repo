<?php

namespace App\Http\Controllers;

use pagination;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index(){
        //this will Get or grab the list of all posts sent to the DB with the eloquent method 
        $posts = Post::latest()->with(['user', 'likes'  ])->paginate(3); //this could be known to be Laravel Collection
        return view('posts.index', [
            'posts' => $posts //this will return all the Get posts to the index view
        ]);
    }

    public function show(Post $post){
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function store (Request $request){
        //validating the body
        $this->validate($request, [
            'body'=> 'required',
        ]);

        //creating an eloquent calling it from the user model  to the eloquent posts() to create a relationship
        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function edit(post $post){
        return view('posts.edit', ['post'=>$post]);
    }

    public function update(Post $post, Request $request){

        $this->validate($request, [
            'body'=> 'required',

        ]);

        $post->update($request->all());
        // $post->update([
        //     'body'=> $request->only('body')
        // ]);

        return redirect()->route('posts');
    }

    public function destroy(Post $post){
        $this->authorize('delete', $post);
        $post->delete();
        return back();
    }

}

