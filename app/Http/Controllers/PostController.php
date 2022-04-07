<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        return view('posts.index', [
            'posts' => Post::where('language', app()->getLocale())->simplePaginate(1),
        ]);
    }

    public function show(Post $post): View
    {
        return view('posts.view', [
            'post' => $post,
        ]);
    }
}
