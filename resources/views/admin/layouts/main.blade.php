<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="en" data-layout="semi-dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">

    <title>Dashboard | @yield('title', Auth::user()->role->name ?? null)</title>
    <link rel="apple-touch-icon" href="{{ asset('images/logo0.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo0.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

    @yield('css')

    <!-- BEGIN: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

@yield('body')

<body class="vertical-layout vertical-menu-modern @yield('bodyCss') navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="@yield('bodyDataCol')">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
            </div>

            <ul class="nav navbar-nav align-items-center ms-auto">

                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#"
                        data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell ficon">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>

                </li>

                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name fw-bolder">{{ Auth::user()->name }}</span>
                            <span class="user-status">{{ Auth::user()->role->name ?? '' }}</span>
                        </div>
                        <span class="avatar">
                            <img class="round"
                                src=" {{ asset('admin/app-assets/images/avatars/a.jpg') }}"
                                alt="avatar" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">


                        <a class="dropdown-item" href="{{route('change-password')}}">
                            <i class="me-50" data-feather="lock"></i>
                            Mot de passe
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                <i class="me-50" data-feather="power"></i>
                                Deconnexion
                            </a>

                        </form>

                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header px-3" style='height: 7.45rem;'>
            <ul class="nav navbar-nav flex-row justify-content-center">
                <li class="nav-item">
                    <a class="navbar-brand" href="{{route('dashboard')}}">
                        <h2 class="brand-text"><img src="{{ asset('admin/images/logo.png') }}" alt=""
                                style="width:auto; height:75px"></h2>
                    </a>
                </li>
                {{-- <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li> --}}
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">

            @if (Auth::user()->role_id == 1)
                @include('layouts.partials.menus.admin')
            @elseif (Auth::user()->role_id == 2)
            @include('layouts.partials.menus.agent')
            @else

            @endif

        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">

                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            @yield('breacrumd')
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{route('type-bien.create')}}">
                                    <i class="me-1" data-feather="check-square"></i>
                                    <span class="align-middle">Enregistrement un bien</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    @include('layouts.partials.alert.welcome')
                    @include('layouts.partials.alert.danger')
                    @include('layouts.partials.alert.success')
                    @include('layouts.partials.alert.primary')
                    @include('layouts.partials.alert.warning')
                </div>
                <section id="dashboard-ecommerce">
                    <div class="match-height">
                        @yield('content')
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-start d-block d-md-inline-block mt-25">
                COPYRIGHT &copy; {{date('Y')}}
                {{-- <a  class="ms-25" href="http://yulcom-technologies.com/" target="_blank">
                    Yulcom technologies
                </a> --}}
                <span class="d-none d-sm-inline-block">
                    , All rights Reserved
                </span>
            </span>

        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin/app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/core/app.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/customizer.min.js') }}"></script>

    <script src="{{ asset('admin/app-assets/js/home/system.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/home/params.js') }}"></script>
    <script defer src="{{ asset('admin/app-assets/js/home/sweetalert.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>

    <!-- END: Theme JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    @yield('js')
    @yield('js2')

</body>
<!-- END: Body-->

</html>
