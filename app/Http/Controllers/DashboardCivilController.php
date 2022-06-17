<?php

namespace App\Http\Controllers;

use App\Models\Civill;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardCivilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.civil.index',[
            'posts' => Civill::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.civil.create');
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

        Civill::create($validateData);

        return redirect('/dashboard/civil')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Civill  $civill
     * @return \Illuminate\Http\Response
     */

    public function show(Civill $civill, $slug)
    {
        $results = Civill::where('slug', $slug)->get();

         return view('dashboard.civil.show', [
             'post' => $results
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Civill  $civill
     * @return \Illuminate\Http\Response
     */
    public function edit(Civill $civill, $slug)
    {
        $results = Civill::where('slug', $slug)->get();

        return view('dashboard.civil.edit', [
            'post' => $results
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Civill  $civill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Civill $civill, $id)
    {
        $siap = '';

        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
            'image.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ];

        if($request->slug != $civill->slug){
            $rules['slug'] = 'required|unique:heavies';
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

        //dd($civill->id);

        Civill::where('id', $id)
            ->update($validateData);

        return redirect('/dashboard/civil')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Civill  $civill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Civill $civill, $slug)
    {
        $result = Civill::where('slug', $slug)->get(['id']);
        Civill::destroy($result);

        return redirect('/dashboard/civil')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Civill::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
