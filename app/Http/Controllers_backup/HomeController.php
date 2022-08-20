<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\footer;
use App\Models\imageSlider;

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
        //return view('home');
        $data = [
            "title" => "Home",
            "posts" => Home::all(),
            "postFooter" => footer::all(),
            "Slider" => imageSlider::all()
        ];
        //dd($data);
        return view('home', $data);
    }
}
