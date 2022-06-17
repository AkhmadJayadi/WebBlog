<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\workshop;

class WorkshopController extends Controller
{
    public function index()
    {
        //return view('home');
        return view('workshop', [
            "title" => "Workshop",
            "posts" => workshop::all()
        ]);
    }
}
