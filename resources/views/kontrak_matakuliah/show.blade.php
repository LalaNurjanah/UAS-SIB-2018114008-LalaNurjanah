@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="card">
    <div class="card-body">
    <h3>mahasiswa_id :{{$km['mahasiswa_id']}}</h3>
        <h3>semester_id :{{$km['semester_id']}}</h3>
    </div>
</div>
@endsection
