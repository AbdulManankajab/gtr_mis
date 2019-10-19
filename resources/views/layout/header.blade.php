<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Label - Premium Responsive Bootstrap 4 Admin & Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('/vendors/iconfonts/mdi/css/materialdesignicons.css')}}">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="{{asset('/css/demo_1/style.css')}}">
    <!-- Layout style -->
    <link rel="shortcut icon" href="../asssets/images/favicon.ico')}}" />
  </head>
  <body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header default">
      <div class="t-header-brand-wrapper">
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content">
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
          <form action="#" class="t-header-search-box">
            <div class="input-group">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
              <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
            </div>
          </form>
        </div>
      </div>
    </nav>
    <!-- partial -->
    <div class="page-body"> 
      <div class="sidebar">
        <ul class="navigation-menu">
          <li>
            <a href="index.html">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a href="#users" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">Departmets</span>
              <i class="mdi mdi-account-multiple link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="users">
              <li>
                <a href="{{asset('departments')}}">Departments</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">Users</span>
              <i class="mdi mdi-flask link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="sample-pages">
              <li>
                <a href="{{asset('user_list')}}">User List</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      @yield('content')
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="{{asset('/vendors/js/core.js')}}"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="{{asset('/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('/js/charts/chartjs.addon.js')}}"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="{{asset('/js/template.js')}}"></script>
    <script src="{{asset('/js/dashboard.js')}}"></script>
    <!-- endbuild -->
  </body>
</html>