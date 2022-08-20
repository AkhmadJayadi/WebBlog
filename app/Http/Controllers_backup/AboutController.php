<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "About",
            "posts" => Home::all()
        ]);
    }
}
