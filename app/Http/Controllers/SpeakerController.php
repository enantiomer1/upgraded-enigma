<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speaker;

class SpeakerController extends Controller
{
    public function speakers()
    {
        $title = 'AA Speakers';
        $header = 'AA Speakers';
        return view('pages.speakers.speakers', compact('title', 'header'));
    }

    public function index()
    {
        $title = 'AA Speakers';
        $header = 'AA Speakers';
        $speakers = Speaker::orderBy('created_at','asc')->paginate(25);
        return view('pages.speakers.speakers_sort', compact('title', 'header', 'speakers'));
    }

    public function sandyb()
    {
        $title = 'AA Speakers';
        $header = 'AA Speakers';
        $speakers = Speaker::where('speaker_name', 'Sandy Beach')->orderBy('created_at', 'asc')->paginate(10);
        return view('pages.speakers.speakers_sort', compact('title', 'header', 'speakers'));
    }
}
