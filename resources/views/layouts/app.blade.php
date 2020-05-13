<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <base href="">
    <meta charset="utf-8" />
    <title>{{config('APP_NAME')}}</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />

</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="{{route('home')}}">
                <img alt="Logo" src={{asset('/assets/media/logo-sm.png')}} />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
        </div>
    </div>

    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root" id="app">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <!-- begin:: Aside -->
        <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
            
        @include('layouts.aside')

        <!-- end:: Aside -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                    <!-- begin: Header Menu -->
                    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">

                        </div>
                    </div>

                    <!-- end: Header Menu -->

                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar">

                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                                <div class="kt-header__topbar-user">
                                    <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Olá,</span>
                                    <span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">{{Auth::user()->name}}</span>
                                    <img class="kt-hidden" alt="Pic" src="assets/media/users/300_25.jpg" />

                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">{{substr(Auth::user()->name, 0, 1)}}</span>
                                </div>
                            </div>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                                <!--begin: Head -->
                                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(assets/media/misc/bg-1.jpg)">
                                    <div class="kt-user-card__avatar">
                                        <img class="kt-hidden" alt="Pic" src="assets/media/users/300_25.jpg" />

                                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                        <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">{{substr(Auth::user()->name, 0, 1)}}</span>
                                    </div>
                                    <div class="kt-user-card__name">
                                        {{Auth::user()->name}}
                                    </div>
                                </div>

                                <!--end: Head -->

                                <!--begin: Navigation -->
                                <div class="kt-notification">
                                    <a href="{{route('user.change_password')}}" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                Meu perfil
                                            </div>
                                            <div class="kt-notification__item-time">
                                                Configurações da conta e mais
                                            </div>
                                        </div>
                                    </a>

                                    <div class="kt-notification__custom kt-space-between">
                                        <form method="post" action="{{route('logout')}}">
                                            @csrf
                                            <button type="submit" class="btn btn-label btn-label-brand btn-sm btn-bold">Logout</button>
                                        </form>
                                    </div>
                                </div>

                                <!--end: Navigation -->
                            </div>
                        </div>

                        <!--end: User Bar -->
                    </div>

                    <!-- end:: Header Topbar -->
                </div>

                <!-- end:: Header -->
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    @if($success = session()->has('success'))
                        <div class="alert alert-success">
                            <div class="alert-text">{{ session()->get('success') }}</div>
                        </div>
                    @endif
                    @yield('content')
                </div>

            <!-- begin:: Footer -->
                <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-footer__copyright">
                            {{Date('Y')}}&nbsp;&copy;&nbsp;Laravel Phonebook
                        </div>
                    </div>
                </div>

                <!-- end:: Footer -->
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#2c77f4",
                    "light": "#ffffff",
                    "dark": "#282a3c",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/global/plugins.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}" type="text/javascript"></script>

    @yield('scripts')

</body>

<!-- end::Body -->
</html>
