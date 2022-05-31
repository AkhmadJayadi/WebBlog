@extends('dashboard.layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <h5>{{ $post->excert }}</h5>
    <p>{{ $post->body }}</p>
</article>

@endsection