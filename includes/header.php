<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- chartist CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <div class="container" id="output"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- This page CSS -->
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper" id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Material Admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <header class="topbar">
        <!-- ============================================================== -->
        <!-- Navbar scss in header.scss -->
        <!-- ============================================================== -->
        <nav>
            <div class="nav-wrapper">
                <!-- ============================================================== -->
                <!-- Logo you can find that scss in header.scss -->
                <!-- ============================================================== -->
                <a href="javascript:void(0)" class="brand-logo">
                        <span class="icon">
                            <img class="light-logo" src="assets/images/logo-light-icon.png">
                            <img class="dark-logo" src="assets/images/logo-icon.png">
                        </span>
                    <span class="text">
                            <img class="light-logo" src="assets/images/logo-light-text.png">
                            <img class="dark-logo" src="assets/images/logo-text.png">
                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- Logo you can find that scss in header.scss -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Left topbar icon scss in header.scss -->
                <!-- ============================================================== -->
                <ul class="left">
                    <li class="hide-on-med-and-down">
                        <a href="javascript: void(0);" class="nav-toggle">
                            <span class="bars bar1"></span>
                            <span class="bars bar2"></span>
                            <span class="bars bar3"></span>
                        </a>
                    </li>
                    <li class="hide-on-large-only">
                        <a href="javascript: void(0);" class="sidebar-toggle">
                            <span class="bars bar1"></span>
                            <span class="bars bar2"></span>
                            <span class="bars bar3"></span>
                        </a>
                    </li>

                </ul>
                <!-- ============================================================== -->
                <!-- Left topbar icon scss in header.scss -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right topbar icon scss in header.scss -->
                <!-- ============================================================== -->
                <ul class="right">
                    <!-- ============================================================== -->
                    <!-- Profile icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img src="assets/images/users/2.jpg" alt="user" class="circle profile-pic"></a>
                        <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="assets/images/users/2.jpg" alt="user"></div>
                                    <div class="u-text">
                                        <h4>Steve Harvey</h4>
                                        <p>steve@gmail.com</p>
                                        <a class="waves-effect waves-light btn-small red white-text">View Profile</a>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="material-icons">account_circle</i> My Profile</a></li>
                            <li><a href="#"><i class="material-icons">account_balance_wallet</i> My Balance</a></li>
                            <li><a href="#"><i class="material-icons">inbox</i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="material-icons">settings</i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="material-icons">power_settings_new</i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right topbar icon scss in header.scss -->
                <!-- ============================================================== -->
            </div>
        </nav>
        <!-- ============================================================== -->
        <!-- Navbar scss in header.scss -->
        <!-- ============================================================== -->
    </header>