<?php
require_once '../../controller/config.php';
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['username'])) {
    header("location: ../../login.php");
}

$page = "Data Sekolah";
if (isset($_POST) && !empty($_POST)) {
    $data = $database->sanitize($_POST['namaSekolah']);

    $database->addSekolah($data);
}

$res = $database->getSekolah();
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
    <title>Data Sekolah - Superuser</title>

    <link href="../../src/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../src/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <?php include 'components/sidebar/logo.html' ?>
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
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
            <div class="container-fluid">
                <?php
                include 'components/content/data--sekolah--cards-group.php';
                include 'components/content/atomic/tables--daftar-sekolah.php';
                ?>
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
            <?php
            include 'components/content/modal--tambah-data-sekolah.php';
            include 'components/footer.html';
            ?>
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
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../src/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../src/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../../src/dist/js/app-style-switcher.js"></script>
    <script src="../../src/dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../src/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../src/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="../../src/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../src/dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="../../src/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../src/dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script type="text/javascript">
        $('.toast').toast('show');
    </script>
</body>

</html>