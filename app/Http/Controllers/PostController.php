<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        return view('posts.index', [
            'posts' => Post::orderBy('id', 'desc')->simplePaginate(10),
        ]);
    }

    public function show(Post $post): View
    {
        return view('posts.view', [
            'post' => $post,
        ]);
    }
}
