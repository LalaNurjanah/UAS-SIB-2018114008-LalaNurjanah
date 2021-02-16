@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="container">
<div class="jumbotron">
@if(session('msg'))
<div class="alert alert-success alert-dismissible fade show mt-2"
                role="alert">
{{session('msg')}}
<button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<h1 class="display-6">Jadwal Mahasiswa</h1>
<hr class="my-4">
<a href="jadwal/create" class="btn btn-primary mb-1">
Jadwal Mahasiswa</a>

<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
<th scope="col">Id</th>
<th scope="col">JadwaL</th>
<th scope="col">Matakuliah_id</th>
<th></th>


</tr>
</thead>
<tbody>
@foreach ($jadwal as $jdl)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $jdl->id }}</td>
<td>{{ $jdl->jadwal }}</td>
<td>{{ $jdl->matakuliah_id }}</td>
<td>

<a href="/jadwal/{{$jdl['jadwal']}}/edit" class="card-link btn-warning">Edit</a>
<a href="" class="badge badge-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
