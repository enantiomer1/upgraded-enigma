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

    public function sandy_sml()
    {
        $title = 'Sandy B';
        $header = 'Sandy Beach - Saturday Morning Live';
        $speakers = Speaker::where('description', 'like', 'Saturday%')->orderBy('created_at', 'asc')->paginate(20);
        return view('pages.speakers.speakers_sort', compact('title', 'header', 'speakers'));
    }

    public function sandy_best()
    {
        $title = 'Sandy B';
        $header = 'Sandy Beach - Best Of';
        $speakers = Speaker::where('tag', 'Sandy Best')->orderBy('created_at', 'asc')->paginate(20);
        return view('pages.speakers.speakers_sort', compact('title', 'header', 'speakers'));
    }

    public function clarence()
    {
        $title = 'Clarence Snyder';
        $header = 'Clarence Snyder';
        $speakers = Speaker::where('speaker_name', 'Clarence Snyder')->orderBy('created_at', 'asc')->paginate(20);
        return view('pages.speakers.speakers_sort', compact('title', 'header', 'speakers'));
    }

    public function joe_charlie()
    {
        $title = 'Joe and Charlie';
        $header = 'Joe and Charlie Big Book Study';
        $speakers = Speaker::where('tag', 'Joe and Charlie')->orderBy('created_at', 'asc')->paginate(20);
        return view('pages.speakers.speakers_sort', compact('title', 'header', 'speakers'));
    }

    public function funny()
    {
        $title = 'Funny';
        $header = 'Funny Speaker Tapes';
        $speakers = Speaker::where('tag', 'funny')->orderBy('created_at', 'asc')->paginate(20);
        return view('pages.speakers.speakers_sort', compact('title', 'header', 'speakers'));
    }

    public function top50()
    {
        $title = 'Top 50';
        $header = 'Top 50 Speaker Tapes';
        $speakers = Speaker::where('tag', 'top50')->orderBy('created_at', 'asc')->paginate(25);
        return view('pages.speakers.speakers_sort', compact('title', 'header', 'speakers'));
    }
}
