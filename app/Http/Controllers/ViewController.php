<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function show_index()
    {
        $title      = 'AdminLTE Template | Dashboard';
        $section    = 'index';
        return view('index', compact('title', 'section'));
    }

    public function show_index_2()
    {
        $title      = 'AdminLTE Template | Dashboard 2';
        $section    = 'index_2';

        return view('index_2', compact('title', 'section'));
    }

    public function show_index_3()
    {
        $title      = 'AdminLTE Template | Dashboard 3';
        $section    = 'index_3';
        return view('index_3', compact('title', 'section'));
    }
}
