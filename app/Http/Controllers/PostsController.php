<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();

        return view('posts.index',['posts'=>$posts]);
    }

    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:20',
            'body'=>'required',
        ]);
        
        Post::create($params);
        
        return redirect()->route('/');
    }
    
    public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);
        
        return view('posts.edit',['post'=>$post]);
    }
    
    public function update($post_id, Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:20',
            'body'=>'required',
        ]);
        
        $post = Post::findOrFail($post_id);
        $post->fill($params)->save();
        
        Post::create($params);
        
        return redirect()->route('/');
    }
    
    public function destroy($post_id)
    {
        $post = Post::findOrFail($post_id);

        \DB::transaction(function() use ($post){
            $post->delete();
        });

        return redirect()->route('/');
    }
}