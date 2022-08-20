<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'login',
            'active' => 'login',
            'postFooter' => footer::all()
        ];
        //dd($data);
        return view('login.index', $data);
    }

    public function authenticate(Request $request)
    {        //pw koko = 111
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }else{
            //Session::flash('error', 'Email atau Password Salah');
            return back()->with('LoginError','Login failed!');
        }
        
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
