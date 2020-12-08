<?php include('includes/getinfo.php');
require('includes/header.php');
require('includes/sidebar.php');
?>
<title>Trang chủ</title>
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Trang chủ</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Trang chủ</a>
                        <a href="#!" class="breadcrumb">Bảng quản trị</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Summery -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col l3 m6 s12">
                        <div class="card danger-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5"><div id="temp"><?php echo $temperature;?></div> ºC</h2>
                                        <h6 class="white-text op-5 light-blue-text">Nhiệt độ</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">ac_unit</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="card info-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5"><div id="humid"><?php echo $humidity;?></div>%</h2>
                                        <h6 class="white-text op-5">Độ ẩm</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">horizontal_distribute</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    
                    <div class="col l3 m6 s12">
                        <div class="card success-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5"><div id="distance"><?php echo $distance;?></div></h2>
                                        <h6 class="white-text op-5 text-darken-2">Thời gian xem TV còn lại</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">horizontal_distribute</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <footer class="center-align m-b-30">All Rights Reserved by Hoang Le. Designed and Developed by <a href="https://hzv.io">HZV.io</a>.</footer>
        </div>
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>


    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
    <script src="dist/js/refresh.js"></script>

<?php require('includes/footer.php');?>
</body>

</html>
