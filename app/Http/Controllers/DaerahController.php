<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaerahController extends Controller
{
    public function index(){
        return view('daerah.index');
    }

    public function create(){
        return view('daerah.create');
    }
}
