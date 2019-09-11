<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ViewController@show_index');
Route::get('/index_2', 'ViewController@show_index_2');
Route::get('/index_3', 'ViewController@show_index_3');

Route::get('/widgets', 'ViewController@show_widgets');

Route::get('/charts/chart_js', 'ViewController@show_charts_chart_js');
Route::get('/charts/flot', 'ViewController@show_charts_flot');
Route::get('/charts/inline', 'ViewController@show_charts_inline');

Route::get('/ui/general', 'ViewController@show_ui_general');
Route::get('/ui/icons', 'ViewController@show_ui_icons');
Route::get('/ui/buttons', 'ViewController@show_ui_buttons');
Route::get('/ui/sliders', 'ViewController@show_ui_sliders');
Route::get('/ui/modals', 'ViewController@show_ui_modals');
Route::get('/ui/navbar', 'ViewController@show_ui_navbar');
Route::get('/ui/timeline', 'ViewController@show_ui_timeline');
Route::get('/ui/ribbons', 'ViewController@show_ui_ribbons');

Route::get('/forms/general', 'ViewController@show_forms_general');
Route::get('/forms/advanced', 'ViewController@show_forms_advanced');
Route::get('/forms/editors', 'ViewController@show_forms_editors');


Route::get('/tables/simple', 'ViewController@show_tables_simple');
Route::get('/tables/data', 'ViewController@show_tables_data');
Route::get('/tables/jsgrid', 'ViewController@show_tables_jsgrid');


Route::get('/calendar', 'ViewController@show_calendar');
Route::get('/gallery', 'ViewController@show_gallery');

Route::get('/mailbox/mailbox', 'ViewController@show_mailbox_mailbox');
Route::get('/mailbox/compose', 'ViewController@show_mailbox_compose');
Route::get('/mailbox/read_mail', 'ViewController@show_mailbox_read_mail');

Route::get('/pages/invoice', 'ViewController@show_pages_invoice');
Route::get('/pages/profile', 'ViewController@show_pages_profile');
Route::get('/pages/e_commerce', 'ViewController@show_pages_e_commerce');
Route::get('/pages/projects', 'ViewController@show_pages_projects');
Route::get('/pages/project_add', 'ViewController@show_pages_project_add');
Route::get('/pages/project_edit', 'ViewController@show_pages_project_edit');
Route::get('/pages/project_detail', 'ViewController@show_pages_project_detail');
Route::get('/pages/contacts', 'ViewController@show_pages_contacts');
