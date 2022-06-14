<?php

namespace App\Http\Controllers;

use App\Models\Steel;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardSteelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.steel.index',[
            'posts' => Steel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.steel.create');
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
            'slug' => 'required|unique:steels',
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

        Steel::create($validateData);

        return redirect('/dashboard/steel')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Steel  $steel
     * @return \Illuminate\Http\Response
     */
    public function show(Steel $steel)
    {
        return view('dashboard.steel.show', [
            'post' => $steel
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
        return view('dashboard.steel.edit', [
            'post' => $steel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Steel  $steel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Steel $steel)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required'
        ];

        if($request->slug != $steel->slug){
            $rules['slug'] = 'required|unique:steels';
        }

        $validateData = $request->validate($rules);

        //$validateData['user-id'] = auth()->user()->id;
        $validateData['excert'] = Str::limit(strip_tags($request->body), 200);

        steel::where('id', $steel->id)
            ->update($validateData);

        return redirect('/dashboard/steel')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Steel  $steel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Steel $steel)
    {
        Steel::destroy($steel->id);

        return redirect('/dashboard/steel')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Steel::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);

    }
}
