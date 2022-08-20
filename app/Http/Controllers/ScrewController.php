<?php

namespace App\Http\Controllers;

use App\Models\Screw;
use App\Models\footer;
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
        $data = [
            "title" => "Screw",
            "posts" => Screw::all(),
            "postFooter" => footer::all()
        ];
        //dd($data);
        return view('screw', $data);
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
        $data = [
            "title" => "Single Post",
            "post" => $screw,
            "postFooter" => footer::all()
        ];
        //dd($data);
        return view('screw-posts', $data);
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
