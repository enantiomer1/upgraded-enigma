<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'nohistory', 'can:isAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Content Management';
        $header = 'Content Management';
        $posts = Post::orderBy('published_date','desc')->paginate(10);
        return view('admin.posts.index', compact('title', 'header', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create Content';
        $header = 'Create Content';
        return view('admin.posts.create', compact('title', 'header'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => 'required',
            'content' => ['required', 'min:3'],
            'section' => 'required',
            'image' => ['required', 'image', 'max:4999'],
            'alt_text' => ['required', 'min:3', 'max:75'],
            'meta_description' => ['required', 'min:3', 'max:155'],
            'published_date' => 'required',
        ]);

        // Handle File Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/img', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Post
        $post = new Post;
        $post->user_id = auth()->user()->id;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->section = $request->section;
        $post->image = $fileNameToStore;
        $post->alt_text = $request->alt_text;
        $post->meta_description = $request->meta_description;
        $post->published_date = $request->published_date;
        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Content has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $title = 'Edit Content';
        $header = 'Edit Content';
        $post = Post::where('slug',$slug)->first();
        return view('admin.posts.edit', compact('title', 'header', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {

        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => 'required',
            'content' => ['required', 'min:3'],
        ]);
        $post = Post::where('slug',$slug)->first();
        // Handle File Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/img', $fileNameToStore);
            // Delete file if exists
            Storage::delete('public/img/'.$post->image);
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->section = $request->section;
        if($request->hasFile('image')){
            $post->image = $fileNameToStore;
        }
        $post->alt_text = $request->alt_text;
        $post->meta_description = $request->meta_description;
        $post->published_date = $request->published_date;
        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Content has been updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id',$id)->first();

        //Check if post exists before deleting
        if (!isset($post)){
            return redirect()->route('admin.posts.index')->with('warning', 'No Content Found');
        }

        if($post->image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/img/'.$post->image);
        }

        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Content Removed');
    }
}
