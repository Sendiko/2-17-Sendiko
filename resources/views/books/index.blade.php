@extends('layouts.main')
<link rel="stylesheet" href="styles.css">
@section('container')
<form action="{{ route('book.search') }}" method="POST" class="d-flex flex-direction-row">
    @csrf
    <input type="text" name="search" class="form-control w-100 me-2" value="{{isset($query) ? $query : ''}}">
    <button type="submit" class="btn btn-info">Search</button>
</form>
<div class="table-responsive mt-lg-5">
    <table class="table mt-lg-5">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Cover Image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $index => $book) : ?>
                <tr>
                    <td>{{ $index + 1}}</td>
                    <td><a href="{{route('book.show', $book -> id )}}">{{ $book -> title}}</a></td>
                    <td>{{ $book -> writer}}</td>
                    <td>{{ $book -> publisher}}</td>
                    <td>
                        @if($book->cover)
                        <img src="{{ asset('storage/'.$book->cover) }}" alt="{{$book->title}}" style="max-width: 16rem">
                        @else
                        No Image
                        @endif
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
@endsection