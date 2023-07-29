<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
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

    public function store(PostCreateRequest $request)
    {
        Post::create($request->all());

        //session()->flash('status', 'Post guardado con exito');

        flash()->success('Your item has been saved successfully!')->dismissible(false);

        return to_route('blog');
    }

}
