<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'can:isAdmin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $title = 'Dashboard';
        $header = 'Dashboard';
        return view('admin.dashboard', compact('title', 'header'));
    }
}
