<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') | www.delowar.me</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('/') }}/userDash/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url('/') }}/userDash/assets/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('/') }}/userDash/assets/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/userDash/assets/css/custom2.css">
    <link href="{{ url('/') }}/userDash/assets/css/datepicker.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ url('/') }}/userDash/assets/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('/') }}/userDash/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="{{ url('/') }}/userDash/assets/js/sharer.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />

    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap-select.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}/">Welcome Master</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <span class="notice">
                        Coded by Delowar Hossain
                        <a href="http://www.delowar.me" class="btn btn-link text-warning" target="_blank">Visit Site</a>
                    </span>
                    
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li>
                            <a href="{{ url('/') }}/userdashboad"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li> -->
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Basic<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/') }}/index"><i class="fa fa-address-book fa-fw"></i> Index PHP</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}/header"><i class="fa fa-address-book fa-fw"></i> Header PHP</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}/style"><i class="fa fa-address-book fa-fw"></i> Style CSS</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}/menu"><i class="fa fa-sign-in fa-fw"></i> Calling Menu in Header</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}/GeneralPost"><i class="fa fa-exchange fa-fw"></i> General Post Query</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gears fa-fw"></i> Settings</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        @yield('content')
