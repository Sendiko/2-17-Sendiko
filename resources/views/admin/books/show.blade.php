@extends('layouts.app')
@section('title', 'Sendiko | Data Contacts')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                    <h1 class="text-center">{{ $books->title }}</h1>
                    <div class="row mt-lg-5">
                        <div class="col-md-8 offset-md-2">
                            <img src="{{ asset('storage/'.$books->cover) }}" class="img-fluid w-100">
                            <p class="mt-lg-5"><strong>Writer: </strong> {{ $books->writer }}</p>
                            <p><strong>Publisher: </strong> {{ $books->publisher }}</p>
                            <p><strong>Release Year: </strong> {{ $books->release }}</p>
                            <hr>
                            <p>{{ $books->synopsis }}</p>
                        </div>
                    </div>
                    <!-- END DATA TABLE-->
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