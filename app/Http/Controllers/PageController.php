<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function visi_misi () {
        return view('visi_misi'); 
    }
}
