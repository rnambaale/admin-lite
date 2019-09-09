<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function show_index()
    {
        $title      = 'AdminLTE Template | Dashboard';
        $page       = 'dashboard';
        $section    = 'index';
        return view('index', compact('title', 'page', 'section'));
    }

    public function show_index_2()
    {
        $title      = 'AdminLTE Template | Dashboard 2';
        $page       = 'dashboard';
        $section    = 'index_2';

        return view('index_2', compact('title', 'page', 'section'));
    }

    public function show_index_3()
    {
        $title      = 'AdminLTE Template | Dashboard 3';
        $page       = 'dashboard';
        $section    = 'index_3';
        return view('index_3', compact('title', 'page', 'section'));
    }

    public function show_widgets()
    {
        $title      = 'AdminLTE Template | Widgets';
        $page       = 'widgets';
        $section    = '';
        return view('widgets', compact('title', 'page', 'section'));
    }
}
