<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Rating;

use Illuminate\Http\Request;


class PostController extends Controller
{
    //
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect('/posts/create')->with('success', 'Post created successfully!');
    }

    public function rate(Request $request, Post $post)
    {
        $rating = new Rating();
        $rating->value = $request->rating;
        $post->ratings()->save($rating);

        return redirect()->back()->with('success', 'Post rated successfully!');
    }
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
}
