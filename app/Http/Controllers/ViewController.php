<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function show_index()
    {
        return view('index', ['title' => 'AdminLTE Laravel Template']);
    }
}
