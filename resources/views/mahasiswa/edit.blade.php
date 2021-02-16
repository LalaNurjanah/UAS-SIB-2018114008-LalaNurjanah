@extends('layouts.app')

@section('title', 'Laravel - SI Absensi')

@section('content')
<form action="/mahasiswa/{{ $maha['id'] }}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="id" aria-describedby="emailHelp" value="{{ old('Id') ? old('Id') : $maha['Id'] }}">
    @error('id')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Nama Mahasiswa</label>
    <input type="text" class="form-control" name="nama_mahasiswa" id="exampleInputPassword1" value="{{ old('nama_mahasiswa') ? old('nama_mahasiswa') : $maha['nama_mahasiswa'] }}">
    @error('nama_mahasiswa')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>

  <div class="form-group">
<label for="alamat">Alamat</label>
<input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat') ? old('alamat') : $maha['alamat'] }}">

@error('alamat')
    <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

<div class="form-group">
<label for="no_tlp">No_tlp</label>
<input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1" value="{{ old('no_tlp') ? old('no_tlp') : $maha['no_tlp'] }}">
@error('no_tlp')
<div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>

<div class="form-group">
<label for="email">Email</label>
<input type="text" class="form-control" name="email" id="exampleInputPassword1" value="{{ old('email') ? old('email') : $maha['email'] }}">

@error('email')
<div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection
