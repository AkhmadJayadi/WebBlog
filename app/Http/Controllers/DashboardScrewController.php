<?php

namespace App\Http\Controllers;

use App\Models\Screw;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardScrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.screw.index',[
            'posts' => Screw::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.screw.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:screws',
            'body' => 'required',
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);

        $siap = '';

        if($request->hasfile('filename'))
        {
           foreach($request->file('filename') as $image)
           {
               $name=round(microtime(true) * 1000).'-'.str_replace(' ','-',$image->getClientOriginalName());
               $siap = $siap . $name . ';';
               $image->move(public_path().'/images/', $name);  
               $data[] = $name;  
           }
        }

        //$validateData['image'] = json_encode($data);
        //return $siap;
        $validateData['image'] = $siap;
        $validateData['user-id'] = auth()->user()->id;
        $validateData['excert'] = Str::limit(strip_tags($request->body), 200);

        Screw::create($validateData);

        return redirect('/dashboard/screw')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Screw  $screw
     * @return \Illuminate\Http\Response
     */
    public function show(Screw $screw)
    {
        return view('dashboard.screw.show', [
            'post' => $screw
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
        return view('dashboard.screw.edit', [
            'post' => $screw
        ]);
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
        $siap = '';

        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
            'image.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ];

        if($request->slug != $screw->slug){
            $rules['slug'] = 'required|unique:screws';
        }

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
        $validateData['excert'] = Str::limit(strip_tags($request->body), 200);

        Screw::where('id', $screw->id)
            ->update($validateData);

        return redirect('/dashboard/screw')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Screw  $screw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Screw $screw)
    {
        Screw::destroy($screw->id);

        return redirect('/dashboard/screw')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Screw::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);

    }
}
