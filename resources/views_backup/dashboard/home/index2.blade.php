@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My home</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-10">
  <a href="/dashboard/home/create" class="btn btn-primary mb-3">Create new post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">image1</th>
          <th scope="col">image2</th>
          <th scope="col">image3</th>
          <th scope="col">labelimage1</th>
          <th scope="col">labelimage2</th>
          <th scope="col">labelimage3</th>
          <th scope="col">ketimage1</th>
          <th scope="col">ketimage2</th>
          <th scope="col">ketimage3</th>
          <th scope="col">tentangkami</th>
          <th scope="col">visi</th>
          <th scope="col">misi</th>
          <th scope="col">OS_steel</th>
          <th scope="col">OS_civil</th>
          <th scope="col">OS_tank</th>
          <th scope="col">OS_srew</th>
          <th scope="col">OS_heavy</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)
          <tr>
            <td><a href="/dashboard/home/{{ $post->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              {{ $post->image1 }}</td>
            <td>{{ $post->image2 }}</td>
            <td>{{ $post->image3 }}</td>
            <td>{{ $post->labelimage1 }}</td>
            <td>{{ $post->labelimage2 }}</td>
            <td>{{ $post->labelimage3 }}</td>
            <td>{{ $post->ketimage1 }}</td>
            <td>{{ $post->ketimage2 }}</td>
            <td>{{ $post->ketimage3 }}</td>
            <td>{{ $post->tentangkami }}</td>
            <td>{{ $post->visi }}</td>
            <td>{{ $post->misi }}</td>
            <td>{{ $post->OS_steel }}</td>
            <td>{{ $post->OS_civil }}</td>
            <td>{{ $post->OS_tank }}</td>
            <td>{{ $post->OS_srew }}</td>
            <td>{{ $post->OS_heavy }}</td>
            <td>
                <a href="/dashboard/home/{{ $post->id }}edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>

@endsection