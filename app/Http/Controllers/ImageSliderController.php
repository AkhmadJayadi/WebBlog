<?php

namespace App\Http\Controllers;

use App\Models\imageSlider;
use App\Http\Requests\StoreimageSliderRequest;
use App\Http\Requests\UpdateimageSliderRequest;
use Illuminate\Http\Request;

class ImageSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($id);
        return view('dashboard.slider.index',[
            'posts' => imageSlider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreimageSliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validateData = $request->validate([
            'label' => 'required',
            'keterangan' => 'required'
        ]);

        $siap = '';

        if($request->hasfile('filename'))
        {
           foreach($request->file('filename') as $image)
           {
               $name=round(microtime(true) * 1000).'-'.str_replace(' ','-',$image->getClientOriginalName());
               //$siap = $siap . $name . ';';
               $image->move(public_path().'/images/', $name);  
               $data[] = $name;  
           }
        }

        //$validateData['image'] = json_encode($data);
        //return $siap;
        
        $validateData['gambar'] = $name;
        $validateData['user-id'] = auth()->user()->id;

        //dd($validateData);

        imageSlider::create($validateData);

        return redirect('/dashboard/slider')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\imageSlider  $imageSlider
     * @return \Illuminate\Http\Response
     */
    public function show(imageSlider $imageSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\imageSlider  $imageSlider
     * @return \Illuminate\Http\Response
     */
    public function edit($id, imageSlider $imageSlider)
    {
        //$post = imageSlider::find($id);
        //dd($post);

        return view('dashboard.slider.edit', [
            'post' => imageSlider::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateimageSliderRequest  $request
     * @param  \App\Models\imageSlider  $imageSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imageSlider $imageSlider, $id)
    {
        //dd($request);
        $siap = '';

        $validateData = $request->validate([
            'label' => 'required',
            'keterangan' => 'required'
        ]);

        $siap = '';

        if($request->hasfile('filename'))
        {
           foreach($request->file('filename') as $image)
           {
               $name=round(microtime(true) * 1000).'-'.str_replace(' ','-',$image->getClientOriginalName());
               //$siap = $siap . $name . ';';
               $image->move(public_path().'/images/', $name);  
               $data[] = $name;  
           }
           $validateData['gambar'] = $name;
        }

        //$validateData['user-id'] = auth()->user()->id;
        //$validateData['excert'] = Str::limit(strip_tags($request->body), 200);
        //$validateData['gambar'] = $name;

        //dd($civill->id);

        imageSlider::where('id', $id)
            ->update($validateData);

        return redirect('/dashboard/slider')->with('success', 'New post has been added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\imageSlider  $imageSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, imageSlider $imageSlider)
    {
        //dd($id);
        imageSlider::destroy($id);

        return redirect('/dashboard/slider')->with('success', 'Post has been deleted!');
    }
}
