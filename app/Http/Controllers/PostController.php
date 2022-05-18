<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create(){
        return view('post.create');
    }

    public function store(PostRequest $request){
        $post = Post::create($request->all());
        return redirect()->route('post.index');
    }

    public function show($id){
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }
}
