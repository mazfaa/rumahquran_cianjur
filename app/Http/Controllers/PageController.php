<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index () {
        return view ('v_index', [
            "page_title" => "Halaman Beranda Resmi"
        ]);
    }

    public function visi_misi () {
        return view ('v_visi-misi', [
            "page_title" => "Visi Misi"
        ]);
    }
}
