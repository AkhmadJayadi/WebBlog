<?php

namespace App\Http\Controllers;

use App\Models\Civill;
use App\Models\footer;
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
        $data = [
            "title" => "civil",
            "posts" => Civill::all(),
            "postFooter" => footer::all()
        ];
        //dd($data);
        return view('civil', $data);
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
        $data = [
            "title" => "Single Post",
            "post" => $civill,
            "postFooter" => footer::all()
        ];
        //dd($data);
        return view('civil-posts', $data);
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
