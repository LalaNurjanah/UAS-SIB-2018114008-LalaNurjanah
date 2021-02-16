@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="container">
<div class="jumbotron">
<h1 class="display-6">SILAHKAN MENGISI ABSENSI</h1>
<hr class="my-4">
<form action="/absen" method="POST">

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
<label for="waktu_absen">Waktu Absen</label>
<input type="time" class="form-control" id="waktu_absen"
                    name="waktu_absen" placeholder="waktu_absen"
                    value="{{ old('waktu_absen') }}">
                    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</div>

<div class="form-group">
<label for="id">Mahasiswa_id</label>
<select class="form-control" id="id"
                    name="id">
<option value="2018114008">2018114008</option>
<option value="2018114003">2018114003</option>
<option value="2018114009">2018114009</option>
<option value="2018114030">2018114030</option>
<option value="2018114012">2018114012</option>
<option value="2018114023">2018114023</option>
<option value="2018114019">2018114019</option>
<option value="2018114024">2018114024</option>
<option value="2018114036">2018114036</option>
<option value="2018114026">2018114026</option>
<option value="2018114031">2018114031</option>
<option value="2018114032">2018114032</option>
<option value="2018114021">2018114021</option>
<option value="2018114037">2018114037</option>
<option value="2018114033">2018114033</option>
<option value="2018114014">2018114014</option>
<option value="2018114016">2018114016</option>
<option value="2018114029">2018114029</option>
</select>
</div>

<div class="form-group">
<label for="matakuliah_id">Matakuliah Id</label>
<select class="form-control" id="matakuliah_id"
                    name="matakuliah_id">
<option value="matakuliah_id">SIB053005</option>
<option value="matakuliah_id">SI052020</option>
<option value="matakuliah_id">TIX052001</option>
<option value="matakuliah_id">SIB053007</option>
<option value="matakuliah_id">DKVX052001</option>
<option value="matakuliah_id">SI054024</option>
<option value="matakuliah_id">SI054022</option>
<option value="matakuliah_id">SI052021</option>
</select>
</div>

<div class="form-group">
<label for="keterangan">Keterangan</label>
<select class="form-control" id="keterangan"
                    name="keterangan">
<option value="Hadir">Hadir</option>
<option value="Sakit">Tidak Hadir</option>
</select>
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
</form>
</div>
</div>

