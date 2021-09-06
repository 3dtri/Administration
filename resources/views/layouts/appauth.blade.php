<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
 @include('layouts/styles')
</head>
<body class="dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

   
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
          @yield('content')
    </div>
   
  </div>
  <!-- ./wrapper -->
  @include('layouts/scripts')
  
  </body>
  </html>
  
