<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArenaController extends Controller
{
    public function index()
    {
        return view('arena.index');
    }

    public function create()
    {
        return view('arena.create');
    }
}
