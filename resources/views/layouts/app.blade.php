<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashcar</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/summernote.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ auth()->user()->name }}</strong>
                             </span> <span class="text-muted text-xs block">Indstillinger <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="grid_options.html"><i class="fa fa-tachometer nav--ikon-farve"></i> <span class="nav-label">Kontrolpanel</span></a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-desktop nav--ikon-farve"></i> <span class="nav-label">Hjemmeside </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/pages">Side Oversigt</a></li>
                            <li><a href="/templates">Udseende</a></li>
                            <li><a href="#">indstillinger</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-folder-open nav--ikon-farve"></i> <span class="nav-label">Upload </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/files">Filer / Billeder</a></li>
                            <li><a href="/trashcan">Gendan</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-car nav--ikon-farve"></i> <span class="nav-label">Biler </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#">Bil database</a></li>
                            <li><a href="#">Opret ny bil</a></li>
                            <li><a href="#">Henvendelser <span class="label label-info pull-right">12</span></a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-building nav--ikon-farve"></i> <span class="nav-label">Virksomhed </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#">Kontakt information</a></li>
                            <li><a href="#">Ansatte</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>
         <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
<!--             <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form> -->
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message"></span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>This is main title</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary">This is action area</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
                @yield('content')
            </div>
            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>

        </div>


</body>



<!-- <body id="app-layout">
   <!--  <header class="bg-primary">
        <span class="fa fa-bars menu-toggler"></span>
        <div class="logo">Dashcar</div>
        <ul class="user-menu">
            <li class="notifications"><span class="badge">4</span><span class="fa fa-bell"></span></li>
            <li class="user"><img src="/images/kasper.png"> {{ auth()->user()->name }} <span class="fa fa-angle-down"></span>
                <ul class="user-submenu">
                    <li><a href="/user">Min konto <span class="fa fa-user"></span></a></li>
                    <li><a href="/user/settings">Indstillinger <span class="fa fa-cog"></span></a></li>
                    <li><a href="/user/password">Ændre kode <span class="fa fa-lock"></span></a></li>
                    <li><a href="/logout"><span class="fa fa-power-off"></span> Log ud</a></li>
                </ul>
            </li>
        </ul>
    </header> -->
   <!--  <nav class="kontrol-nav">
    <div class="nav--brand">
        <img class="nav--brand-logo" src="http://cliparts.co/cliparts/pTo/d9M/pTod9M9nc.png">
        <p class="nav--brand-tekst"> {{ auth()->user()->name }}</p>

    </div>
        <ul>
            <li><a href="/"><span class="fa fa-tachometer"></span>Kontrolpanel</a></li>
            <li class="section"><span class="fa fa-desktop"></span>Hjemmeside</li>
            {{--<li><a href="/new-page">Ny side</a></li>--}}
            <li><a href="/pages">Side oversigt</a></li>
            <li><a href="/templates">Udseende</a></li>
            <li><a href="#">Indstillinger</a></li>
            <li class="section"><span class="fa fa-folder-open"></span>Upload</li>
            <li><a href="/files">Filer / Billeder</a></li>
            <li><a href="/trashcan">Skraldespand</a></li>
            <li class="section"><span class="fa fa-car"></span>Biler</li>
            <li><a href="#">Bil database</a></li>
            <li><a href="#">Opret ny bil</a></li>
            <li><a href="#">Henvendelser</a></li>
            <li class="section"><span class="fa fa-building"></span>Virksomhed</li>
            <li><a href="#">Kontakt information</a></li>
            <li><a href="#">Ansatte</a></li>
        </ul>
    </nav>
    <main>
    <header class="header--top">
        <span class="fa fa-bars menu-toggler"></span>
        <div class="page--title">Dashcar</div> -->
<!--         <ul class="user-menu">
            <li class="notifications"><span class="badge">4</span><span class="fa fa-bell"></span></li>
            <li class="user"> {{ auth()->user()->name }} <span class="fa fa-angle-down"></span>
                <ul class="user-submenu">
                    <li><a href="/user">Min konto <span class="fa fa-user"></span></a></li>
                    <li><a href="/user/settings">Indstillinger <span class="fa fa-cog"></span></a></li>
                    <li><a href="/user/password">Ændre kode <span class="fa fa-lock"></span></a></li>
                    <li><a href="/logout"><span class="fa fa-power-off"></span> Log ud</a></li>
                </ul>
            </li>
        </ul> -->
<!--     </header>
        @yield('content')
    </main>
    <footer class="text-right">
        <span class="logo">Dashcar</span> v 0.0.1
    </footer>
    <!-- JavaScripts -->
<!--     <script src="/js/all.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body> -->
<script src="/js/all.js"></script>
</html>
