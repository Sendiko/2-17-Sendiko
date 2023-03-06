@extends('layouts.main')
    <link rel="stylesheet" href="styles.css">
@section('container')
    <header class="title top mb-5">
        <h1>Profile</h1>
    </header>
    <br>
    <div id="identitas-diri">
        <div id="image">
            <img src="images/{{$gambar}}" alt="{{$nama}}" width="200px">
        </div>
        <p class="mt-5">Nama Lengkap : {{$nama}} <br>
            Umur : {{$umur}} <br>
            Asal : {{$kelahiran}} <br>
            Sedang menempuh pendidikan di : {{$sekolah}} <br>
            Hobi : {{$hobi}} <br>
            Email : {{$email}}</p>
    </div>

@endsection