<?php

namespace App\Http\Controllers;

use App\Models\Heavy;
use App\Models\footer;
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
        $data = [
            "title" => "Heavy",
            "posts" => Heavy::all(),
            "postFooter" => footer::all()
        ];
        //dd($data);
        return view('heavy', $data);
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
        $data = [
            "title" => "Single Post",
            "post" => $heavy,
            "postFooter" => footer::all()
        ];
        //dd($data);
        return view('heavy-posts', $data);
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
