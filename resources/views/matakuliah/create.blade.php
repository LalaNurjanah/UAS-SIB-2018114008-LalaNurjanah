@extends('layout.main')

@section('title', 'Laravel - SI absen')

@section('content')

<div class="container">
<div class="jumbotron">
<h1 class="display-6">Tambah Daftar Matakuliah</h1>
<hr class="my-4">

<form action="/matakuliah" method="POST">
@csrf
<div class="form-group">
<label for="id">Id</label>
<input type="text" class="form-control" id="id"
                    name="id" placeholder="Id"
                    value="{{ old('id') }} ">
                    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</div>

<div class="form-group">
<label for="nama_matakuliah">Nama Matakuliah</label>
<input type="text" class="form-control" id="nama_matakuliah"
                    name="nama_matkul" placeholder="Nama_matakuliah"
                    value="">
</div>

<div class="form-group">
<label for="sks">SKS</label>
<input type="text" class="form-control" id="sks"
                    name="sks" placeholder="SKS"
                    value=" ">
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
