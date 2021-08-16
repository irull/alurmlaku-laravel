@extends('layouts.main')

@section('container')
    <h1>Halaman Contacts</h1>
    <h3>Nama : {{ $name }}</h3>
    <p>Email : {{ $email }}</p>
    <p>No telp. :{{ $notelp }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection