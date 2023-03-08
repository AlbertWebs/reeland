<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Product;

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
        $Featured = DB::table('products')->orderBy('id','DESC')->where('featured','1')->limit('4')->get();
        $Best = DB::table('products')->orderBy('id','ASC')->where('featured','1')->limit('4')->get();
        return view('front.index', compact('Featured','Best'));
    }

    public function rent_cat($cat){
        $Category = Category::where('slung',$cat)->get();
        foreach($Category as $Cat){
            $Property = DB::table('products')->where('category',$Cat->id)->where('type','rent')->get();
            // dd($Property);
            return view('front.rent', compact('Property'));
        }
    }

    public function sale_cat($cat){
        $Category = Category::where('slung',$cat)->get();
        foreach($Category as $Cat){
            $Property = DB::table('products')->where('category',$Cat->id)->where('type','sale')->get();
            // dd($Property);
            return view('front.sale', compact('Property'));
        }
    }



    public function contact()
    {
        return view('front.contact');
    }

    public function rent(){
        $Rent = DB::table('products')->where('category','rent')->limit('4')->get();
        return view('front.rent', compact('Rent'));
    }

    public function sale(){
        return view('front.sale');
    }

    public function property($slung){
        $Property = Product::where('slung',$slung)->get();
        return view('front.property', compact('Property'));
    }

    public function services(){
        $Services = \App\Models\Service::all();
        return view('front.services', compact('Services'));
    }

    public function service($slung){
        $Services = \App\Models\Service::where('slung',$slung)->get();
        return view('front.service', compact('Services'));
    }




}
