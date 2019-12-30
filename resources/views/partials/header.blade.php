@inject('request', 'Illuminate\Http\Request')
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@lang('global.global_title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('backend') }}/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{ url('backend') }}/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ url('backend') }}/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="{{ url('backend') }}/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">

    <link href="{{ url('backend') }}/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="{{ url('backend') }}/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
    <!-- Custom Stylesheet -->
    <link href="{{ url('backend') }}/css/style.css" rel="stylesheet">

</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{ url('/behindthescreen') }}">
                    <b class="logo-abbr"><img src="{{ url('backend') }}/images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="{{ url('backend') }}/images/logo-compact.png" alt=""></span>
                    <span class="brand-title" style="color: #fff;">
                        <p>@lang('global.global_title')</p>
                        <!-- <img src="{{ url('backend') }}/images/logo-text.png" alt=""> -->
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{ url('backend/default-avatar.png') }}" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                           <a href="{{ url('/adminProfile') }}"><i class="icon-user"></i> <span>@lang('global.head.profile')</span></a>
                                        </li>
                                        <li>
                                           <a href="{{ url('/changePassword') }}"><i class="icon-settings"></i> <span>@lang('global.head.setting')</span></a>
                                        </li>
                                        <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="icon-key"></i> <span>@lang('global.head.logout')</span></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @php
           // $var = \Request::route()->getName();
            $var =  Request::segment(1);
        @endphp
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                     <li class="{{ Request::segment(1) ==  '' ? 'active' : ''  }}">
                       <a href="{{ url('/behindthescreen') }}" class="{{ Request::path() ==  '/behindthescreen' ? 'active' : ''  }}" > <i class="icon-speedometer menu-icon"></i><span class="nav-text">@lang('global.menu.dashboard')</span>
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) ==  'category' ? 'active' : '' }}">
                        <a href="{{ url('/category') }}" class="{{ Request::segment(1) ==  'category' ? 'active' : '' }}" > <i class="icon-grid menu-icon"></i><span class="nav-text">@lang('global.category.tab')</span>
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) ==  'setting' ? 'active' : '' }}">
                        <a href="{{ url('/setting') }}" class="{{ Request::segment(1) ==  'setting' ? 'active' : '' }}" > <i class="icon-wrench menu-icon"></i><span class="nav-text">@lang('global.setting.tab')</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text"> Layouts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./layout-blank.html">Blank</a></li>
                            <li><a href="./layout-one-column.html">One Column</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->