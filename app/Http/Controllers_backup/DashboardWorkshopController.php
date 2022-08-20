<?php

namespace App\Http\Controllers;

use App\Models\workshop;
use Illuminate\Http\Request;

class DashboardWorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.workshop.index',[
            'post' => workshop::all()
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
     * @param  \App\Models\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(workshop $workshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit(workshop $workshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, workshop $workshop)
    {
        //dd($request);

        $siap = '';
        
        $rules = [
            'body' => 'required',
            'image.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ];


        $validateData = $request->validate($rules);

        if($request->hasfile('filename'))
        {
           foreach($request->file('filename') as $image)
           {
               $name=round(microtime(true) * 1000).'-'.str_replace(' ','-',$image->getClientOriginalName());
               $siap = $siap . $name . ';';
               $image->move(public_path().'/images/', $name);  
               $data[] = $name;  
           }
           $validateData['image'] = $siap;
        }

        //$validateData['user-id'] = auth()->user()->id;
        //$validateData['excert'] = Str::limit(strip_tags($request->body), 200);

        workshop::where('id', $workshop->id)
            ->update($validateData);

        return redirect('/dashboard/workshop')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(workshop $workshop)
    {
        //
    }
}
