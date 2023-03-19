@extends('layouts.app')
@section('title', 'Sendiko | Data Contacts')
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Data Buku</h2>
                            <div>
                                <a href="{{ route('book.create') }}" class="btn btn-primary">+</a>
                                <a href="{{ route('books.export') }}" class="btn btn-info">Export</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <form action="{{ route('book.admin.search') }}" method="POST" class="d-flex flex-direction-row">
                            @csrf
                            <input type="text" name="search" class="form-control w-100 me-2"
                                value="{{ isset($query) ? $query : '' }}">
                            <button type="submit" class="btn btn-info">Search</button>
                        </form>
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40 mt-5">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Penerbit</th>
                                        <th>Cover Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($books as $index => $book) : ?>
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td><a href="{{ route('book.admin.show', $book->id) }}">{{ $book->title }}</a>
                                        </td>
                                        <td>{{ $book->writer }}</td>
                                        <td>{{ $book->publisher }}</td>
                                        <td>
                                            @if ($book->cover)
                                                <img src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->title }}"
                                                    class="img-fluid w-50">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('book.edit', $book->id) }}"><i class="fas fa-edit"></i></a>
                                            |
                                            <a href="{{ route('book.destroy', $book->id) }}"><i class="fas fa-trash"
                                                    style="color:red"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            {{ $books->links() }}
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                    href="https:/colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
@endsection
