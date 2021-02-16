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

<h1 class="display-6">Kontrak Matakuliah</h1>
<hr class="my-4">
<a href="kontrak_matakuliah/create" class="btn btn-primary mb-1">
Silahkan Melakukan Kontrak Matakuliah</a>

<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
<th scope="col">mahasiswa_id</th>
<th scope="col">semester_id</th>
<th></th>


</tr>
</thead>
<tbody>
@foreach ($kontrak_matakuliah as $km)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $km->mahasiswa_id }}</td>
<td>{{ $km->semester_id}}</td>
<td>

<a href="/kontrak_matakuliah/{{$km['mahasiswa_id']}}/edit" class="card-link btn-warning">Edit</a>
<a href="" class="badge badge-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
