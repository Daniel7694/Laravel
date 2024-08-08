<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
      public function index(){

        $posts = Post::orderBy('id', 'desc')
                        ->paginate(10);

        return view('post.index', compact('posts'));
    }
    
    public function create(){

        return view('post.create');
    }

    public function store(StorePostRequest $request)
    {
        /*$request->validate([
            'title' => 'required|min:5 | max:255',
            'slug' => 'required|unique:post',
            'content' => 'required',
            'category' => 'required'
        ]);*/

        Post::create($request->all());

        return redirect()->route('post.index');
    }

    public function show(Post $post){
        
        return view('post.show', compact('post'));
    }

    public function edit(Post $post){


        return view('post.edit', compact('post'));
    }

    public function update(Request $request,Post $post){

        $request->validate([
            'title' => 'required|min:5 | max:255',
            'slug' => "required|unique:post,slug,{$post->id}",
            'content' => 'required',
            'category' => 'required'

        ]);

        $post->update($request->all());

        return redirect()->route('post.show', $post);
        
    }

    public function destroy(Post $post)
    {

        $post->delete();

        return redirect()->route('post.index');
    }

}
