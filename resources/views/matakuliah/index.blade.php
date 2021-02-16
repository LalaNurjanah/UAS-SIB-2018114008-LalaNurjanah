@extends('layout.main')
@section('title', 'Laravel - SI Absensi')
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

<h1 class="display-6">Daftar Matakuliah</h1>
<hr class="my-4">
<a href="matakuliah/create" class="btn btn-primary mb-1">Tambah Matakuliah</a>

<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
<th scope="col">Id</th>
<th scope="col">Nama_matakuliah</th>
<th scope="col">SKS</th>
<th></th>

</tr>
</thead>
<tbody>
@foreach ($matakuliah as $matkul)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $matkul->id }}</td>
<td>{{ $matkul->nama_matakuliah }}</td>
<td>{{ $matkul->sks }}</td>

<td>
<a href="matakuliah/edit/{{ $matkul->sks }}"
                            class="badge badge-primary">Edit</a>
<a href="matakuliah/destroy/{{ $matkul->sks}}"
                            class="badge badge-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
