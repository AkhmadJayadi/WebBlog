@extends('layouts.main')

@section('container')

<div class="row p-3" id="post">
    @foreach ($posts as $post)
    <article class="mb-1">
                <div class="col-mb-1">
                  <div class="card border-warning">
                    <div class="row g-0">
                      <div class="col-md-4">
                        @foreach (explode(';',$post->image) as $row)
                          <img src="{{ asset('images') . '/' . $row }}" class="card-img" alt="...">
                          @break
                        @endforeach
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <p class="card-text">{{ $post->excert }}</p>
                          <a href="/steel/{{ $post->slug }}#post" class="btn warnaMerah">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    </article>
    @endforeach
</div>

@endsection

