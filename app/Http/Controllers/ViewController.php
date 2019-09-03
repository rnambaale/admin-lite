<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function show_index()
    {
        return view('index', ['title' => 'AdminLTE Template | Dashboard']);
    }

    public function show_index_2()
    {
        return view('index_2', ['title' => 'AdminLTE Template | Dashboard 2']);
    }
}
