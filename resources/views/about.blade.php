@extends('layouts.main')
    <link rel="stylesheet" href="styles.css">
@section('container')
    <h1>Halaman About</h1>
    <h3>{{$nama}}</h3>
    <p>{{$email}}</p>
    <div id="image">
        <img src="images/{{$gambar}}" alt="{{$nama}}" width="200px">
    </div>
@endsection