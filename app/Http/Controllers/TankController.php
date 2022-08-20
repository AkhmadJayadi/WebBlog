<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Tank;
use App\Models\footer;

class TankController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Tank",
            "posts" => Tank::all(),
            "postFooter" => footer::all()
        ];
        //dd($data);
        return view('tanks', $data);
    }

    public function show(Tank $tank)
    {
        $data = [
            "title" => "Single Post",
            "post" => $tank,
            "postFooter" => footer::all()
        ];
        //dd($data);
        return view('tanks-posts', $data);
    }
}
