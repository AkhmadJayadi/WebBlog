@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>
           <a href="/tanks/{{ $post["id"] }}"> {{ $post["title"] }} </a>
        </h2>
        <h5>{{ $post["excert"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
    @endforeach

@endsection

