@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="container">
<div class="jumbotron">
<h1 class="display-6">Tambah Kontrak Matakuliah</h1>
<hr class="my-4">
<form action="/kontrak_matakuliah" method="POST">

@csrf

<div class="form-group">
<label for="mahasiswa_id">mahasiswa_id</label>
<input type="text" class="form-control" mahasiswa_id="mahasiswa_id"
                    name="mahasiswa_id" placeholder="mahasiswa_id"
                    value="{{ old('mahasiswa_id') }}">
                    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</div>

<div class="form-group">
<label for="semester_id">Semester_id</label>
<input type="text" class="form-control" id="semester_id"
                    name="semester_id" placeholder="semester_id"
                    value="{{ old('semester_id') }}">
                    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Tambahkan</button>
</form>
</div>
</div>
@endsection
