<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function showPosts()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'photo_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // アップロードされた写真の処理
        $photo = $request->file('photo_path');
        $photoPath = $photo->store('photos', 'public');

        // 新しい投稿を作成
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'photo_path' => $photoPath,
            'lat' => $request->input('lat'),
            'lng' => $request->input('lng'),
        ]);
        return redirect('/posts')->with('success', 'Post with photo uploaded successfully!');
    }

    public function getPosts()
    {
        $posts = Post::all();
        return response()->json($posts);
    }
}