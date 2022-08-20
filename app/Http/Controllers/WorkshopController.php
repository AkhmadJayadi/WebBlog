<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\workshop;
use App\Models\footer;

class WorkshopController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Workshop",
            "posts" => workshop::all(),
            "postFooter" => footer::all()
        ];
        //dd($data);
        return view('workshop', $data);
    }
}
