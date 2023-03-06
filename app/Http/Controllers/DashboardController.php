<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function about()
    {
        return view('about', [
            "title" => "About",
            "nama" => "Muhammad Rizky Sendiko",
            "email" => "3103120150@student.smktelkom-pwt.sch.id",
            "gambar" => "dsc.jpg",
            "sekolah" => "SMK Telkom Puwokerto",
            "umur" => "17 Tahun",
            "kelahiran" => "Banyumas, Purwokerto",
            "hobi" => "Mencoba Project-project dari Youtube, Bermain Games(CoC, MLBB), Mendengarkan musik"
        ]);
    }

    public function portofolio()
    {
        return view('portofolio', [
            "title" => "Gallery",
            "gambar" => "dsc.jpg",
            "title" => "Portofolio",
            "gambar" => "dsc.jpg",
            "todo" => "todo.png",
            "tfe" => "2048.png",
            "HW" => "HW.png",
            "lara" => "laravel.png",
            "calc" => "calc.png",
            "fire" => "firebase.png"
        ]);
    }
}
