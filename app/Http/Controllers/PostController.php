<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'category'])->orderBy('id', 'DESC')->paginate(20);
        return view('frontend.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('frontend.create');
    }

    public function store(Request $request)
    {
        # code...
    }

    public function show(Post $post)
    {
        dd($post);
        return view('frontend.show', ['post' => $post]);
    }

    public function edit($id)
    {
        return view('frontend.edit');
    }

    public function update(Request $request, $id)
    {
        return view('frontend.edit');
    }
}
