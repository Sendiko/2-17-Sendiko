@extends('layouts.app')
@section('title', 'Sendiko | Data Contacts')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Form Edit Data Buku
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('book.update', $book -> id)}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="nf-email" class=" form-control-label">Judul: </label>
                                    <input type="text" name="title" class="form-control" value="{{$book->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="nf-email" class=" form-control-label">Penulis: </label>
                                    <input type="text" name="writer" class="form-control" value="{{$book->writer}}">
                                </div>
                                <div class="form-group">
                                    <label for="nf-email" class=" form-control-label">Penerbit: </label>
                                    <input type="text" name="publisher" class="form-control" value="{{$book->publisher}}">
                                </div>
                                <div class="form-group">
                                    <label for="input-year">Tahun Rilis: </label>
                                    <input type="number" class="form-control" id="input-year" name="release" placeholder="Enter a year" value="{{$book->release}}">
                                </div>
                                <div class="form-group">
                                    <label for="cover_image">Cover Image</label>
                                    <input type="file" class="form-control-file" id="cover_image" name="cover" value="{{ $cover }}">
                                </div>
                                <div class="form-group">
                                    <label for="nf-password" class=" form-control-label">Sinopsis</label>
                                    <textarea name="synopsis" class="form-control" rows="5">{{$book->synopsis}}</textarea>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa-solid fa-pen-to-square"></i> Ubah
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https:/colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
@endsection