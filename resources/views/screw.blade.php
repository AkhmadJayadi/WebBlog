@extends('layouts.main')

@section('container')

<div class="row p-3" id="post">
    @foreach ($posts as $post)
    <article class="mb-1">
                <div class="col-mb-1">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="card-text">{{ $post->excert }}</p>
                      <a href="/screw/{{ $post->slug }}#post" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </div>
    </article>
    @endforeach
</div>

@endsection

