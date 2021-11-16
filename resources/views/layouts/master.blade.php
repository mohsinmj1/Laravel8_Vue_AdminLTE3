<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
        .notify {
            top: 0;
            right: 0px;
        }

    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li>
	                        <ul class="nav navbar-nav hidden-xs" style="padding-top: 5px;padding-right: 15px;">
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle waves-effect" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-question" style="font-size: 13px"></i> Help<span class="caret"></span></a>
	                                        <ul class="dropdown-menu">
	                                            <li>
	                                                    <a href="/faq"  class="waves-effect">FAQ </a>
	                                                
	                                            </li>
	                                            
	                                            	<li><a href="/supportDesk" class="waves-effect">Support Desk</a>
	                                            	</li>
                                                    
	                                            	<li><a href="/ticket"  class="waves-effect">Create Ticket</a>
	                                            	</li>
	                                            
                                                
	                                        </ul>
	                            </li>
	                        </ul>
	
	                    </li>
              
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell" style="font-size: 20px"></i>
                            <span class="notify badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="min-width: 260px;">
                            <span class="dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <router-link to="/dashboard" class="brand-link">
                <img src="{{ asset('/images/logo2.png') }}" alt="The Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">{{ 'Online' }}</span>
            </router-link>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <router-link to="/profile">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ auth()->user()->photo }}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">

                            {{ Auth::user()->name }}
                            <span class="d-block text-muted">
                                {{ Ucfirst(Auth::user()->type) }}
                            </span>
                        </div>
                    </div>
                </router-link>

                <!-- Sidebar Menu -->
                @include('layouts.sidebar-menu')
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        {{-- Content Wrapper. Contains page content --}}
        <div class="content-wrapper">
            {{-- Main content --}}

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    {{-- <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row --> --}}
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <router-view></router-view>

            <vue-progress-bar></vue-progress-bar>

            {{-- /.content --}}
        </div>
        {{-- /.content-wrapper --}}

        {{-- Main Footer --}}
        <footer class="main-footer">
            {{-- To the right --}}
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.0
            </div>
            {{-- Default to the left --}}
            <strong>Copyright &copy; 2014-2022 <a href="https://tms.skynetsolutionz.com">TMS</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    {{-- ./wrapper --}}

    @auth
        <script>
            window.user = @json(auth()->user())
        </script>
    @endauth
    <script src="{{ mix('/js/app.js') }}"></script>

</body>

</html>
