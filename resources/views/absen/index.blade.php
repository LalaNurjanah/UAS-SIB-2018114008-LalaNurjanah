@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<!DOCTYPE html>
<html>
 <head>
  <title>SI ABSEN</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
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

<h1 class="display-6">Data Absensi</h1>
<hr class="my-4">
<a href="absen/create" class="btn btn-primary mb-1">
Silahkan Absen</a>

<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
<th scope="col">id</th>
<th scope="col">Waktu_Absen</th>
<th scope="col">Mahasiswa_id</th>
<th scope="col">Matakuliah_id</th>
<th scope="col">Keterangan</th>
<th></th>


</tr>
</thead>
<tbody>
@foreach ($absen as $abs)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $abs->id }}</td>
<td>{{ $abs->waktu_absen }}</td>
<td>{{ $abs->mahasiswa_id }}</td>
<td>{{ $abs->matakuliah_id }}</td>
<td>{{ $abs->keterangan }}</td>
<td>

<a href="/absen/{{$abs['keterangan']}}/edit" class="card-link btn-warning">Edit</a>
<a href="" class="badge badge-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
