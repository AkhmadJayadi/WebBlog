<?php

namespace App\Http\Controllers;

use App\Models\Heavy;
use Illuminate\Http\Request;

class HeavyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('heavy',[
            "title" => "screw",
            "posts" => Heavy::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heavy  $heavy
     * @return \Illuminate\Http\Response
     */
    public function show(Heavy $heavy)
    {
        //dd($slug);
        return view('heavy-posts',[
            "title" => "Single Post",
            "post" => $heavy
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Heavy  $heavy
     * @return \Illuminate\Http\Response
     */
    public function edit(Heavy $heavy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heavy  $heavy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heavy $heavy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heavy  $heavy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heavy $heavy)
    {
        //
    }
}
