@extends('layouts.app')

@section('title', 'Laravel - SI Absensi')

@section('content')
<form action="/jadwal/{{ $jdl['jadwal'] }}" method="post">
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
    <label for="exampleInputPassword1">Jadwal</label>
    <input type="text" class="form-control" name="jadwal" id="exampleInputPassword1" value="{{ old('jadwal') ? old('jadwal') : $maha['jadwal'] }}">
    @error('jadwal')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>

  <div class="form-group">
<label for="matakuliah_id">matakuliah_id</label>
<input type="text" class="form-control" name="matakuliah_id" id="exampleInputPassword1" value="{{ old('matakuliah_id') ? old('matakuliah_id') : $maha['matakuliah_id'] }}">

@error('matakuliah_id')
    <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection
