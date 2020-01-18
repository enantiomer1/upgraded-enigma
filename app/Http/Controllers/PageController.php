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
        $title = 'Home';
        $header = 'Welcome to Step Depot';
        $posts = Post::where('section', 'blog')->where('status', 'published')->orderBy('published_date','desc')->take(3)->get();
        return view('home', compact('title', 'header', 'posts'));
    }

    public function search(Request $request)
    {
        $key = trim($request->get('q'));
        $title = 'Search Results';
        $header = 'Search Results';
        $posts = Post::query()->where('title', 'like', "%{$key}%")->where('status', 'published')->orderBy('published_date', 'desc')->paginate(6);
        return view('pages.search', compact('title', 'header', 'posts'));
    }

    public function search_single($slug)
    {
        $title = $slug;
        $header = 'Search Result';
        $post = Post::where('slug',$slug)->first();
        return view('pages.content_single', compact('title', 'header', 'post'));
    }

    public function bigbook()
    {
        $title = 'AA Big Book';
        $header = 'AA Big Book';
        return view('pages.bigbook', compact('title', 'header'));
    }

    public function twelve_and_twelve()
    {
        $title = '12 x 12';
        $header = 'The Twelve Steps and Twelve Traditions';
        return view('pages.12and12', compact('title', 'header'));
    }

    public function preamble()
    {
        $title = 'Preamble';
        $header = 'The AA Preamble and its Origins';
        return view('pages.preamble', compact('title', 'header'));
    }

    public function steps()
    {
        $title = '12 Steps';
        $header = 'The AA 12 Steps';
        return view('pages.12steps', compact('title', 'header'));
    }

    public function traditions()
    {
        $title = '12 Traditions';
        $header = 'The AA 12 Traditions';
        return view('pages.12traditions', compact('title', 'header'));
    }

    public function blog()
    {
        $title = 'Blog';
        $header = 'Recent Articles';
        $posts = Post::where('section', 'blog')->where('status', 'published')->orderBy('published_date','desc')->paginate(6);
        return view('pages.blog', compact('title', 'header', 'posts'));
    }

    public function blog_single($slug)
    {
        $title = $slug;
        $header = 'Recent Article';
        $post = Post::where('slug',$slug)->first();
        return view('pages.content_single', compact('title', 'header', 'post'));
    }

    public function history()
    {
        $title = 'AA History';
        $header = 'AA History';
        $posts = Post::where('section', 'history')->where('status', 'published')->orderBy('published_date','desc')->paginate(6);
        return view('pages.history', compact('title', 'header', 'posts'));
    }

    public function history_single($slug)
    {
        $title = $slug;
        $header = 'AA History';
        $post = Post::where('slug',$slug)->first();
        return view('pages.content_single', compact('title', 'header', 'post'));
    }

    public function literature()
    {
        $title = 'AA Literature';
        $header = 'AA Literature';
        $posts = Post::where('section', 'literature')->where('status', 'published')->orderBy('published_date','desc')->paginate(6);
        return view('pages.literature', compact('title', 'header', 'posts'));
    }

    public function literature_single($slug)
    {
        $title = $slug;
        $header = 'AA Literature';
        $post = Post::where('slug',$slug)->first();
        return view('pages.content_single', compact('title', 'header', 'post'));
    }

    public function prayers()
    {
        $title = 'AA Prayers';
        $header = 'AA Prayers';
        $posts = Post::where('section', 'prayers')->where('status', 'published')->orderBy('published_date','asc')->paginate(6);
        return view('pages.prayers', compact('title', 'header', 'posts'));
    }

    public function prayers_single($slug)
    {
        $title = $slug;
        $header = 'AA Prayers';
        $post = Post::where('slug',$slug)->first();
        return view('pages.content_single', compact('title', 'header', 'post'));
    }
}
