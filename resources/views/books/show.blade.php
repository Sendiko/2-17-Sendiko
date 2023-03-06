@extends('layouts.main')
<link rel="stylesheet" href="styles.css">
@section('container')
<h1 class="text-center">{{ $books->title }}</h1>
<div class="row mt-lg-5">
    <div class="col-md-8 offset-md-2">
        <img src="{{ asset('storage/'.$books->cover) }}" class="img-fluid" style="width: 32rem;">
        <p class="mt-lg-5"><strong>Writer: </strong> {{ $books->writer }}</p>
        <p><strong>Publisher: </strong> {{ $books->publisher }}</p>
        <p><strong>Release Year: </strong> {{ $books->release }}</p>
        <hr>
        <p>{{ $books->synopsis }}</p>
    </div>
</div>
@endsection