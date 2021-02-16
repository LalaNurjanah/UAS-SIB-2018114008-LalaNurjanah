@extends('layouts.app')

@section('title', 'Laravel - SI Absensi')

@section('content')
<form action="/absen/{{ $absen['keterangan'] }}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="Id" aria-describedby="emailHelp" value="{{ old('Id') ? old('Id') : $abse['Id'] }}">
    @error('Id')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Waktu Absen</label>
    <input type="time" class="form-control" name="waktu_absen" id="exampleInputPassword1" value="{{ old('waktu_absen') ? old('waktu_absen') : $abse['waktu_absen'] }}">
    @error('waktu_absen')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>

  <div class="form-group">
<label for="mahasiswa_id">Mahasiswa Id</label>
<input type="mahasiswa_id class="form-control" id="mahasiswa_id"
                    name="mahasiswa_id" aria-describedby="mahasiswa_id"
                    placeholder="mahasiswa_id" value="{{ old('mahasiswa_id') }}">
                    @error('waktu_absen')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</div>

<div class="form-group">
<label for="matakuliah_id">Matakuliah Id</label>
<input type="matakuliah_id" class="form-control" id="matakuliah_id"
                    name="matakuliah_id" aria-describedby="matakuliah_id"
                    placeholder="matakuliah_id" value="{{ old('matakuliah_id') }}">
                    @error('waktu_absen')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</div>

  <div class="form-group">
<label for="keterangan">Keterangan</label>
<select class="form-control" id="keterangan"
                    name="keterangan">
<option value="hadir">Hadir</option>
<option value="izin">Tidak Hadir</option>
</select>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection
