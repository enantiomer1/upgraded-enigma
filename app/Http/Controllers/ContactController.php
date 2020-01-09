<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
    	$title = 'Contact';
        $header = 'Contact Us';
    	return view('contact.show', compact('title', 'header'));
    }

     public function send(Request $request)
    {
    	request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'subject' => ['required'],
        ]);

    	Mail::raw($request->subject, function ($message) use($request) {
    		$message->to(config('mail.from.address'), config('mail.from.name'))
    			->subject('Contact Form Message')
    			->from($request->email, $request->name);
    	});

    	return redirect()->route('contact')->with('success', 'Your email has been sent, we will respond ASAP.');
    }
}
