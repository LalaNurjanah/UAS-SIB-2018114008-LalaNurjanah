@extends('layouts.app')

@section('title', 'Laravel - SI Absensi')

@section('content')
<form action="/semester/{{ $smstr['semester'] }}" method="post">
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
    <label for="exampleInputPassword1">Semester</label>
    <input type="text" class="form-control" name="semester" id="exampleInputPassword1" value="{{ old('semester') ? old('semester') : $maha['semester'] }}">
    @error('semester')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>


<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection
