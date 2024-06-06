<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'comments.user')->get();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('user', 'comments.user')->findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $post = new Post();
        $post->user_id = Auth::id();
        $post->post_name = $request->post_name;
        $post->type = $request->type;
        $post->content = $request->content;

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images', 'public');
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
}