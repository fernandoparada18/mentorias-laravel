<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $posts = DB::table('posts')->get();

        return view('blog', ['posts' => $posts]);
    }

}
