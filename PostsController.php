<?php

class PostsController
{
    public function inde()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }
}