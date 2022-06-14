<?php

namespace App\Http\Controllers;

use App\Models\Civill;
use Illuminate\Http\Request;

class CivillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('civil',[
            "title" => "civil",
            "posts" => Civill::all()
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
     * @param  \App\Models\Civill  $civill
     * @return \Illuminate\Http\Response
     */
    public function show(Civill $civill)
    {
        //dd($slug);
        return view('steel-posts',[
            "title" => "Single Post",
            "post" => $civill
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Civill  $civill
     * @return \Illuminate\Http\Response
     */
    public function edit(Civill $civill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Civill  $civill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Civill $civill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Civill  $civill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Civill $civill)
    {
        //
    }
}
