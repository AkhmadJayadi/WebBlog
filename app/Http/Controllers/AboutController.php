<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\footer;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "About",
            "posts" => Home::all(),
            "postFooter" => footer::all()
        ];
        //dd($data);
        return view('about', $data);
    }
}
