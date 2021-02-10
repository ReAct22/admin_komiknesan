@extends('layout.v_template')

@section('title', 'Home')


@section('content')
    <h1>Ini Halaman Home</h1>
    <h4>{{ $nama_sekolah }}</h4><br>
    <h4>{{ $alamat }}</h4>
@endsection
