@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="card">
    <div class="card-body">
    <h3>Id :{{$maha['id']}}</h3>
        <h3>Nama_mahasiswa :{{$maha['nama_mahasiswa']}}</h3>
      
        <h3>No_Tlp :{{$maha['no_tlp']}}</h3>
        <h3>Email :{{$maha['email']}}</h3>
    </div>
</div>
@endsection