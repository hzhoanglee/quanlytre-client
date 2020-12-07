<?php
include('includes/roominfo.php');
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
                <a href="#!" class="breadcrumb">Tình trạng phòng</a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Container fluid scss in scafholding.scss -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col s12">
                <h5 class="card-title m-t-40">Thông tin trực tiếp trong phòng</h5>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col l3 m6">
                <div class="card">
                    <div class="d-flex flex-row">
                        <div class="p-5 blue">
                            <h3 class="white-text p-10 m-b-0"><i class="ti-themify-favicon-alt"></i></h3></div>
                        <div class="p-10">
                            <div id="OutOfRange"></div>
                            <span class="text-muted">Trong tầm kiểm soát</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col l3 m6">
                <div class="card">
                    <div class="d-flex flex-row">
                        <div class="p-5 green darken-1">
                            <h3 class="white-text p-10 m-b-0"><i class="ti-signal"></i></h3></div>
                        <div class="p-10">
                            <div id="Door"></div>
                            <span class="text-muted">Tình trạng cửa</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col l3 m6">
                <div class="card ">
                    <div class="d-flex flex-row">
                        <div class="p-5 blue-grey darken-4">
                            <h3 class="white-text p-10 m-b-0"><i class="ti-timer"></i></h3></div>
                        <div class="p-10">
                            <div id="Temp"></div>
                            <span class="text-muted">Nhiệt độ</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col l3 m6">
                <div class="card">
                    <div class="d-flex flex-row">
                        <div class="p-5 blue darken-3">
                            <h3 class="white-text p-10 m-b-0"><i class="ti-server"></i></h3></div>
                        <div class="p-10">
                            <div id="DoorPass"></div>
                            <span class="text-muted">Ra khỏi cửa</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
        </div>
        <div class="col l3 m6">
            <div class="card">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <span class="green-text display-6"><i class="ti-layout-media-left-alt"></i></span>
                        </div>
                        <div class="ml-auto">
                            <div id="TVLight"> <h3 class="TVState">Đang kiểm tra</h3></div>
                            <h6 class="cyan-text font-medium m-b-0">Tình trạng TV</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l3 m6">
            <div class="card">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <span class="green-text display-6"><i class="ti-layout-media-left-alt"></i></span>
                        </div>
                        <div class="ml-auto">
                            <div id="TVState"> <h3 class="TVState">Đang kiểm tra</h3></div>
                            <h6 class="cyan-text font-medium m-b-0">Cho phép đóng mở TV</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l3 m6">
            <div class="card">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <span class="green-text display-6"><i class="ti-layout-media-left-alt"></i></span>
                        </div>
                        <div class="ml-auto">
                            <a onclick="myFunctionx()" class="waves-effect waves-light btn btn-round red">Tắt TV</a>
                            <a onclick="myFunctiony()" class="waves-effect waves-light btn btn-round blue">Bật TV</a>
                            <p id="demo"></p>
                            <h6 class="cyan-text font-medium m-b-0">Điều khiển TV từ xa</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="center-align m-b-30">All Rights Reserved by Materialart. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.</footer>
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="dist/js/materialize.min.js"></script>
<script src="assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!-- ============================================================== -->
<!-- Apps -->
<!-- ============================================================== -->
<script src="dist/js/app.js"></script>
<script src="dist/js/app.init.light-sidebar.js"></script>
<script src="dist/js/app-style-switcher.js"></script>
<!-- ============================================================== -->
<!-- Custom js -->
<!-- ============================================================== -->
<script src="dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script src="dist/js/room.js"></script>
<script type="text/javascript">
    function myFunctiony() {
        $('#demo').load('/backend/switch.php?value=on');
    }
    function myFunctionx() {
        $('#demo').load('/backend/switch.php?value=off');
    }
</script>