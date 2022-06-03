@extends('dashboard.layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>{!! $post->body !!}</p>

    <ol>
        @foreach (explode(';',$post->image) as $row)
            @if ($loop->last)
                <li>This is the last iteration.</li>
            @else
                <li><img src="{{ asset('images') . '/' . $row }}" class="img-fluid mt-3"></li>
            @endif
        @endforeach
    </ol>

</article>

@endsection