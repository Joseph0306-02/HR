<div class="nav-left-sidebar " style="background-color: #463426;>
    <div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="d-xl-none d-lg-none" href="#">Logistics Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                <li class="nav-divider">
                    <center>
                        <p style="color:white;">
                            <a href="{{ url('/dashboard') }}" style="color: white;">DASHBOARD</a>
                        </p>
                    </center>
                    
                </li>

                    
                    <div id="submenu-1" class="collapse submenu" style="background-color: white">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse"
                                    aria-expanded="false" data-target="#submenu-1-2"
                                    aria-controls="submenu-1-2">
                                    <p style="color:black;">Employee </p>
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
                
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                        data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-shopping-cart"
                            style="color:white"></i>
                        <p style="color:white;">Project Management</p>
                    </a>
                    <div id="submenu-5" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/projects') }}" style="color: white;">Projects Request</a>
                                <a class="nav-link" href="{{ url('/approval') }}" style="color: white;">Project Approval</a>
                                <a class="nav-link" href="{{ url('/tracker') }}" style="color: white;">Progress Tracker</a>
                                
                            </li>
                        </ul>
                    </div>
                </li>
                
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                        data-target="#submenu-7" aria-controls="submenu-5"><img
                            src="home/assets/images/dollar-white.png" width="17" height="17">
                        <p style="color:white; text-indent: 10px; ">Asset Management</p>
                    </a>
                    <div id="submenu-7" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href=" {{ url('/assettracking') }}" style="color: white;">Asset Monitoring</a>
                                <a class="nav-link" href=" {{ url('/store') }}  " style="color: white;">Asset Review</a>
                                <a class="nav-link" href=" {{ url ('/tracker') }}" style="color: white;">Asset Utilization</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                        data-target="#submenu-8" aria-controls="submenu-5"><img
                            src="home/assets/images/other-white.png" width="17" height="17">
                        <p style="color:white; text-indent: 10px;">Warehouse </p>
                    </a>
                    <div id="submenu-8" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/managementcontrol') }}" style="color: white;">Inventory Management Control </a>
                                <a class="nav-link" href="{{ url('/warehouselayout') }}" style="color: white;">Warehouse Layout</a>
                                <a class="nav-link" href="{{ url('/shipping') }}" style="color: white;">Shipping Audit </a>
                               
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                        data-target="#submenu-9" aria-controls="submenu-5"><i class="fas fa-file"
                            style="color:white;"></i>
                        <p style="color:white; text-indent: 7px">Procurment</p>
                    </a>
                    <div id="submenu-9" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/performance') }}" style="color: white;">Automated Performance Dashboard</a>
                                <a class="nav-link" href=" {{ url('/forecasting') }}  " style="color: white;">Performance Forecasatingw</a>
                                <a class="nav-link" href=" {{ url('/forecasting') }} " style="color: white;">Procurment Analytics</a>
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