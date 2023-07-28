<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        $posts = Post::all();

        return view('blog', ['posts' => $posts]);
    }

    public function create()
    {
        $categories = Category::all();
        //dd($categories);
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('blog');
    }

}
