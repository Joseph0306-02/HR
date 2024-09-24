<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.min.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="home/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="home/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="home/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

    <link rel="stylesheet" href="css/txt.css">
    <title>E-CompanyPH</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand">
                    <div class="logo"><img src="home/assets/images/logo.png" width="145" height="60"></div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img
                                                            src="home/assets/images/avatar-2.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name"></span>accepted your
                                                        invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img
                                                            src="home/assets/images/avatar-3.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name"></span>is now following
                                                        you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img
                                                            src="home/assets/images/avatar-4.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name"></span> is watching your
                                                        main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img
                                                            src="home/assets/images/avatar-5.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name"></span>accepted your
                                                        invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img
                                                    src="home/assets/images/github.png" alt="">
                                                <span>Github</span></a>
                                        </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="home/assets/images/avatar-1.jpg" alt=""
                                    class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"> User </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Settings</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar " style="background-color: #463426;>
            <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            <p style="color:white;"> Menu </p>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"
                                    style="color:black"></i>
                                <p style="color:black;">Dashboard</p>
                            </a>
                            <!--
                            <div id="submenu-1" class="collapse submenu" style="background-color: white">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse"
                                            aria-expanded="false" data-target="#submenu-1-2"
                                            aria-controls="submenu-1-2">
                                            <p style="color:black;">Employee Overview</p>
                                        </a>
                                        <div id="submenu-1-2" class="collapse submenu"
                                            style="background-color: white">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="index.html">
                                                        <p style="color:black;">Employees Dashboard</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-product.html">
                                                        <p style="color:black;">Product
                                                            List</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-product-single.html">
                                                        <p style="color:black;">Product Single</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-product-checkout.html">
                                                        <p style="color:black;">Product Checkout</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-finance.html">
                                            <p style="color:black;">Attendance/Leave</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-sales.html">
                                            <p style="color:black;">Payroll & Compensation</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-sales.html">
                                            <p style="color:black;">Payroll & Compensation</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        -->
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-shopping-cart"
                                    style="color:white"></i>
                                <p style="color:white;">Transaction</p>
                            </a>
                            <div id="submenu-5" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-6" aria-controls="submenu-5"><i class="fas fa-fw fa-table"
                                    style="color:white"></i>
                                <p style="color:white;">DTR</p>
                            </a>
                            <div id="submenu-6" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-7" aria-controls="submenu-5"><img
                                    src="home/assets/images/dollar-white.png" width="17" height="17">
                                <p style="color:white; text-indent: 10px; ">Payroll</p>
                            </a>
                            <div id="submenu-7" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-8" aria-controls="submenu-5"><img
                                    src="home/assets/images/other-white.png" width="17" height="17">
                                <p style="color:white; text-indent: 10px;">Others</p>
                            </a>
                            <div id="submenu-8" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-9" aria-controls="submenu-5"><i class="fas fa-file"
                                    style="color:white;"></i>
                                <p style="color:white; text-indent: 7px">Approval</p>
                            </a>
                            <div id="submenu-9" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-10" aria-controls="submenu-5"><i class="fas fa-users"
                                    style="color:white"></i>
                                <p style="color:white;">My Staffs</p>
                            </a>
                            <div id="submenu-10" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Staff</a>
                                    </li>
                                </ul>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Performance Overview</a>
                                    </li>
                                </ul>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Attendance</a>
                                    </li>
                                </ul>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--
                        <li class="nav-divider">
                            Features
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i>
                                Pages </a>
                            <div id="submenu-6" class="collapse submenu" style="">
                                <ul class="nav flex-column">

                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/login.html">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/404-page.html">404 page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/sign-up.html">Sign up Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/forgot-password.html">Forgot Password</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-7" aria-controls="submenu-7"><i
                                    class="fas fa-fw fa-inbox"></i>Apps <span
                                    class="badge badge-secondary">New</span></a>
                            <div id="submenu-7" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/inbox.html">Inbox</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/email-details.html">Email Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/message-chat.html">Message Chat</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-9" aria-controls="submenu-9"><i
                                    class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                            <div id="submenu-9" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/map-google.html">Google Maps</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/map-vector.html">Vector Maps</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    -->
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Dashboard </h2>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus
                                vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"
                                                class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Employees
                                            Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="ecommerce-widget">

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Total Revenue</h5>


                                </div>

                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Affiliate Revenue</h5>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Refunds</h5>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Avg. Revenue Per User</h5>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->

                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Recent Orders</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Image</th>
                                                <th class="border-0">Product Name</th>
                                                <th class="border-0">Product Id</th>
                                                <th class="border-0">Quantity</th>
                                                <th class="border-0">Price</th>
                                                <th class="border-0">Order Time</th>
                                                <th class="border-0">Customer</th>
                                                <th class="border-0">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->


                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- customer acquistion  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Customer Acquisition</h5>
                            <div class="card-body">

                                <div class="text-center">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end customer acquistion  -->
                    <!-- ============================================================== -->
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- product category  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"> Product Category </h5>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end product category  -->
                <!-- product sales  -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="mb-0"> Product Sales</h5>
                        </div>

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end product sales  -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">

                </div>
            </div>

            <div class="row">
                <!-- ============================================================== -->
                <!-- sales  -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card border-3 border-top border-top-primary">
                        <div class="card-body">
                            <h5 class="text-muted">Sales</h5>
                            <div class="metric-value d-inline-block">

                            </div>
                            <div class="metric-label d-inline-block float-right text-success font-weight-bold">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end sales  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- new customer  -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card border-3 border-top border-top-primary">
                        <div class="card-body">
                            <h5 class="text-muted">New Customer</h5>
                            <div class="metric-value d-inline-block">

                            </div>
                            <div class="metric-label d-inline-block float-right text-success font-weight-bold">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end new customer  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- visitor  -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card border-3 border-top border-top-primary">
                        <div class="card-body">
                            <h5 class="text-muted">Visitor</h5>
                            <div class="metric-value d-inline-block">

                            </div>
                            <div class="metric-label d-inline-block float-right text-success font-weight-bold">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end visitor  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- total orders  -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card border-3 border-top border-top-primary">
                        <div class="card-body">
                            <h5 class="text-muted">Total Orders</h5>
                            <div class="metric-value d-inline-block">

                            </div>
                            <div class="metric-label d-inline-block float-right text-danger font-weight-bold">

                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end total orders  -->
                    <!-- ============================================================== -->
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- total revenue  -->
                    <!-- ============================================================== -->


                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- category revenue  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Revenue by Category</h5>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end category revenue  -->
                    <!-- ============================================================== -->

                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"> Total Revenue</h5>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- ============================================================== -->
                        <!-- social source  -->
                        <!-- ============================================================== -->
                        <div class="card">
                            <h5 class="card-header"> Sales By Social Source</h5>
                            <div class="card-body p-0">
                                <ul class="social-sales list-group list-group-flush">
                                    <li class="list-group-item social-sales-content"><span
                                            class="social-sales-icon-circle facebook-bgcolor mr-2"><i
                                                class="fab fa-facebook-f"></i></span><span
                                            class="social-sales-name">Facebook</span>
                                    </li>
                                    <li class="list-group-item social-sales-content"><span
                                            class="social-sales-icon-circle twitter-bgcolor mr-2"><i
                                                class="fab fa-twitter"></i></span><span
                                            class="social-sales-name">Twitter</span>
                                    </li>
                                    <li class="list-group-item social-sales-content"><span
                                            class="social-sales-icon-circle instagram-bgcolor mr-2"><i
                                                class="fab fa-instagram"></i></span><span
                                            class="social-sales-name">Instagram</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn-primary-link">View Details</a>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end social source  -->
                        <!-- ============================================================== -->
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- ============================================================== -->
                        <!-- sales traffice source  -->
                        <!-- ============================================================== -->
                        <div class="card">
                            <h5 class="card-header"> Sales By Traffic Source</h5>
                            <div class="card-body p-0">

                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end sales traffice source  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- sales traffic country source  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Sales By Country Traffic Source</h5>
                            <div class="card-body p-0">

                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn-primary-link">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end sales traffice country source  -->
                    <!-- ============================================================== -->
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="left: 50%">
                    Copyright © 2024. All rights reserved.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="home/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="home/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="home/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="home/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="home/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="home/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="home/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="home/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="home/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="home/assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>
