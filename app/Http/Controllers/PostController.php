<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Policies\PostPolicy;
use App\User;

class PostController extends Controller
{
    public function index()
    {
        $users = User::all();
        $posts = Post::latest()->with(['user', 'likes'])->paginate(10); 
        return view('post.index', [
            'posts' => $posts,
            'users' => $users
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);

        $request->user()->posts()->create([
            'body' => $request->body,
        ]);

        return back();
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();
        
        return back();
    }
}
