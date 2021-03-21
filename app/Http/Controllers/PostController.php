<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = Post::all();
        return view('index', ['posts'=> $allPosts]);
    }
    public function create()
    {
        return view('create', ['users' => User::all()]);
    }
    public function edit($postID)
    {
        $post = Post::find($postID);
        return view('edit', [
            'post' => $post]);
    }
    public function show($postID)
    {
        $post = Post::find($postID);

        return view('show', [
            'post' => $post,
        ]);
    }
    public function store(Request $request)
    {
        $requestData=$request->all();
        Post::create($requestData);
        return redirect()->route('posts.index');
    }
}
