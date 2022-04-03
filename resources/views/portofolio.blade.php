@extends('layouts.main')
    <link rel="stylesheet" href="styles.css">
@section('container')
    <header class="title top mb-5">
        <h1>Portofolio Saya</h>
    </header>
    <div id="port-cont">
        <div class="card" id="cardd">
            <img src="images/{{$HW}}" class="card-img-top p-1 pe-1 m-1" alt="Homework Manager" id="pp">
            <div class="card-body">
                <h5>Homework Manager - Kotlin</h5>
                <p>Aplikasi Homework Manager ini adalah aplikasi Android yang saya buat menggunakan Kotlin. <br>
                   Aplikasi ini memiliki beberapa fitur andalan, yaitu : <br>
                   1. CRUD menggunakan Room Database(SQLite) <br>
                   2. Splash Screen <br>
                   3. Sort data <br>
                   4. Search data <br>
                   5. UI yang mudah digunakan <br>
                   Berikut adalah Link githubnya : <a class="card-link" href="https://github.com/Sendiko/Homework-Manager">Sendiko/Homework-Manager</a></p>
            </div>
        </div>
        <br>
        <div class="card" id="cardd">
            <img src="images/{{$tfe}}" class="card-img-top p-1 m-1" alt="2048" id="pp">
            <div class="card-body">
                <h5>Clone 2048</h5>
                <p>Clone dari game 2048 ini saya buat karena saya merasa kemampuan Javascript saya kurang. <br>
                   Karena itu, saya mulai mencari-cari project Javascript dari internet dan saya menemukan project 2048 Clone ini. <br>
                   Saya akui, memang Javascript agak sulit bagi saya. Saya membutuhkan waktu beberapa hari hanya untuk membuat Clone ini. <br>
                   Namun, saya belajar banyak tentang bagaimana Javascript bekerja dengan membuat projek ini. <br>
                   Dan berikut adalah Link githubnya : <a href="https://github.com/Sendiko/2048">Sendiko/2048</a></p>
            </div>
        </div>
        <br>
        <div class="card" id="cardd">
            <img src="images/{{$todo}}" class="card-img-top p-1  m-1" alt="Todo List with Javascript" id="pp">
            <div class="card-body">
                <h5>Todo List Web App with Javascript</h5>
                <p>Project Todo List ini juga dalam rangka saya mempelajari Javascript.
                   Saya masih merasa belum puas dengan Project saya yang sebelumnya yaitu 2048 Clone. <br>
                   Lalu saya memutuskan untuk membuat 1 project murni Javascript, tanpa framework apapun. <br>
                   Dan saya merasa sudah cukup puas dengan pengetahuan saya tentang Javascript sekarang. <br>
                   Berikut adalah Link githubnya : <a href="https://github.com/Sendiko/Todo-Javascript">Sendiko/Todo-Javascript</a></p>
            </div>
        </div>
        <br>
        <div class="card" id="cardd">
            <img src="images/{{$lara}}" class="card-img-top p-1 m-1" alt="Web App with Laravel 8" id="pp">
            <div class="card-body">
                <h5>Laravel 8 Web App</h5>
                <p>Project ini adalah pertama kalinya saya menggunakan sebuah Framework.
                   Untuk Web ini, saya menggnunakan Framework Laravel 8, dibantu dengan Framework CSS, Bootstrap. 
                   Fitur di Web ini sedikit mirip dengan Homework-Manager saya, yaitu CRUD database. 
                   Tentu saja, database yang saya gunakan kali ini adalah MySQL. Data yang akan masuk ke database adalah data dari Contact Me. 
                   Lalu, ada juga fitur authorization. Fitur ini bisa bisa digunakan lewat tombol Login dam register di kanan atas Website ini.
                   Dan setelah Log in, maka user akan dibawa ke Dashboard Utama. Dari Dashboardtersebut, saya bisa mengolah data Contact Me yang sudah dimasukkan. <br>
                   Berikut adalah Link github dari Website ini : <a href="https://github.com/Sendiko/2-17-Sendiko">Sendiko/Laravel 8</a></p>
            </div>
        </div>
        <div class="card" id="cardd">
            <img src="images/{{$calc}}" class="card-img-top p-1 m-1" alt="Web App with Laravel 8" id="pp">
            <div class="card-body">
                <h5>Calculator App C#</h5>
                <p>Simple desktop calculator app with C# <br>
                    Aplikasi ini saya buat menggunakan Visual Studio 2022 dengan bahasa C#. Ini adalah latihan bagi saya untuk membuat GUI di aplikasi Desktop. <br>
                    Ternyata tidak sesulit yang saya bayangkan, rasanya hampir mirip dengan membut UI di Aplikasi Android. <br>
                    Berikut adalah Link github dari project ini : <a href="https://github.com/Sendiko/CalcApp-with-C-">Sendiko/Calculator-C#</a></p>
            </div>
        </div>
    </div>
@endsection