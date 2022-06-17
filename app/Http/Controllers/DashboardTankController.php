<?php

namespace App\Http\Controllers;

use App\Models\Tank;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardTankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tank.index',[
            'posts' => Tank::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tank.create');
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
            'slug' => 'required|unique:tanks',
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

        Tank::create($validateData);

        return redirect('/dashboard/tank')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function show(Tank $tank)
    {
        //return $tank;
         return view('dashboard.tank.show', [
             'post' => $tank
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function edit(Tank $tank)
    {
        return view('dashboard.tank.edit', [
            'post' => $tank
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tank $tank)
    { //$request = data baru, //$tank = data lama di database
        $siap = '';

        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
            'image.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ];

        if($request->slug != $tank->slug){
            $rules['slug'] = 'required|unique:tanks';
        }

        $validateData = $request->validate($rules);

        //dd($request->hasfile('filename'));

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

        Tank::where('id', $tank->id)
            ->update($validateData);

        return redirect('/dashboard/tank')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tank $tank)
    {
        Tank::destroy($tank->id);

        return redirect('/dashboard/tank')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Tank::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);

    }
}
