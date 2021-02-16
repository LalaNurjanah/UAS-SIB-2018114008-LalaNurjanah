@extends('layout.main')
@section('title', 'Laravel - SI Absen')
@section('content')

<div class="card">
    <div class="card-body">
    <h3>Id :{{$smstr['id']}}</h3>
        <h3>Semester :{{$smstr['semester']}}</h3>

    </div>
</div>
@endsection
