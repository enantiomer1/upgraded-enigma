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
        $posts = Post::orderBy('published_date','desc')->take(3)->get();
        return view('home')->with('posts', Post::paginate(6));
    }

    public function blog()
    {
        $posts = Post::orderBy('published_date','desc');
        return view('blog')->with('posts', Post::paginate(6));
    }

    public function blog_single($slug)
    {
        $post = Post::where('slug',$slug)->first();
        //dd($post);
        return view('blog_single')->with([
            'post' => $post
        ]);
    }
}
