<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrraptheme.com/templates/lucid/hr/bs5/dist/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Sep 2023 12:25:39 GMT -->
<head>
    <meta charset="utf-8">
    <title>Dalal Rameshchand Madanlal Bhaya</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lucid HR & Project Admin Dashboard Template with Bootstrap 5x">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
    <link rel="icon" href="{{ asset('assets/images/logo.jpeg') }}" type="image/x-icon">
    @yield('csscontent')

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css') }}">
</head>

<body>
@if(Session::has('success'))
<script>
    alert("{{ Session('success') }}")
</script>
@endif

<div id="layout" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper text-center" style="background-color: black;">
        <div class="loader" >
            <img style="width: 85px; height:85px; " src="{{ asset('assets/images/logo.png') }}" alt="">
            <div class="h5 fw-light mt-3">Please wait....</div>
        </div>
    </div>
    <!-- Overlay For Sidebars -->

    <div id="wrapper">

        <!-- top navbar -->
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
                </div>

                <div class="navbar-brand ps-2">
                    <a href="index-2.html" class="d-flex">
                        <img style="width: 85px; height:85px; " src="{{ asset('assets/images/logo.png') }}" alt="">
                        
                    </a>
                </div>

                <div class="d-flex flex-grow-1 align-items-center">
                    <div>
                        <h1>DALAL RAMESHCHAND MADANLAL BHAYA</h1>
                    </div>

                    <div class="flex-grow-1">
                        <ul class="nav navbar-nav flex-row justify-content-end align-items-center">
                            <li class="d-none d-sm-block"><a href="app-events.html" class="icon-menu"><i class="fa fa-calendar"></i></a></li>
                            <li class="d-none d-sm-block"><a href="app-chat.html" class="icon-menu"><i class="fa fa-comments"></i></a></li>
                            <li><a href="app-inbox.html" class="icon-menu"><i class="fa fa-envelope"></i><span class="notification-dot"></span></a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle icon-menu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="notification-dot"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end p-0 shadow notification">
                                    <ul class="list-unstyled feeds_widget">
                                        <li class="d-flex">
                                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body flex-grow-1">
                                                <h6 class="mb-1">7 New Feedback <small class="float-end text-muted small">Today</small></h6>
                                                <span class="text-muted">It will give a smart finishing to your site</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body flex-grow-1">
                                                <h6 class="mb-1">New User <small class="float-end text-muted small">10:45</small></h6>
                                                <span class="text-muted">I feel great! Thanks team</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body flex-grow-1">
                                                <h6 class="mb-1 text-warning">Server Warning <small class="float-end text-muted small">10:50</small></h6>
                                                <span class="text-muted">Your connection is not private</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body flex-grow-1">
                                                <h6 class="mb-1 text-danger">Issue Fixed <small class="float-end text-muted small">11:05</small></h6>
                                                <span class="text-muted">WE have fix all Design bug with Responsive</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="feeds-left"><i class="fa fa-shopping-basket"></i></div>
                                            <div class="feeds-body flex-grow-1">
                                                <h6 class="mb-1">7 New Orders <small class="float-end text-muted small">11:35</small></h6>
                                                <span class="text-muted">You received a new oder from Tina.</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- more link -->
                            <li class="dropdown">
                                <a class="dropdown-toggle icon-menu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-sliders"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end p-2 shadow">
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-pencil-square-o"></i> <span>Basic</span></a></li>
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-sliders fa-rotate-90"></i> <span>Preferences</span></a></li>
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-lock"></i> <span>Privacy</span></a></li>
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-bell"></i> <span>Notifications</span></a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-credit-card"></i> <span>Payments</span></a></li>
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-print"></i> <span>Invoices</span></a></li>
                                    <li><a class="dropdown-item rounded-pill" href="javascript:void(0);"><i class="me-2 fa fa-refresh"></i> <span>Renewals</span></a></li>
                                </ul>
                            </li>
                            <li><a href="page-login.html" class="icon-menu"><i class="fa fa-sign-out"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <br><br>
        <!-- Sidbar menu -->
        <div id="left-sidebar" class="sidebar">
            <div class="user-account p-3 mb-3">
                <div class="d-flex mb-3 pb-3 border-bottom align-items-center">
                    <img src="{{asset('assets/images/employee.jpg') }}" class="avatar lg rounded me-3" alt="User Profile Picture">
                    <div class="dropdown flex-grow-1">
                        <span>Welcome,</span>
                        <a href="#" class="dropdown-toggle user-name" data-bs-toggle="dropdown"><br><strong>Admin</strong></a>
                        <ul class="dropdown-menu p-2 shadow-sm">
                            <li><a href="page-profile2.html"><i class="fa fa-user me-2"></i>My Profile</a></li>
                            <li><a href="app-inbox.html"><i class="fa fa-envelope-open me-2"></i>Messages</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-cog me-2"></i>Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="page-login.html"><i class="fa fa-power-off me-2"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="row g-3">
                    <div class="col">
                        <h6 class="mb-0">5+</h6>
                        <small class="text-muted">Experience</small>
                    </div>
                    <div class="col">
                        <h6 class="mb-0">400+</h6>
                        <small class="text-muted">Employees</small>
                    </div>
                    <div class="col">
                        <h6 class="mb-0">80+</h6>
                        <small class="text-muted">Clients</small>
                    </div>
                </div> --}}
            </div>
            <!-- nav tab: menu list -->
            <ul class="nav nav-tabs text-center mb-2" role="tablist">
                <li class="nav-item flex-fill"><a class="nav-link active" id="hr_menu_nav_link" data-bs-toggle="tab" href="#hr_menu" role="tab">HR</a></li>
                <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#project_menu" role="tab">Contract</a></li>
                {{-- <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#sub_menu" role="tab"><i class="fa fa-th-large"></i></a></li> --}}
                <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#setting_menu" role="tab"><i class="fa fa-cog"></i></a></li>
            </ul>
            <!-- nav tab: content -->
            <div class="tab-content px-0">
                <div class="tab-pane fade show active" id="hr_menu" role="tabpanel" >
                    <nav class="sidebar-nav">
                        <ul class="metismenu list-unstyled">
                            <li class="active"><a href="{{ Route('index') }}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                            <li><a href="app-holidays.html"><i class="fa fa-list-ul"></i><span>Holidays</span></a></li>
                            <li>
                                <a href="#Employees" class="has-arrow"><i class="fa fa-users"></i><span>Employees</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ Route('employees') }}">All Employees</a></li>
                                    <li><a href="emp-leave.html">Leave Requests</a></li>
                                    <li><a href="{{ Route('attendance') }}">Mark Attendance</a></li>
                                    <li><a href="{{ Route('attendancerecord') }}">Attendance Record</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Accounts" class="has-arrow"><i class="fa fa-briefcase"></i><span>Accounts</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ Route('cashbook') }}">Add Expenses</a></li>
                                    <li><a href="{{ Route('expenses') }}">Expenses</a></li>
                                    <li><a href="{{ Route('tally') }}">Expenses Tally</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Payroll" class="has-arrow"><i class="fa fa-credit-card"></i><span>Payroll</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="payroll-payslip.html">Payslip</a></li>
                                    <li><a href="{{ Route('employeesalary') }}">Employee Salary</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Report" class="has-arrow"><i class="fa fa-bar-chart"></i><span>Report</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="report-expense.html">Expense Report</a></li>
                                    <li><a href="report-invoice.html">Invoice Report</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="project_menu" role="tabpanel" >
                    <nav class="sidebar-nav">
                        <ul class="metismenu list-unstyled">
                            <li><a href="{{ Route('index') }}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                            {{-- <li><a href="app-inbox.html"><i class="fa fa-envelope-o"></i><span>Inbox App</span></a></li>
                            <li><a href="app-chat.html"><i class="fa fa-comments"></i><span>Chat App</span></a></li> --}}
                            <li>
                                <a href="#Projects" class="has-arrow"><i class="fa fa-list-ul"></i><span>Contracts</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ Route('addcontract') }}">Add Contract</a></li>
                                    <li><a href="{{ Route('contractlist') }}">Contracts List</a></li>
                                    <li><a href="project-grid.html">Projects Grid</a></li>
                                    <li><a href="project-detail.html">Projects Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Clients" class="has-arrow"><i class="fa fa-user"></i><span>Clients</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ Route('addclient') }}">Add Clients</a></li>
                                    <li><a href="{{ Route('clientlist') }}">Clients List</a></li>
                                    <li><a href="client-detail.html">Clients Detail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                {{-- <div class="tab-pane fade" id="sub_menu" role="tabpanel" >
                    <nav class="sidebar-nav">
                        <ul class="metismenu list-unstyled">
                            <li>
                                <a href="#Blog" class="has-arrow"><i class="fa fa-globe"></i><span>Blog</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="blog-dashboard.html">Dashboard</a></li>
                                    <li><a href="blog-post.html">New Post</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-details.html">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#FileManager" class="has-arrow"><i class="fa fa-folder"></i><span>File Manager</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="file-dashboard.html">Dashboard</a></li>
                                    <li><a href="file-documents.html">Documents</a></li>
                                    <li><a href="file-media.html">Media</a></li>
                                    <li><a href="file-images.html">Images</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Widgets" class="has-arrow"><i class="fa fa-puzzle-piece"></i><span>Widgets</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="widgets-statistics.html">Statistics Widgets</a></li>
                                    <li><a href="widgets-data.html">Data Widgets</a></li>
                                    <li><a href="widgets-chart.html">Chart Widgets</a></li>
                                    <li><a href="widgets-weather.html">Weather Widgets</a></li>
                                    <li><a href="widgets-social.html">Social Widgets</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Pages" class="has-arrow"><i class="fa fa-files-o"></i><span>Extra Pages</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="page-blank.html">Blank Page</a></li>
                                    <li><a href="page-profile2.html">Profile</a></li>
                                    <li><a href="page-gallery.html">Image Gallery <span class="badge bg-secondary float-end">v1</span></a></li>
                                    <li><a href="page-timeline.html">Timeline</a></li>
                                    <li><a href="page-timeline-h.html">Horizontal Timeline</a></li>
                                    <li><a href="page-pricing.html">Pricing</a></li>
                                    <li><a href="page-invoices.html">Invoices</a></li>
                                    <li><a href="page-invoices2.html">Invoices <span class="badge bg-warning float-end">v2</span></a></li>
                                    <li><a href="page-search-results.html">Search Results</a></li>
                                    <li><a href="page-helper-class.html">Helper Classes</a></li>
                                    <li><a href="page-maintenance.html">Maintenance</a></li>
                                    <li><a href="page-testimonials.html">Testimonials</a></li>
                                    <li><a href="page-faq.html">FAQs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>UI Elements</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                    <li><a href="ui-icons.html">Icons</a></li>
                                    <li><a href="ui-notifications.html">Notifications</a></li>
                                    <li><a href="ui-colors.html">Colors</a></li>
                                    <li><a href="ui-dialogs.html">Dialogs</a></li>
                                    <li><a href="ui-list-group.html">List Group</a></li>
                                    <li><a href="ui-media-object.html">Media Object</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-nestable.html">Nestable</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-range-sliders.html">Range Sliders</a></li>
                                    <li><a href="ui-treeview.html">Treeview</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#forms" class="has-arrow"><i class="fa fa-pencil"></i><span>Forms</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="forms-validation.html">Form Validation</a></li>
                                    <li><a href="forms-advanced.html">Advanced Elements</a></li>
                                    <li><a href="forms-basic.html">Basic Elements</a></li>
                                    <li><a href="forms-wizard.html">Form Wizard</a></li>
                                    <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
                                    <li><a href="forms-cropping.html">Image Cropping</a></li>
                                    <li><a href="forms-summernote.html">Summernote</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Tables" class="has-arrow"><i class="fa fa-tag"></i><span>Tables</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="table-basic.html">Tables Example<span class="badge bg-info float-end">New</span></a></li>
                                    <li><a href="table-normal.html">Normal Tables</a></li>
                                    <li><a href="table-jquery-datatable.html">Jquery Datatables</a></li>
                                    <li><a href="table-editable.html">Editable Tables</a></li>
                                    <li><a href="table-color.html">Tables Color</a></li>
                                    <li><a href="table-filter.html">Table Filter <span class="badge bg-info float-end">New</span></a></li>
                                    <li><a href="table-dragger.html">Table dragger <span class="badge bg-info float-end">New</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#charts" class="has-arrow"><i class="fa fa-bar-chart"></i><span>Charts</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-morris.html">Morris</a></li>
                                    <li><a href="chart-flot.html">Flot</a></li>
                                    <li><a href="chart-jquery-knob.html">Jquery Knob</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-peity.html">Peity</a></li>
                                    <li><a href="chart-apex.html">Apex Charts</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Maps" class="has-arrow"><i class="fa fa-map-o"></i><span>Maps</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="map-yandex.html">Yandex Map</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
                <div class="tab-pane fade" id="setting_menu" role="tabpanel" >
                    <div class="px-3">
                        <h6>Choose Skin</h6>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="purple" class="mb-2"><div class="purple"></div><span>Purple</span></li>
                            <li data-theme="blue" class="mb-2"><div class="blue"></div><span>Blue</span></li>
                            <li data-theme="cyan" class=" mb-2"><div class="cyan"></div><span>Cyan</span></li>
                            <li data-theme="green" class="mb-2"><div class="green"></div><span>Green</span></li>
                            <li data-theme="orange" class="mb-2"><div class="orange"></div><span>Orange</span></li>
                            <li data-theme="blush" class="mb-2"><div class="blush"></div><span>Blush</span></li>
                        </ul>
                        <hr>
                        <h6>Theme Option</h6>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-1">
                                <div class="form-check form-switch theme-switch">
                                    <input class="form-check-input" type="checkbox" id="theme-switch">
                                    <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-1">
                                <div class="form-check form-switch theme-high-contrast">
                                    <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                    <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-1">
                                <div class="form-check form-switch minisidebar-active">
                                    <input class="form-check-input" type="checkbox" id="mini-active">
                                    <label class="form-check-label" for="mini-active">Mini Sidebar</label>
                                </div>
                            </li>
                        </ul>
                        <hr>
                        {{-- <h6>General Settings</h6>
                        <ul class="setting-list list-unstyled">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                    <label class="form-check-label" for="flexCheckDefault1">Email Redirect</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                                    <label class="form-check-label" for="flexCheckDefault2">Notifications</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                    <label class="form-check-label" for="flexCheckDefault3">Auto Updates</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                    <label class="form-check-label" for="flexCheckDefault4">Offline</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                    <label class="form-check-label" for="flexCheckDefault5">Location Permission</label>
                                </div>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>

        <div id="main-content">
            <div class="container-fluid">

                <div class="block-header py-lg-4 py-3">
                    <div class="row g-3">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Dashboard</h2>
                            
                        </div>
                        {{-- <div class="col-md-6 col-sm-12 text-md-end">
                            <div class="d-inline-flex text-start">
                                <div class="me-2">
                                    <h6 class="mb-0"><i class="fa fa-user"></i> 1,784</h6>
                                    <small>Visitors</small>
                                </div>
                                <span id="bh_visitors"></span>
                            </div>
                            <div class="d-inline-flex text-start ms-lg-3 me-lg-3 ms-1 me-1">
                                <div class="me-2">
                                    <h6 class="mb-0"><i class="fa fa-globe"></i> 325</h6>
                                    <small>Visits</small>
                                </div>
                                <span id="bh_visits"></span>
                            </div>
                            <div class="d-inline-flex text-start">
                                <div class="me-2">
                                    <h6 class="mb-0"><i class="fa fa-comments"></i> 13</h6>
                                    <small>Chats</small>
                                </div>
                                <span id="bh_chats"></span>
                            </div>
                        </div> --}}
                    </div>
                </div>
                @yield('content')
                

            </div>
        </div>

    </div>

</div>
<!-- core js file -->
<script src="{{asset('assets/bundles/libscripts.bundle.js') }}"></script>

<!-- page js file -->
<script src="{{asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{asset('assets/js/pages/index.js') }}"></script>
<script>
// Function to set the selected theme in local storage
function setTheme(theme) {
    localStorage.setItem('selectedTheme', theme);
}

// Function to apply the stored theme to the layout
function applyStoredTheme() {
    var storedTheme = localStorage.getItem('selectedTheme');
    if (storedTheme) {
        $('#layout').removeClass('theme-cyan theme-blue theme-purple theme-green theme-orange theme-blush');
        $('#layout').addClass('theme-' + storedTheme);
        // Update the active class for the selected theme in the skin chooser
        $('.choose-skin li').removeClass('active');
        $('.choose-skin li[data-theme="' + storedTheme + '"]').addClass('active');
    }
}

// Event listener for theme selection
$('.choose-skin li').on('click', function () {
    var selectedTheme = $(this).data('theme');
    setTheme(selectedTheme);
    $('#layout').removeClass('theme-cyan theme-blue theme-purple theme-green theme-orange theme-blush');
    $('#layout').addClass('theme-' + selectedTheme);
    // Update the active class for the selected theme in the skin chooser
    $('.choose-skin li').removeClass('active');
    $(this).addClass('active');
});

// Apply the stored theme when the page loads
$(document).ready(function () {
    applyStoredTheme();
});


</script>
@yield('jscontent')
</body>

<!-- Mirrored from wrraptheme.com/templates/lucid/hr/bs5/dist/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Sep 2023 12:26:03 GMT -->
</html>