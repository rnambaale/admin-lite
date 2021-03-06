{{-- Main Sidebar Container --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- Brand Logo --}}
    <a href="/" class="brand-link">
        <img src="{{ asset('admin-lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    {{-- Sidebar --}}
    <div class="sidebar">
        {{-- Sidebar user panel (optional) --}}
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        {{-- Sidebar Menu --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {{-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library --}}
                <li class="nav-item has-treeview {{ $page == 'dashboard' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ $page == 'dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/" class="nav-link {{ $section == 'index' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v1</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/index_2" class="nav-link {{ $section == 'index_2' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v2</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/index_3" class="nav-link {{ $section == 'index_3' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v3</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item">
                <a href="/widgets" class="nav-link {{ $page == 'widgets' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Widgets
                    <span class="right badge badge-danger">New</span>
                    </p>
                </a>
                </li>
                <li class="nav-item has-treeview {{ $page == 'layouts' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                    Layout Options
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">6</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/pages/layout_top_nav" class="nav-link {{ $section == 'top_nav' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Top Navigation</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/layout/boxed.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Boxed</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Sidebar</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/layout/fixed-topnav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Navbar</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/layout/fixed-footer.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Footer</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Collapsed Sidebar</p>
                    </a>
                    </li>
                </ul>
                </li>

                <li class="nav-item has-treeview {{ $page == 'charts' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ $page == 'charts' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                    Charts
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/charts/chart_js" class="nav-link {{ $section == 'chart_js' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ChartJS</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/charts/flot" class="nav-link {{ $section == 'flot' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Flot</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/charts/inline" class="nav-link {{ $section == 'inline' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inline</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item has-treeview {{ $page == 'ui' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ $page == 'ui' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                    UI Elements
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/ui/general" class="nav-link {{ $section == 'general' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>General</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/icons" class="nav-link {{ $section == 'icons' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Icons</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/buttons" class="nav-link {{ $section == 'buttons' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Buttons</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/sliders" class="nav-link {{ $section == 'sliders' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sliders</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/modals" class="nav-link {{ $section == 'modals' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Modals & Alerts</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/navbar" class="nav-link {{ $section == 'navbar' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Navbar & Tabs</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/timeline" class="nav-link {{ $section == 'timeline' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Timeline</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/ribbons" class="nav-link {{ $section == 'ribbons' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Ribbons</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item has-treeview {{ $page == 'forms' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ $page == 'forms' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                    Forms
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/forms/general" class="nav-link {{ $section == 'forms_general' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>General Elements</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/forms/advanced" class="nav-link {{ $section == 'forms_advanced' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Advanced Elements</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/forms/editors" class="nav-link {{ $section == 'forms_editors' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Editors</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item has-treeview {{ $page == 'tables' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ $page == 'tables' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                    Tables
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/tables/simple" class="nav-link {{ $section == 'tables_simple' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Simple Tables</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/tables/data" class="nav-link {{ $section == 'tables_data' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>DataTables</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/tables/jsgrid" class="nav-link {{ $section == 'tables_jsgrid' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>jsGrid</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                <a href="/calendar" class="nav-link {{ $page == 'calendar' ? 'active' : '' }}">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                    Calendar
                    <span class="badge badge-info right">2</span>
                    </p>
                </a>
                </li>
                <li class="nav-item">
                <a href="/gallery" class="nav-link {{ $page == 'gallery' ? 'active' : '' }}">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                    Gallery
                    </p>
                </a>
                </li>
                <li class="nav-item has-treeview {{ $page == 'mailbox' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ $page == 'mailbox' ? 'active' : '' }}">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                    Mailbox
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/mailbox/mailbox" class="nav-link {{ $section == 'mailbox_mailbox' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inbox</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/mailbox/compose" class="nav-link {{ $section == 'mailbox_compose' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Compose</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/mailbox/read_mail" class="nav-link {{ $section == 'mailbox_read_mail' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Read</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item has-treeview {{ $page == 'pages' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ $page == 'pages' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                    Pages
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/pages/invoice" class="nav-link {{ $section == 'pages_invoice' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Invoice</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/pages/profile" class="nav-link {{ $section == 'pages_profile' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Profile</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/pages/e_commerce" class="nav-link {{ $section == 'pages_e_commerce' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>E-commerce</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/pages/projects" class="nav-link {{ $section == 'pages_projects' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Projects</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/pages/project_add" class="nav-link {{ $section == 'pages_project_add' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Add</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/pages/project_edit" class="nav-link {{ $section == 'pages_project_edit' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Edit</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/pages/project_detail" class="nav-link {{ $section == 'pages_project_detail' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Detail</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/pages/contacts" class="nav-link {{ $section == 'pages_contacts' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contacts</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item has-treeview {{ $page == 'extras' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ $page == 'extras' ? 'active' : '' }}">
                    <i class="nav-icon far fa-plus-square"></i>
                    <p>
                    Extras
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/extras/login" class="nav-link {{ $section == 'extras_login' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Login</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/extras/register" class="nav-link {{ $section == 'extras_register' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Register</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/extras/lockscreen" class="nav-link {{ $section == 'extras_lockscreen' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lockscreen</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/extras/legacy_user_menu" class="nav-link {{ $section == 'extras_legacy_user_menu' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Legacy User Menu</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/extras/language_menu" class="nav-link {{ $section == 'extras_language_menu' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Language Menu</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/extras/404" class="nav-link {{ $section == 'extras_404' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Error 404</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/extras/500" class="nav-link {{ $section == 'extras_500' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Error 500</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/extras/blank" class="nav-link {{ $section == 'extras_blank' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Blank Page</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/extras/starter" class="nav-link {{ $section == 'extras_starter' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Starter Page</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-header">MISCELLANEOUS</li>
                <li class="nav-item">
                <a href="https://adminlte.io/docs/3.0" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>Documentation</p>
                </a>
                </li>
                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    <p class="text">Important</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-warning"></i>
                    <p>Warning</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Informational</p>
                </a>
                </li>
            </ul>
        </nav>
        {{-- /.sidebar-menu --}}
    </div>
    {{-- /.sidebar --}}
</aside>