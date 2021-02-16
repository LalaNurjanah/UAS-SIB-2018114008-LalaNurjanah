@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="container">
<div class="jumbotron">
<h1 class="display-6">Tambah Data Semester Mahasiswa</h1>
<hr class="my-4">
<form action="/semester" method="POST">

@csrf

<div class="form-group">
<label for="id">Id</label>
<input type="text" class="form-control" id="id"
                    name="id" placeholder="id"
                    value="{{ old('id') }}">
                    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</div>

<div class="form-group">
<label for="semester">Semester</label>
<input type="text" class="form-control" id="semester"
                    name="semester" placeholder="semester"
                    value="{{ old('semester') }}">
                    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection
