<?php

namespace App\Http\Controllers;

use App\Models\Heavy;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardHeavyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.heavy.index',[
            'posts' => Heavy::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.heavy.create');
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
            'slug' => 'required|unique:heavies',
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

        Heavy::create($validateData);

        return redirect('/dashboard/heavy')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heavy  $heavy
     * @return \Illuminate\Http\Response
     */
    public function show(Heavy $heavy)
    {
        return view('dashboard.heavy.show', [
            'post' => $heavy
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Heavy  $heavy
     * @return \Illuminate\Http\Response
     */
    public function edit(Heavy $heavy)
    {
        return view('dashboard.heavy.edit', [
            'post' => $heavy
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heavy  $heavy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heavy $heavy)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required'
        ];

        if($request->slug != $heavy->slug){
            $rules['slug'] = 'required|unique:heavies';
        }

        $validateData = $request->validate($rules);

        //$validateData['user-id'] = auth()->user()->id;
        $validateData['excert'] = Str::limit(strip_tags($request->body), 200);

        Heavy::where('id', $heavy->id)
            ->update($validateData);

        return redirect('/dashboard/heavy')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heavy  $heavy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heavy $heavy)
    {
        Tank::destroy($heavy->id);

        return redirect('/dashboard/heavy')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Heavy::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);

    }
}
