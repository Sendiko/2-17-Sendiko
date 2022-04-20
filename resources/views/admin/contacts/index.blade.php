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
                        <h2 class="title-1">Data Contact Us</h2>
                        <a href="/contacts/create" class="btn btn-primary">+</a>
                    </div>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($contacts as $index => $contact): ?>
                                <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $contact ->nama}}</td>
                                <td>{{ $contact ->email}}</td>
                                <td>{{ $contact ->pesan}}</td>
                                <td>
                                    <a href="{{route('contacts.edit', $contact -> id )}}"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="{{route('contacts.destroy', $contact -> id )}}"><i class="fas fa-trash" style="color:red"></i></a>
                                </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        {{$contacts -> links()}}
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