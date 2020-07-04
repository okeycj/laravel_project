<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('title')
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="ag-ensg-ts.com" name="author">
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('assets/css/lib.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css?version=4.4.0') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/feather/style.css') }}" rel="stylesheet">
</head>

<body class="menu-position-side menu-side-left full-screen">
    <div class="all-wrapper solid-bg-all">
        <div class="layout-w" style="min-height: 100vh;">
            <!--------------------
        START - Mobile Menu
        -------------------->
            <div class="menu-mobile menu-activated-on-click color-scheme-bright">
                <div class="mm-logo-buttons-w">
                    <a class="mm-logo" href="{{ route('dashboard') }}">
                        <img src="{{ asset('assets/img/logo-x2.png') }}" alt="logo" style="height: 35px;">
                    </a>
                    <div class="mm-buttons">
                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-and-user" style="padding-bottom: 0;">
                    <div class="logged-user-w text-center p-4">
                        <div class="logged-user-info-w ml-0">
                            <div class="logged-user-name mb-1">
                                {{ Auth::user()->name }}
                            </div>
                            <div class="logged-user-role"><?php 
                            // if($user->data()->user_role == 'Supervisor User'){echo "Admin User";}else{echo "User";}
                            ?></div>
                        </div>
                    </div>
                    <!--------------------
            START - Mobile Menu List
            -------------------->

                    <ul class="main-menu">
                        <li <?php if ($title == "Profile"){echo "class=\"active\"";} ?>>
                            <a href="{{ route('profile.index') }}">
                                <div class="icon-w">
                                    <div class="icon-user"></div>
                                </div><span>Profile</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Dashboard"){echo "class=\"active\"";} ?>>
                            <a href="" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-grid-squares-22"></div>
                                </div>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Payments"){echo "class=\"active\"";} ?>>
                            <a href="{{ route('payments.index') }}" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                </div>
                                <span>Payments</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Ministries"){echo "class=\"active\"";} ?>>
                            <a href="{{ route('ministries.index') }}" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="fa fa-university"></div>
                                </div>
                                <span>Ministries</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Budgets"){echo "class=\"active\"";} ?>>
                            <a href="{{ route('budgets.index') }}" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-users"></div>
                                </div>
                                <span>Budgets</span>
                            </a>
                        </li>
                        <?php
                        //  if ($user->data()->user_role == 'Supervisor User') {
                             ?>
                        <li <?php if ($title == "Users"){echo "class=\"active\"";} ?>>
                            <a href="{{ route('users.index') }}" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="icon-people"></div>
                                </div>
                                <span>Users</span>
                            </a>
                        </li>
                        <?php 
                            // } 
                        ?>
                        <li>                        
                            <a href="{{ route('profile.index') }}">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-fingerprint"></div>
                                </div>
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <!-- <div class="icon-w">
                                    <div class="icon-logout"></div>
                                </div>
                                <span>Logout</span>
                            </a> -->
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <div class="icon-w">
                                    <div class="icon-logout"></div>
                                </div>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    <!--------------------
            END - Mobile Menu List
            -------------------->
                </div>
            </div>
        <!--------------------
        END - Mobile Menu
        -------------------->
        <!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w selected-menu-color-light menu-activated-on-hover menu-has-selected-link color-scheme-light color-style-default menu-position-side menu-side-left menu-layout-full sub-menu-style-over">
            <div class="logo-w">
                <a class="logo mb-3 mt-3" href="{{ route('dashboard') }}">
                    <div class="p-2">
                        <img src="{{ asset('assets/img/logo-x2.png') }}" alt="logo" style="width: 80%; text-align: left; display: inline-block;">
                    </div>
                </a>
            </div>
            <div <?php if ($title == "Dashboard"){echo "class=\"border-0 logged-user-w avatar-inline\"";} else{echo "class=\"logged-user-w avatar-inline\"";} ?>>
                <div class="logged-user-i">
                    <div class="logged-user-info-w p-0">
                        <div class="logged-user-name mb-1">
                        {{ Auth::user()->name }}
                        </div>
                        <div class="logged-user-role"><?php 
                        // if($user->data()->user_role == 'Supervisor User'){echo "Admin User";}else{echo "User";}
                        ?></div>
                    </div>
                    <div class="logged-user-toggler-arrow">
                        <div class="os-icon os-icon-chevron-down"></div>
                    </div>
                    <div class="logged-user-menu color-style-bright">
                        <a href="{{ route('profile.index') }}">
                            <div class="logged-user-avatar-info">
                                <!--<div class="avatar-w">-->
                                <!--    <img alt="" src="../assets/img/avatar5.svg" style="background: white;">-->
                                <!--</div>-->
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name mb-1">
                                        {{ Auth::user()->name }}
                                    </div>
                                    <div class="logged-user-role">
                                        <?php
                                        //  if($user->data()->user_role == 'Supervisor User'){echo "Admin User";}else{echo "User";}
                                         ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="bg-icon">
                            <i class="os-icon os-icon-fingerprint"></i>
                        </div>
                        <ul>
                            <li>
                                <a href="{{ route('profile.index') }}"><i class="os-icon os-icon-fingerprint"></i><span>Change Password</span></a>
                            </li>
                            <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <div class="icon-w">
                                    <div class="icon-logout"></div>
                                </div>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="main-menu pb-3">
                <li <?php if ($title == "Profile"){echo "class=\"active\"";} ?>>
                    <a href="{{ route('profile.index') }}" class="">
                        <div class="icon-w">
                            <div class="icon-user"></div>
                        </div>
                        <span>Profile</span>
                    </a>
                </li>
                <li <?php if ($title == "Dashboard"){echo "class=\"active\"";} ?>>
                    <a href="{{ route('dashboard') }}" class="">
                        <div class="icon-w">
                            <div class="os-icon os-icon-grid-squares-22"></div>
                        </div>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li <?php if ($title == "Payments"){echo "class=\"active\"";} ?>>
                    <a href="{{ route('payments.index') }}" class="">
                        <div class="icon-w">
                            <div class="os-icon os-icon-wallet-loaded"></div>
                        </div>
                        <span>Payments</span>
                    </a>
                </li>
                <li <?php if ($title == "Ministries"){echo "class=\"active\"";} ?>>
                    <a href="{{ route('ministries.index') }}" class="">
                        <div class="icon-w">
                            <div class="fa fa-university"></div>
                        </div>
                        <span>Ministries</span>
                    </a>
                </li>
                <li <?php if ($title == "Budgets"){echo "class=\"active\"";} ?>>
                    <a href="{{ route('budgets.index') }}" class="">
                        <div class="icon-w">
                            <div class="os-icon os-icon-users"></div>
                        </div>
                        <span>Budgets</span>
                    </a>
                </li>
                <?php 
                // if ($user->data()->user_role == 'Supervisor User') {
                    ?>
                <li <?php if ($title == "Users"){echo "class=\"active\"";} ?>>
                    <a href="{{ route('users.index') }}" class="pl-lg-1">
                        <div class="icon-w">
                            <div class="icon-people"></div>
                        </div>
                        <span>Users</span>
                    </a>
                </li>
                <?php 
                    // } 
                ?>
            </ul>
            <div class="row m-0 pt-5 mt-5 mb-3">
                <!-- <div class="col-12 text-center mb-4 p-0">
                    <img width="70px" src="../assets/img/firs.png" alt="FIRS">
                </div> -->
                <div class="col-12 text-center p-0">
                    <p class="label m-0">Copyright © <?php echo date('Y'); ?> ELNINO</p>
                </div>
            </div>
        </div>
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
            <div class="content-i">

        @yield('content')
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('assets/js/validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/mindmup-editabletable.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/alert.js') }}"></script>
    <script src="{{ asset('assets/js/button.js') }}"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
    <script src="{{ asset('assets/js/collapse.js') }}"></script>
    <script src="{{ asset('assets/js/dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/modal.js') }}"></script>
    <script src="{{ asset('assets/js/tab.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip.js') }}"></script>
    <script src="{{ asset('assets/js/popover.js') }}"></script>
    <script src="{{ asset('assets/js/demo_customizer.js?version=4.4.0') }}"></script>
    <script src="{{ asset('assets/js/main.js?version=4.4.0') }}"></script>
</body>

</html>
