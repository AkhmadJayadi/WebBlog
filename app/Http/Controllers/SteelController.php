<?php

namespace App\Http\Controllers;

use App\Models\Steel;
use App\Http\Requests\StoreSteelRequest;
use App\Http\Requests\UpdateSteelRequest;

class SteelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('steel',[
            "title" => "steel",
            "posts" => Steel::all()
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
     * @param  \App\Http\Requests\StoreSteelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSteelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Steel  $steel
     * @return \Illuminate\Http\Response
     */
    public function show(Steel $steel)
    {
        //dd($slug);
        return view('steel-posts',[
            "title" => "Single Post",
            "post" => $steel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Steel  $steel
     * @return \Illuminate\Http\Response
     */
    public function edit(Steel $steel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSteelRequest  $request
     * @param  \App\Models\Steel  $steel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSteelRequest $request, Steel $steel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Steel  $steel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Steel $steel)
    {
        //
    }
}
