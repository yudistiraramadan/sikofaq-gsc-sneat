@extends('layouts.main')
@section('content')
    @if (auth()->user()->role_id=='1')
    <h5>Selamat Datang Admin</h5>
    @endif
    @if (auth()->user()->role_id=='2')
    <h5>Selamat Datang Petugas</h5>
    @endif
    @if (auth()->user()->role_id=='3')
    <h5>Selamat Datang Bendahara</h5>
    @endif
@endsection
