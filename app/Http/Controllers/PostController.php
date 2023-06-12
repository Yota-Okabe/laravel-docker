<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function create() {
        return view('post.create');
    }

    public function update (Request $request, Post $post) {
        Gate::authorize('test');
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $validated['user_id'] = auth()->id();

        $post->update($validated);

        $post = Post::create($validated);
        return back()->with('message', '更新しました');
    } 

    public function index() {
        // $posts=Post::all();
        $posts=Post::with('user')->get();
        return view('post.index', compact('posts'));
    }

    public function show(Post $post) {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post) {
        return view('post.edit', compact('post'));
    }

}
