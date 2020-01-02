<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Speaker;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpeakerController extends Controller
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
        $title = 'Speaker Tape Management';
        $header = 'Speaker Tape Management';
        $speakers = Speaker::orderBy('created_at','desc')->paginate(10);
        return view('admin.speakers.index', compact('title', 'header', 'speakers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create Speaker Tape';
        $header = 'Create Speaker Tape';
        return view('admin.speakers.create', compact('title', 'header'));
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
            'speaker_name' => ['required', 'min:3', 'max:155'],
            'description' => ['required', 'min:3', 'max:191'],
            'file' => ['required', 'file', 'max:9999'],
        ]);

        // Handle File Upload
        if($request->hasFile('file')){
            // Get filename with the extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('file')->storeAs('public/speaker', $fileNameToStore);
        } else {
            $fileNameToStore = 'nofile.mp3';
        }

        // Create Post
        $speaker = new Speaker;
        $speaker->speaker_name = $request->speaker_name;
        $speaker->description = $request->description;
        $speaker->file = $fileNameToStore;
        $speaker->save();

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker Tape has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Speaker $speaker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Speaker Tape';
        $header = 'Edit Speaker Tape';
        $speaker = Speaker::where('id',$id)->first();
        return view('admin.speakers.edit', compact('title', 'header', 'speaker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'speaker_name' => ['required', 'min:3', 'max:155'],
            'description' => ['required', 'min:3', 'max:191'],
        ]);

        $speaker = Speaker::where('id',$id)->first();
        // Handle File Upload
        if($request->hasFile('file')){
            // Get filename with the extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('file')->storeAs('public/speaker', $fileNameToStore);
            // Delete old file if exists
            Storage::delete('public/speaker/'.$speaker->file);
        }

        $speaker->speaker_name = $request->speaker_name;
        $speaker->description = $request->description;
        if($request->hasFile('file')){
            $speaker->file = $fileNameToStore;
        }
        $speaker->save();

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker Tape has been updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speaker = Speaker::where('id',$id)->first();

        //Check if post exists before deleting
        if (!isset($speaker)){
            return redirect()->route('admin.speakers.index')->with('warning', 'No Speaker Tape Found');
        }

        if($speaker->file != 'nofile.mp3'){
            // Delete Image
            Storage::delete('public/speaker/'.$speaker->file);
        }

        $speaker->delete();
        return redirect()->route('admin.speakers.index')->with('success', 'Speaker Tape Removed');
    }
}
