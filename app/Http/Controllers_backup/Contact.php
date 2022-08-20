<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class Contact extends Controller
{
    public function sendwa(Request $request)
    {
        $url = "https://wa.me/62" .$request->hohp. "?text= Perkenalkan, saya " .$request->name. " PESAN : " .$request->message;//str_replace(' ', '%20', request('txt')) . str_replace(' ', '%20', request('check'));
        return Redirect::away($url);
    }

    function showContactForm(){
        return view('contact');
    }
    
}
