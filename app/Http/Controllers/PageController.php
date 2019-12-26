<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Speaker;

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
        $posts = Post::where('section', 'blog')->orderBy('published_date','desc')->take(3)->get();
        return view('home', compact('title', 'header', 'posts'));
    }

    public function search(Request $request)
    {
        $key = trim($request->get('q'));
        $title = 'Search Results';
        $header = 'Search Results';
        $posts = Post::query()->where('title', 'like', "%{$key}%")->orderBy('published_date', 'desc')->paginate(6);
        return view('pages.search', compact('title', 'header', 'posts'));
    }

    public function search_single($slug)
    {
        $title = $slug;
        $header = 'Search Result';
        $post = Post::where('slug',$slug)->first();
        return view('pages.search_single', compact('title', 'header', 'post'));
    }

    public function blog()
    {
        $title = 'Blog';
        $header = 'Recent Articles';
        $posts = Post::where('section', 'blog')->orderBy('published_date','desc')->paginate(6);
        return view('pages.blog', compact('title', 'header', 'posts'));
    }

    public function blog_single($slug)
    {
        $title = $slug;
        $header = 'Recent Article';
        $post = Post::where('slug',$slug)->first();
        return view('pages.blog_single', compact('title', 'header', 'post'));
    }

    public function history()
    {
        $title = 'AA History';
        $header = 'AA History';
        $posts = Post::where('section', 'history')->orderBy('published_date','desc')->paginate(6);
        return view('pages.history', compact('title', 'header', 'posts'));
    }

    public function history_single($slug)
    {
        $title = $slug;
        $header = 'AA History';
        $post = Post::where('slug',$slug)->first();
        return view('pages.history_single', compact('title', 'header', 'post'));
    }

    public function literature()
    {
        $title = 'AA Literature';
        $header = 'AA Literature';
        $posts = Post::where('section', 'literature')->orderBy('published_date','desc')->paginate(6);
        return view('pages.literature', compact('title', 'header', 'posts'));
    }

    public function literature_single($slug)
    {
        $title = $slug;
        $header = 'AA Literature';
        $post = Post::where('slug',$slug)->first();
        return view('pages.literature_single', compact('title', 'header', 'post'));
    }

    public function prayers()
    {
        $title = 'AA Prayers';
        $header = 'AA Prayers';
        $posts = Post::where('section', 'prayers')->orderBy('published_date','desc')->paginate(6);
        return view('pages.prayers', compact('title', 'header', 'posts'));
    }

    public function prayers_single($slug)
    {
        $title = $slug;
        $header = 'AA Prayers';
        $post = Post::where('slug',$slug)->first();
        return view('pages.prayers_single', compact('title', 'header', 'post'));
    }

    public function speakers()
    {
        $title = 'AA Speakers';
        $header = 'AA Speakers';
        $speakers = Speaker::orderBy('created_at','desc')->paginate(12);
        return view('pages.speakers', compact('title', 'header', 'speakers'));
    }
}
