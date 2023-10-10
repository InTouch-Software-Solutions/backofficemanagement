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
    <style type="text/css">
        :root {
            --theme-color: #2EACB3; 
        }
    
        .context 
        {
            width: 100%;
        }
        
        .context h1
        {
            text-align: center;
            color: #000000;
            font-size: 5vw;
            margin-top: 5%;
            margin-bottom: 5%;
           
        }
        
        /------------------------------------------------/
        .area51
        {
            background: #4e54c8;  
            width: 100%;
            height:100%;   
        }
        
        .circles
        {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 20vh;
            overflow: hidden;
            /background-color: red;/
        }
        
        .circles li
        {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: var(--theme-color);
            animation: animate 25s linear infinite;
            bottom: -150px;
        
        }
        
        .circles li:nth-child(1)
        {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }
        
        
        .circles li:nth-child(2)
        {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }
        
        .circles li:nth-child(3){
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }
        
        .circles li:nth-child(4){
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }
        
        .circles li:nth-child(5){
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }
        
        .circles li:nth-child(6){
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }
        
        .circles li:nth-child(7){
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }
        
        .circles li:nth-child(8){
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }
        
        .circles li:nth-child(9){
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }
        
        .circles li:nth-child(10){
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }
        
        
        
        @keyframes animate 
        {
        
            0%
            {
                transform: translateY(0) rotate(0deg);
                opacity: 0.5;
                border-radius: 0;
            }
        
            100%
            {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0.5;
                border-radius: 50%;
            }
        
        }
    </style>
    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
        }
        .page-link.active, .active > .page-link {
            color: var(--theme-color) !important;
        }
        .page-item.disabled .page-link{
            background-color: var(--theme-color) !important;
            color: white !important;
        }
        label {
            font-weight: bold;
            font-size: 18px;
        }

    </style>
 

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
            <div>
                <h1>DALAL RAMESHCHAND MADANLAL BHAYA</h1>
            </div>
            <img style="width: 200px; height:200px; " src="{{ asset('assets/images/logo.png') }}" alt="">
            <div class="h1 fw-light mt-3">Please wait....</div>
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
                            <li><a href="{{ Route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off me-2 btn btn-outline-primary"></i></a><form id="logout-form" action="{{ route('logout') }}" method="get" class="d-none">
                                @csrf
                            </form></li>
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
                        <a href="#" class="user-name"><br><strong>{{ Auth::user()->name }} </strong></a>
                        {{-- <ul class="dropdown-menu p-2 shadow-sm">
                            <li><a href="#"><i class="fa fa-user me-2"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-envelope-open me-2"></i>Messages</a></li>
                            <li><a href="#"><i class="fa fa-cog me-2"></i>Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ Route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off me-2"></i>Logout</a><form id="logout-form" action="{{ route('logout') }}" method="get" class="d-none">
                                @csrf
                            </form></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            <!-- nav tab: menu list -->
            <ul class="nav nav-tabs text-center mb-2" role="tablist">
                <li class="nav-item flex-fill"><a class="nav-link" id="hr_menu_nav_link" data-bs-toggle="tab" href="#hr_menu" role="tab">HR</a></li>
                <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#project_menu" role="tab">Contract</a></li>
                {{-- <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#sub_menu" role="tab"><i class="fa fa-th-large"></i></a></li> --}}
                <li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#setting_menu" role="tab"><i class="fa fa-cog"></i></a></li>
            </ul>
            <!-- nav tab: content -->
            <div class="tab-content px-0">
                <div class="tab-pane fade" id="hr_menu" role="tabpanel" >
                    <nav class="sidebar-nav">
                        <ul class="metismenu list-unstyled">
                            <li class="active"><a href="{{ Route('index') }}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                            <li>
                                <a href="#Employees" class="has-arrow"><i class="fa fa-users"></i><span>Employees</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ Route('employees') }}">All Employees</a></li>
                                    {{-- <li><a href="emp-leave.html">Leave Requests</a></li> --}}
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
                            {{-- <li>
                                <a href="#Report" class="has-arrow"><i class="fa fa-bar-chart"></i><span>Report</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="report-expense.html">Expense Report</a></li>
                                    <li><a href="report-invoice.html">Invoice Report</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="project_menu" role="tabpanel" >
                    <nav class="sidebar-nav">
                        <ul class="metismenu list-unstyled">
                            <li><a href="{{ Route('index') }}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                            <li>
                                <a href="#Projects" class="has-arrow"><i class="fa fa-list-ul"></i><span>Contracts</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ Route('addcontract') }}">Add Contract</a></li>
                                    <li><a href="{{ Route('contractlist') }}">Contracts List</a></li>
                                    <li><a href="{{ Route('deliverybook') }}">Delivery Book</a></li>
                                    <li><a href="{{ Route('brokeragebill') }}">Brokerage Bill</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Clients" class="has-arrow"><i class="fa fa-user"></i><span>Clients</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ Route('addclient') }}">Add Clients</a></li>
                                    <li><a href="{{ Route('clientlist') }}">Clients List</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ Route('firm') }}"><i class="fa fa-tachometer"></i><span>Firms</span></a></li>
                            <li><a href="{{ Route('inventory') }}"><i class="fa fa-hourglass-start"></i><span>Inventory Control</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="setting_menu" role="tabpanel" >
                    <div class="px-3">
                        <h6>Choose Skin</h6>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="purple" id="#3B185F" class="mb-2"><div class="purple"></div><span>Purple</span></li>
                            <li data-theme="blue" id="#0061A8" class="mb-2"><div class="blue"></div><span>Blue</span></li>
                            <li data-theme="cyan" id="#2EACB3" class=" mb-2"><div class="cyan"></div><span>Cyan</span></li>
                            <li data-theme="green" id="#28A745" class="mb-2"><div class="green"></div><span>Green</span></li>
                            <li data-theme="orange" id="#F68C1F" class="mb-2"><div class="orange"></div><span>Orange</span></li>
                            <li data-theme="blush" id="#FF5C58" class="mb-2"><div class="blush"></div><span>Blush</span></li>
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
                    </div>
                </div>
                <div class="context"  >
                    <div class="area51" >
                      <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                      </ul> 
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
<script>
    function setThemeColor(color) {
        document.documentElement.style.setProperty('--theme-color', color);
        localStorage.setItem('themeColor', color);
    }

    // Check if the theme color is already saved in localStorage
    const savedThemeColor = localStorage.getItem('themeColor');

    // Set the theme color based on localStorage or a default color
    if (savedThemeColor) {
        setThemeColor(savedThemeColor);
    } else {
        setThemeColor('#2EACB3'); // Default theme color
    }

    const themeList = document.querySelectorAll('.choose-skin li');

    themeList.forEach((themeItem) => {
        themeItem.addEventListener('click', function () {
            const selectedTheme = this.getAttribute('id');
            setThemeColor(selectedTheme);
            localStorage.setItem('themeColor', selectedTheme); // Save the selected theme color
        });
    });
</script>
<script>
    // JavaScript code to handle active tab state
document.addEventListener("DOMContentLoaded", function () {
    // Retrieve active tab from local storage
    var activeTab = localStorage.getItem("activeTab");

    // If there is an active tab in local storage, set it as active
    if (activeTab) {
        var tab = document.querySelector(activeTab);
        if (tab) {
            tab.classList.add("show", "active");
        }
    }

    // Add event listener to tabs to store active tab in local storage
    var tabPanes = document.querySelectorAll(".tab-pane");
    tabPanes.forEach(function (pane) {
        pane.addEventListener("click", function () {
            // Store active tab in local storage
            localStorage.setItem("activeTab", "#" + pane.id);
        });
    });
});

</script>


@yield('jscontent')
</body>

<!-- Mirrored from wrraptheme.com/templates/lucid/hr/bs5/dist/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Sep 2023 12:26:03 GMT -->
</html>