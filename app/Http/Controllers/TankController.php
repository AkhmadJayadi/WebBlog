<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Tank;

class TankController extends Controller
{
    public function index()
    {
        return view('tanks',[
            "title" => "tanks",
            "posts" => Tank::all()
        ]);
    }

    public function show($slug)
    {
        return view('tanks-posts',[
            "title" => "Single Post",
            "post" => Tank::find($slug)
        ]);
    }
}
