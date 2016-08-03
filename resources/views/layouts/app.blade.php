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
<body id="app-layout">
    <header class="bg-primary">
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
    </header>
    <nav>
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
        @yield('content')
    </main>
    <footer class="text-right">
        <span class="logo">Dashcar</span> v 0.0.1
    </footer>
    <!-- JavaScripts -->
    <script src="/js/all.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
