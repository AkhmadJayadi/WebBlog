@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
    <article id="post">
        <h2><p class="text-center">Tentang Kami</p></h2>
        <p class="text-justify">{!! $post->tentangkami !!}</p>
    </article>

    <a href="/">Back to Home</a>
@endforeach

@endsection