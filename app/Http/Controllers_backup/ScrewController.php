<?php

namespace App\Http\Controllers;

use App\Models\Screw;
use Illuminate\Http\Request;

class ScrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('screw',[
            "title" => "screw",
            "posts" => Screw::all()
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
     * @param  \App\Models\Screw  $screw
     * @return \Illuminate\Http\Response
     */
    public function show(Screw $screw)
    {
        //dd($slug);
        return view('screw-posts',[
            "title" => "Single Post",
            "post" => $screw
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Screw  $screw
     * @return \Illuminate\Http\Response
     */
    public function edit(Screw $screw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Screw  $screw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Screw $screw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Screw  $screw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Screw $screw)
    {
        //
    }
}
