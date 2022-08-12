<?php
require_once '../../controller/config.php';
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['username'])) {
    header("location: ../../login.php");
}

date_default_timezone_set('Asia/Hong_kong');
$Hour = date('G');

if ($Hour >= 5 && $Hour <= 11) {
    $greet = "Good Morning";
} else if ($Hour >= 12 && $Hour <= 18) {
    $greet = "Good Afternoon";
} else if ($Hour >= 19 || $Hour <= 4) {
    $greet = "Good evening";
}

$page = "Dashboard";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Superuser Dashboard</title>
    <!-- Custom CSS -->
    <link href="../../src/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../../src/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../src/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../../src/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <?php include 'components/sidebar/logo.html' ?>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <?php
                        include 'components/top-navigation/notification.html';
                        include 'components/top-navigation/settings.html';
                        ?>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <?php
                        include 'components/top-navigation/search.html';
                        include 'components/top-navigation/user.html';
                        ?>
                    </ul>
                </div>
            </nav>
        </header>

        <?php include 'components/sidebar/list.html' ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <?php include 'components/content/greetings.php' ?>
                </div>
            </div>
            <div class="container-fluid">
                <?php include 'components/content/dashboard--cards-group.php' ?>
                <!-- *************************************************************** -->
                <!-- End First Cards -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Sales Charts Section -->
                <!-- *************************************************************** -->


                <!-- *************************************************************** -->
                <!-- End Sales Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Location and Earnings Charts Section -->
                <!-- *************************************************************** -->


                <!-- *************************************************************** -->
                <!-- End Location and Earnings Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Top Leader Table -->
                <!-- *************************************************************** -->


                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include 'components/footer.html' ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../src/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../src/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../../src/dist/js/app-style-switcher.js"></script>
    <script src="../../src/dist/js/feather.min.js"></script>
    <script src="../../src/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../src/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../src/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../../src/assets/extra-libs/c3/d3.min.js"></script>
    <script src="../../src/assets/extra-libs/c3/c3.min.js"></script>
    <script src="../../src/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../src/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../src/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../../src/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../src/dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>