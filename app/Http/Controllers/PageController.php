<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function visi_misi () {
        return view('visi_misi'); 
    }

    public function pendaftaran () {
        return view('pendaftaran');
    }

    public function booster() {
        return view('booster');
    }

    public function psq() {
        return view('psq');
    }

    public function ota() {
        return view('ota');
    }

    public function wakaf() {
        return view('wakaf');
    }
}
