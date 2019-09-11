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

    public function show_ui_sliders()
    {
        $title      = 'Sliders';
        $page       = 'ui';
        $section    = 'sliders';
        return view('ui_sliders', compact('title', 'page', 'section'));
    }

    public function show_ui_modals()
    {
        $title      = 'Modals & Alerts';
        $page       = 'ui';
        $section    = 'modals';
        return view('ui_modals', compact('title', 'page', 'section'));
    }

    public function show_ui_navbar()
    {
        $title      = 'Navbar & Tabs';
        $page       = 'ui';
        $section    = 'navbar';
        return view('ui_navbar', compact('title', 'page', 'section'));
    }

    public function show_ui_timeline()
    {
        $title      = 'Timeline';
        $page       = 'ui';
        $section    = 'timeline';
        return view('ui_timeline', compact('title', 'page', 'section'));
    }

    public function show_ui_ribbons()
    {
        $title      = 'Ribbons';
        $page       = 'ui';
        $section    = 'ribbons';
        return view('ui_ribbons', compact('title', 'page', 'section'));
    }


    public function show_forms_general()
    {
        $title      = 'General Form';
        $page       = 'forms';
        $section    = 'forms_general';
        return view('forms_general', compact('title', 'page', 'section'));
    }

    public function show_forms_advanced()
    {
        $title      = 'Advanced Form';
        $page       = 'forms';
        $section    = 'forms_advanced';
        return view('forms_advanced', compact('title', 'page', 'section'));
    }

    public function show_forms_editors()
    {
        $title      = 'Text Editors';
        $page       = 'forms';
        $section    = 'forms_editors';
        return view('forms_editors', compact('title', 'page', 'section'));
    }


    public function show_tables_simple()
    {
        $title      = 'Simple Tables';
        $page       = 'tables';
        $section    = 'tables_simple';
        return view('tables_simple', compact('title', 'page', 'section'));
    }

    public function show_tables_data()
    {
        $title      = 'DataTables';
        $page       = 'tables';
        $section    = 'tables_data';
        return view('tables_data', compact('title', 'page', 'section'));
    }

    public function show_tables_jsgrid()
    {
        $title      = 'jsGrid';
        $page       = 'tables';
        $section    = 'tables_jsgrid';
        return view('tables_jsgrid', compact('title', 'page', 'section'));
    }

    public function show_calendar()
    {
        $title      = 'Calendar';
        $page       = 'calendar';
        $section    = '';
        return view('calendar', compact('title', 'page', 'section'));
    }

    public function show_gallery()
    {
        $title      = 'Gallery';
        $page       = 'gallery';
        $section    = '';
        return view('gallery', compact('title', 'page', 'section'));
    }

    public function show_mailbox_mailbox()
    {
        $title      = 'Mailbox';
        $page       = 'mailbox';
        $section    = 'mailbox_mailbox';
        return view('mailbox_mailbox', compact('title', 'page', 'section'));
    }

    public function show_mailbox_compose()
    {
        $title      = 'Compose';
        $page       = 'mailbox';
        $section    = 'mailbox_compose';
        return view('mailbox_compose', compact('title', 'page', 'section'));
    }

    public function show_mailbox_read_mail()
    {
        $title      = 'Compose';
        $page       = 'mailbox';
        $section    = 'mailbox_read_mail';
        return view('mailbox_read_mail', compact('title', 'page', 'section'));
    }

    public function show_pages_invoice()
    {
        $title      = 'Invoice';
        $page       = 'pages';
        $section    = 'pages_invoice';
        return view('pages_invoice', compact('title', 'page', 'section'));
    }

    public function show_pages_profile()
    {
        $title      = 'Profile';
        $page       = 'pages';
        $section    = 'pages_profile';
        return view('pages_profile', compact('title', 'page', 'section'));
    }

    public function show_pages_e_commerce()
    {
        $title      = 'E-commerce';
        $page       = 'pages';
        $section    = 'pages_e_commerce';
        return view('pages_e_commerce', compact('title', 'page', 'section'));
    }

    public function show_pages_projects()
    {
        $title      = 'Projects';
        $page       = 'pages';
        $section    = 'pages_projects';
        return view('pages_projects', compact('title', 'page', 'section'));
    }

    public function show_pages_project_add()
    {
        $title      = 'Project Add';
        $page       = 'pages';
        $section    = 'pages_project_add';
        return view('pages_project_add', compact('title', 'page', 'section'));
    }

    public function show_pages_project_edit()
    {
        $title      = 'Project Edit';
        $page       = 'pages';
        $section    = 'pages_project_edit';
        return view('pages_project_edit', compact('title', 'page', 'section'));
    }

    public function show_pages_project_detail()
    {
        $title      = 'Project Detail';
        $page       = 'pages';
        $section    = 'pages_project_detail';
        return view('pages_project_detail', compact('title', 'page', 'section'));
    }

    public function show_pages_contacts()
    {
        $title      = 'Contacts';
        $page       = 'pages';
        $section    = 'pages_contacts';
        return view('pages_contacts', compact('title', 'page', 'section'));
    }
}
