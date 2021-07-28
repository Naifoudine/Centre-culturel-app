<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="height: max-content;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Bootstrap row sidebar -->
        <div class="container-fluid">
            <div class="row" id="body-row">
                <!-- Sidebar -->
                <div id="sidebar-container" class="d-none d-md-block sidebar-expanded">
                    <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
                    <!-- Bootstrap List Group -->
                    <ul class="list-group">
                        <!-- Separator with title -->
                        <li class="list-group-item sidebar-separator-title text-muted align-items-center menu-collapsed d-flex">
                            <small>MENU PRINCIPAL</small>
                        </li>
                        <!-- /END Separator -->

                        <li>
                            <a href="#" class="bg-dark list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                                    <span class="menu-collapsed">Tableau de bord</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('attributions.index') }}" class="bg-dark list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-calendar fa-fw mr-3"></span>
                                    <span class="menu-collapsed">Attributions</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}" class="bg-dark list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-users fa-fw mr-3"></span>
                                    <span class="menu-collapsed">Utilisateurs</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('postes.index') }}" class="bg-dark list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-desktop fa-fw mr-3"></span>
                                    <span class="menu-collapsed">Ordinateurs</span>
                                </div>
                            </a>
                        </li>
                        <!-- Separator with title -->
                        <li class="list-group-item sidebar-separator-title text-muted align-items-center menu-collapsed d-flex">
                        </li>
                        <!-- /END Separator -->
                        <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span id="collapse-icon" class="fa fa-2x mr-3 fa-angle-double-left"></span>
                                <span id="collapse-text" class="menu-collapsed">Réduire</span>
                            </div>
                        </a>
                    </ul>
                    <!-- List Group END-->
                </div>


                <div class="d-flex justify-content-center col-10 col-md-8 col-sm-10">
                    <!-- sidebar-container END -->
                    <!-- MAIN -->
                    <main class="justify-content-center col-md-12 col-sm-12 position-sticky">
                            @yield('content1')
                    </main>
                    <!-- Main Col END -->
                </div>
                <!-- body-row END -->

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>



                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

                <script>
                    // Hide submenus
                    $("#body-row .collapse").collapse("hide");

                    // Collapse/Expand icon
                    $("#collapse-icon").addClass("fa-angle-double-left");

                    // Collapse click
                    $("[data-toggle=sidebar-colapse]").click(function() {
                        SidebarCollapse();
                    });

                    function SidebarCollapse() {
                        $(".menu-collapsed").toggleClass("d-none");
                        $(".sidebar-submenu").toggleClass("d-none");
                        $(".submenu-icon").toggleClass("d-none");
                        $("#sidebar-container").toggleClass(
                            "sidebar-expanded sidebar-collapsed"
                        );

                        // Treating d-flex/d-none on separators with title
                        var SeparatorTitle = $(".sidebar-separator-title");
                        if (SeparatorTitle.hasClass("d-flex")) {
                            SeparatorTitle.removeClass("d-flex");
                        } else {
                            SeparatorTitle.addClass("d-flex");
                        }

                        // Collapse/Expand icon
                        $("#collapse-icon").toggleClass(
                            "fa-angle-double-left fa-angle-double-right"
                        );
                    }
                </script>
            </div>
        </div>
        

        <!-- <main class="py-4">
            
        </main> -->
    </div>
</body>

</html>