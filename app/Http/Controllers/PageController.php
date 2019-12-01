<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $posts = Post::orderBy('published_date','desc');
        return view('home')->with('posts', Post::paginate(6));
    }
}
