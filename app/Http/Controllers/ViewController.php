<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function show_index()
    {
        $title      = 'Dashboard';
        $page       = 'dashboard';
        $section    = 'index';
        return view('index', compact('title', 'page', 'section'));
    }

    public function show_index_2()
    {
        $title      = 'Dashboard 2';
        $page       = 'dashboard';
        $section    = 'index_2';

        return view('index_2', compact('title', 'page', 'section'));
    }

    public function show_index_3()
    {
        $title      = 'Dashboard 3';
        $page       = 'dashboard';
        $section    = 'index_3';
        return view('index_3', compact('title', 'page', 'section'));
    }

    public function show_widgets()
    {
        $title      = 'Widgets';
        $page       = 'widgets';
        $section    = '';
        return view('widgets', compact('title', 'page', 'section'));
    }

    public function show_charts_chart_js()
    {
        $title      = 'ChartJS';
        $page       = 'charts';
        $section    = 'chart_js';
        return view('charts_chart_js', compact('title', 'page', 'section'));
    }

    public function show_charts_flot()
    {
        $title      = 'Flot Charts';
        $page       = 'charts';
        $section    = 'flot';
        return view('charts_flot', compact('title', 'page', 'section'));
    }

    public function show_charts_inline()
    {
        $title      = 'Inline Charts';
        $page       = 'charts';
        $section    = 'inline';
        return view('charts_inline', compact('title', 'page', 'section'));
    }

    public function show_ui_general()
    {
        $title      = 'General UI';
        $page       = 'ui';
        $section    = 'general';
        return view('ui_general', compact('title', 'page', 'section'));
    }

    public function show_ui_icons()
    {
        $title      = 'Icons';
        $page       = 'ui';
        $section    = 'icons';
        return view('ui_icons', compact('title', 'page', 'section'));
    }

    public function show_ui_buttons()
    {
        $title      = 'Buttons';
        $page       = 'ui';
        $section    = 'buttons';
        return view('ui_buttons', compact('title', 'page', 'section'));
    }
}
