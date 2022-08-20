@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Footer</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-10">
  {{-- <a href="/dashboard/footer/create" class="btn btn-primary mb-3">Create new post</a> --}}
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">No HP</th>
          <th scope="col">Whatsapp</th>
          <th scope="col">Email</th>
          <th scope="col">Instagram</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->nohp }}</td>
            <td>{{ $post->whatsapp }}</td>
            <td>{{ $post->email }}</td>
            <td>{{ $post->instagram }}</td>
            <td>
                {{-- <a href="/dashboard/footer/edit" class="badge bg-warning"><span data-feather="edit"></span></a> --}}
                <a href="/dashboard/footer/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>

@endsection