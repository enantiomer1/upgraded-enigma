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
        $posts = Post::where('section', 'blog')->orderBy('published_date','desc')->take(3)->get();
        return view('home')->with('posts', $posts);
    }

    public function blog()
    {
        $title = 'Blog';
        $header = 'Recent Articles';
        $posts = Post::where('section', 'blog')->orderBy('published_date','desc')->paginate(6);
        return view('blog', compact('title', 'header', 'posts'));
    }

    public function blog_single($slug)
    {
        $title = $slug;
        $header = 'Recent Article';
        $post = Post::where('slug',$slug)->first();
        return view('blog_single', compact('title', 'header', 'post'));
    }

    public function history()
    {
        $posts = Post::where('section', 'history')->orderBy('published_date','desc')->paginate(6);
        return view('history')->with('posts', $posts);
    }

    public function history_single($slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('history_single')->with('post', $post);
    }
}
