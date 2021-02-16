@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="card">
    <div class="card-body">
    <h3>Id :{{$matkul['id']}}</h3>
        <h3>Nama_matakuliah :{{$matkul['nama_matakuliah']}}</h3>
        <h3>sks :{{$matkul['sks']}}</h3>

    </div>
</div>
@endsection
