<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Message;
use Session;
use Redirect;

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
        $Featured = DB::table('products')->orderBy('id','DESC')->where('featured','1')->paginate('6');
        $Best = DB::table('products')->orderBy('id','ASC')->where('featured','1')->limit('9')->get();
        return view('front.index', compact('Featured','Best'));
    }

    public function search_property(Request $request)
    {
        $Property = DB::table('products')
                    ->where('name', 'LIKE', '%'.$request->keyword.'%')
                    ->where('category',$request->type)
                    ->where('location', 'LIKE', '%'.$request->location.'%')
                    ->where('price', '<', ".$request->max.")
                    ->where('price', '>', ".$request->min.")
                    ->get();
        return view('front.search-results', compact('Property'));
    }


    public function rent_cat($cat){
        $Category = Category::where('slung',$cat)->get();
        foreach($Category as $Cat){
            $Property = DB::table('products')->where('category',$Cat->id)->where('type','rent')->paginate('6');
            // dd($Property);
            return view('front.rent', compact('Property'));
        }
    }

    public function sale_cat($cat){
        $Category = Category::where('slung',$cat)->get();
        foreach($Category as $Cat){
            $Property = DB::table('products')->where('category',$Cat->id)->where('type','sale')->paginate('6');
            // dd($Property);
            return view('front.sale', compact('Property'));
        }
    }



    public function contact()
    {
        return view('front.contact');
    }

    public function rent(){
        $Property = DB::table('products')->where('type','rent')->paginate(6);
        return view('front.rent', compact('Property'));
    }

    public function sale(){
        $Property = DB::table('products')->where('type','rent')->paginate(6);
        return view('front.sale', compact('Property'));
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


    public function send_message(Request $request){
        Message::SendMail($request->name, $request->email, $request->phone, $request->message);
        Session::flash('message', "Message Has Been Sent");
        return Redirect::back();
    }


}
