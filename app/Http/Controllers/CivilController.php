<?php

namespace App\Http\Controllers;

use App\Models\Civil;
use App\Http\Requests\StoreCivilRequest;
use App\Http\Requests\UpdateCivilRequest;

class CivilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCivilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCivilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Civil  $civil
     * @return \Illuminate\Http\Response
     */
    public function show(Civil $civil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Civil  $civil
     * @return \Illuminate\Http\Response
     */
    public function edit(Civil $civil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCivilRequest  $request
     * @param  \App\Models\Civil  $civil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCivilRequest $request, Civil $civil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Civil  $civil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Civil $civil)
    {
        //
    }
}
