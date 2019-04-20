<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(\Auth::user()->role == 'company'){
            $jobs = \App\Job::where('company_id', \Auth::user()->id)->get();

            return view('home', compact('jobs'));
        } else {
            $jobs = \App\Application::where('applicant_id', \Auth::user()->id)->get();

            return view('home', compact('jobs'));
        }
    }
}
