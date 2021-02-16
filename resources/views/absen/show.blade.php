@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="card">
    <div class="card-body">
    <h3>Id :{{$abs['id']}}</h3>
        <h3>waktu_absen :{{$abs['waktu_absen']}}</h3>
        <h3>mahasiswa_id :{{$abs['mahasiswa_id']}}</h3>
        <h3>matakuliah_id :{{$abs['matakuliah_id']}}</h3>
        <h3>keterangan :{{$abs['keterangan']}}</h3>
    </div>
</div>
@endsection
