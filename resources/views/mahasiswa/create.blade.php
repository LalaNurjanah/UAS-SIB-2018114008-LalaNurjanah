@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="container">
<div class="jumbotron">
<h1 class="display-6">Tambah Data Mahasiswa</h1>
<hr class="my-4">
<form action="/mahasiswa" method="POST">

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
<label for="nama_mahasiswa">Nama Mahasiswa</label>
<input type="text" class="form-control" id="nama_mahasiswa"
                    name="nama_mahasiswa" placeholder="nama_mahasiswa"
                    value="{{ old('nama_mahasiswa') }}">
                    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</div>

<div class="form-group">
<label for="alamat">Alamat</label>
<input type="text" class="form-control" id="alamat"
                    name="alamat" placeholder="alamat"
                    value="{{ old('alamat') }}">

</div>
<div class="form-group">
<label for="no_tlp">No_tlp</label>
<input type="number" class="form-control" id="no_tlp"
                    name="no_tlp" placeholder="no_tlp"
                    value="{{ old('no_tlp') }}">
                    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</div>

<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email"
                    name="email" aria-describedby="email"
                    placeholder="Enter email" value="{{ old('email') }}">
                    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection
