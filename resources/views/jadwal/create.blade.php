@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="container">
<div class="jumbotron">
<h1 class="display-6">Tambah Jadwal Mahasiswa</h1>
<hr class="my-4">
<form action="/jadwal" method="POST">

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
<label for="jadwal">Jadwal</label>
<input type="text" class="form-control" id="jadwal"
                    name="jadwal" placeholder="jadwal"
                    value="{{ old('jadwal') }}">
                    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</div>

<div class="form-group">
<label for="matakuliah_id">Matakuliah_id</label>
<input type="text" class="form-control" id="matakuliah_id"
                    name="matakuliah_id" placeholder="matakuliah_id"
                    value="{{ old('matakuliah_id') }}">

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection
