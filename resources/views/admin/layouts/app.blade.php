<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Plantopia - Admin</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/custom.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            
            <ul class="ml-auto navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="p-0 pr-3 nav-link" data-toggle="dropdown" href="#">
                        <img src="{{ asset('admin-assets/img/user.png') }}" class='img-circle elevation-2'
                            width="40" height="40" alt="">
                    </a>
                    <div class="p-3 dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <h4 class="mb-0 h4"><strong>{{ Auth::user()->name }}</strong></h4>
                        <div class="mb-3">{{ Auth::user()->email }}</div>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item text-danger"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="mr-2 fas fa-sign-out-alt"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        @include('admin.layouts.sidebar')

        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            2024 All Right Reserved. Terms of use Plantopia.
        </footer>

        <script src="{{ asset('admin-assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin-assets/js/adminlte.min.js') }}"></script>
    </div>
</body>

</html>
