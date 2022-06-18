@extends('layouts.main')

@section('container')

@foreach ($posts as $post)

    <article>
        <h2><p class="text-center">Our workshop x Office</p></h2>
        <p>{!! $post->body !!}</p>
    
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach (explode(';',$post->image) as $row)
                @if ($loop->last) @else
                        <div class="col">
                          <div class="card-image">
                            <img src="{{ asset('images') . '/' . $row }}" class="card-img" alt="...">
                          </div>
                        </div>
                @endif
            @endforeach
        </div>
    
    </article>
@endforeach

@endsection