<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.footer.index',[
            'posts' => Footer::all()
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
     * @param  \App\Http\Requests\StorefooterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(footer $footer)
    {
        $results = footer::all();

        return view('dashboard.footer.edit', [
            'post' => $results
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefooterRequest  $request
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, footer $footer)
    {
        //dd($request);
        $siap = '';

        $rules = [
            'nohp' => 'required',
            'whatsapp' => 'required',
            'email' => 'required',
            'instagram' => 'required'
        ];

        $validateData = $request->validate($rules);

        footer::where('id', '1')
            ->update($validateData);

        return redirect('/dashboard/footer')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(footer $footer)
    {
        //
    }
}
