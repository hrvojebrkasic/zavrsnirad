<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>KK Sisak | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.css") }}" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />

    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
</head>
<body class="skin-blue">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="{{URL::to('index')}}" class="logo"><b>KK Sisak</b></a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <aside class="main-sidebar">

        <section class="sidebar">

            <ul class="sidebar-menu">
                <li class="header"><a href="{{URL::to('admin')}}">ADMIN</a></li>
                <li class="treeview">
                    <a href="#"><span>Članci</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/create')}}">Dodaj novi članak</a></li>
{{--                        <li><a href="{{URL::to('admin/articles')}}">All articles</a></li>--}}
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><span>Lige</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/leagues/create')}}">Dodaj novu ligu</a></li>
                        {{--<li><a href={{URL::to('admin/leagues/seniori')}}>Seniorska liga</a></li>--}}
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><span>Ekipe</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/teams/create')}}">Dodaj novu ekipu</a></li>
                        <li><a href={{URL::to('admin/teams')}}>Popis svih ekipa</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><span>Utakmice</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/games/create')}}">Dodaj utakmicu</a></li>
                        <li><a href={{URL::to('admin/games')}}>Popis utakmica</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{URL::to('/auth/logout')}}">Logout</a>
                </li>
            </ul>
        </section>
    </aside>

    <div class="content-wrapper">
        <section class="content">

            @yield('content')

        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            {{--Anything you want--}}
        </div>
        <!-- Default to the left -->
        <strong>Copyright © 2015 <a href="#">Hrvoje Brkašić</a>.</strong> All rights reserved.
    </footer>

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{URL::to('js/custom.jquery.js')}}" type="text/javascript"></script>

<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>

@yield('beforeBodyEnd')
</body>
</html>