<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>

 <html lang="en">
 
 <head>
     <!--    Meta    -->
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
     <title>@yield('title') &mdash; {{ config('app.name') }}</title>
     
     <!--     Fonts and icons     -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     
     <!--     link    -->
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
     <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}"/>
     <link rel="stylesheet" href="{{asset('assets/admin/css/light-bootstrap-dashboard.css?v=2.0.0')}}"/>
     <link rel="stylesheet" href="{{asset('assets/admin/datatables/css/jquery.dataTables.min.css')}}">    
     <link rel="stylesheet" href="{{asset('assets/admin/css/custom.css')}}">
     @yield('css')
 </head>
 
 <body>
     <div class="wrapper">
         <!-- sidebar -->
         <div class="sidebar" data-image="{{asset('assets/admin/img/sidebar.jpg')}}">
             <div class="sidebar-wrapper" style="overflow: hidden;">
                 <div class="logo">
                     <a href="" class="simple-text">
                         Malang Paradise
                     </a>
                 </div>
                 <ul class="nav">
                     <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
                         {{-- <a class="nav-link" href="{{ route('admin.home') }}">
                             <i class="nc-icon nc-chart-pie-35"></i>
                             <p>Dashboard</p>
                         </a> --}}
                     </li>
                     <li class="nav-item {{ Request::is('admin/kategori') || Request::is('admin/kategori/*') ? 'active' : '' }}">
                         <a class="nav-link" href="{{ route('admin.kategori') }}">
                             <i class="nc-icon nc-square-pin"></i>
                             <p>Kategori</p>
                         </a>
                     </li>
                     {{-- <li class="nav-item {{ Request::is('admin/postingan') || Request::is('admin/postingan/*') ? 'active' : '' }}">
                         <a class="nav-link" href="{{ route('admin.postingan') }}">
                             <i class="nc-icon nc-square-pin"></i>
                             <p>Postingan</p>
                         </a>
                     </li> --}}
                     <li class="nav-item {{ Request::is('admin/user') || Request::is('admin/user/*') ? 'active' : '' }}">
                         <a class="nav-link" href="{{ route('admin.user') }}">
                             <i class="nc-icon nc-circle-09"></i>
                             <p>User</p>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
 
         <div class="main-panel">
 
             <!-- Navbar -->
             <nav class="navbar navbar-expand-lg navbar-sticky" color-on-scroll="500">
                 <div class="container-fluid">
                     <a class="navbar-brand" href="#"> @yield('title') </a>
                     <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-bar burger-lines"></span>
                         <span class="navbar-toggler-bar burger-lines"></span>
                         <span class="navbar-toggler-bar burger-lines"></span>
                     </button>
                     <div class="collapse navbar-collapse justify-content-end" id="navigation">
                         <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                {{-- <span class="no-icon">Welcome, {{ Auth::user()->name }}</span> --}}
                                </a>
                            </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/logout') }}">
                                     <span class="no-icon">Log out</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </nav>
             <!-- End Navbar -->
 
             <!-- Content -->
             <div class="content">
                @yield('content')
             </div>
             <!-- End Content -->
 
             <!-- Footer -->
             <footer class="footer">
                 <div class="container-fluid">
                     <nav>
                         <p class="copyright text-center">
                             ©
                             <script>
                                 document.write(new Date().getFullYear())
                             </script>
                             <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                         </p>
                     </nav>
                 </div>
             </footer>
             <!-- End Footer -->
         </div>
     </div>
 </body>
 <!--   Core JS Files   -->
 <script src="{{asset('assets/superadmin/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/superadmin/js/core/popper.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/superadmin/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="{{asset('assets/superadmin/js/plugins/bootstrap-switch.js')}}"></script>
 <!--  Google Maps Plugin    -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!--  Chartist Plugin  -->
 <script src="{{asset('assets/superadmin/js/plugins/chartist.min.js')}}"></script>
 <!--  Notifications Plugin    -->
 <script src="{{asset('assets/superadmin/js/plugins/bootstrap-notify.js')}}"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src="{{asset('assets/superadmin/js/light-bootstrap-dashboard.js?v=2.0.0')}}" type="text/javascript"></script>
 <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
 <script src="{{asset('assets/superadmin/js/demo.js')}}"></script>
 <script type="text/javascript">
     $(document).ready(function() {
         // Javascript method's body can be found in assets/js/demos.js
         demo.initDashboardPageCharts();
 
         //demo.showNotification();
 
     });
 </script>
 <!-- Plugin -->
 <script src="{{asset('assets/superadmin/datatables/js/jquery.dataTables.min.js')}}"></script>
 <script>
     $(document).ready(function() {
         $('table').DataTable({
             "autoWidth": false,
             "info": false,
         });
     });
 </script>
 @yield('js')
 </html>