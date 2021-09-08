<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama Saya Rafika Nurhayati dengan NIM 2031710081';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }

}
