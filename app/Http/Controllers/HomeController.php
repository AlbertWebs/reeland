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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function rent(){
        return view('front.rent');
    }

    public function sale(){
        return view('front.sale');
    }

    public function property(){
        return view('front.property');
    }
}
