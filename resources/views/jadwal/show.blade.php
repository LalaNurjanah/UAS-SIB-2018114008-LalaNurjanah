@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="card">
    <div class="card-body">
    <h3>Id :{{$jdl['id']}}</h3>
    <h3>Jadwal :{{$jdl['jdl']}}</h3>
    <h3>matakuliah_id:{{$jdl['matakuliah_id']}}</h3>

    </div>
</div>
@endsection
