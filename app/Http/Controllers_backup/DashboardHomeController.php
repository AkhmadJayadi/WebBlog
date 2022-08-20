<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.home.index',[
            'post' => Home::all()
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
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        return view('dashboard.home.edit', [
            'post' => $home
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siap = '';
        //return $request->labelimage1;
        $rules = [
            'labelimage1' => 'required',
            'labelimage2' => 'required',
            'labelimage3' => 'required',
            'ketimage1' => 'required',
            'ketimage2' => 'required',
            'ketimage3' => 'required',
            'tentangkami' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'OS_steel' => 'required',
            'OS_civil' => 'required',
            'OS_tank' => 'required',
            'OS_srew' => 'required',
            'OS_heavy' => 'required',
            'image.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ];

        $validateData = $request->validate($rules);

        //dd($request);

        if($request->file('image1')){
            $name=round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('image1')->getClientOriginalName());
            $request->file('image1')->move(public_path().'/images/', $name);

            $validateData['image1'] = $name;
        }
        if($request->file('image2')){
            $name=round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('image2')->getClientOriginalName());
            $request->file('image2')->move(public_path().'/images/', $name);

            $validateData['image2'] = $name;
        }
        if($request->file('image3')){
            $name=round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('image3')->getClientOriginalName());
            $request->file('image3')->move(public_path().'/images/', $name);

            $validateData['image3'] = $name;
        }

        //$visii = '<p class="text-white-75 mb-4">' . $request->visi . '</p>';
        //$validateData['visi'] = $visii;
        //dd($visii);

        Home::where('id', $id)
            ->update($validateData);

        return redirect('/dashboard/home')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
