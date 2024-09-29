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
        @include('home.header')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('home.sidenav')
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
                                <!--
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
                            -->
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-14 col-14">
                                <div class="card">
                                    <div class="card-body" style="height: 500px">
                                        <h5 class="text-muted">Employee Overview</h5>
                                        <hr>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-14 col-14" id="row1">
                                <div class="card">
                                    <div class="card-body" style="height: 500px">
                                        <table style="width: 60%">
                                            <tr>
                                        <th class="border-0"> <a href="#"><h5 class="text-muted">Pending Transactions</h5></a></th>
                                        <th class="border-0"> <a href="#"><h5 class="text-muted">Announcement</h5></a></th>
                                            </tr>
                                        </table>
                                        <hr>
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
        @include('home.footer')
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
