<?php
require ('config.php');
include ('includes/db.php');
include ('includes/header.php');
include ('includes/sidebar.php');
$setting = $db->query("SELECT * FROM `settings` WHERE `type` = 'site_url'")-> fetch_assoc();
$value = $_GET['value'];
?>
<title>Cài đặt</title>
    <link href="dist/css/pages/form-page.css" rel="stylesheet">
    <link href="assets/extra-libs/prism/prism.css" rel="stylesheet">
    <link href="assets/extra-libs/noui-slider/nouislider.css" rel="stylesheet">
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Title and breadcrumb -->
        <!-- ============================================================== -->
        <div class="page-titles">
            <div class="d-flex align-items-center">
                <h5 class="font-medium m-b-0">Cài đặt</h5>
                <div class="custom-breadcrumb ml-auto">
                    <a href="#!" class="breadcrumb">Trang chủ</a>
                    <a href="#!" class="breadcrumb">Cài đặt</a>
                </div>
            </div>
        </div>
        <?php
        switch ($value) {
        case 'hethong':
            echo '
        <div class="container-fluid">
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Chọn mục cài đặt</h5>
                            <div class="collection">
                                <a href="setting.php?value=hethong" class="collection-item active">Cài đặt hệ thống</a>
                                <a href="setting.php?value=canhbao" class="collection-item">Cài đặt cảnh báo</a>
                                <a href="setting.php?value=gioihan" class="collection-item">Cài đặt giới hạn</a>
                            </div>
                        </div>
                    </div>
                </div>';
            echo '
<div class="col s12">
    <div class="card">
        <div class="card-content">
            <h5 class="card-title activator">Cài đặt hệ thống<i class="material-icons right tooltipped" data-position="left" data-delay="50">more_vert</i></h5>
        </div>
        <div class="divider"></div>
        <form class="h-form b-form striped-rows" name="hethong" action="includes/change-setting.php" method="post">
        <input type="text" hidden name="part" value="hethong">
            <div class="form-body">
                <div class="card-content">
                    <div class="row">
                        <div class="col s3">
                            <div class="h-form-label">
                                <label for="full-n">URL của Website</label>
                            </div>
                        </div>
                        <div class="input-field col s9">
                            <input id="full-n" type="text" name="site-url" placeholder="Nhập URL của hệ thống" value="'.$db->query("SELECT * FROM `settings` WHERE `type` = 'system_site_url'")-> fetch_assoc()['value'] .'">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s3">
                            <div class="h-form-label">
                                <label for="fb-url">Firebase URL</label>
                            </div>
                        </div>
                        <div class="input-field col s9">
                            <input id="fb-url" name="firebase-url" type="text" placeholder="Firebase URL" value="'.$db->query("SELECT * FROM `settings` WHERE `type` = 'system_firebase_url'")-> fetch_assoc()['value'] .'">
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="card-content">
                <div class="form-action">
                    <button class="btn cyan waves-effect waves-light" type="submit" name="action">Save
                    </button>
                    <button class="btn waves-effect waves-light grey darken-4" type="submit" name="action">Cancel
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
</div>';
        break;
        case 'canhbao':
            echo '
        <div class="container-fluid">
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Chọn mục cài đặt</h5>
                            <div class="collection">
                                <a href="setting.php?value=hethong" class="collection-item">Cài đặt hệ thống</a>
                                <a href="setting.php?value=canhbao" class="collection-item active">Cài đặt cảnh báo</a>
                                <a href="setting.php?value=gioihan" class="collection-item">Cài đặt giới hạn</a>
                            </div>
                        </div>
                    </div>
                </div>';
            echo '
<div class="col s12">
    <div class="card">
        <div class="card-content">
            <h5 class="card-title activator">Cài đặt cảnh báo<i class="material-icons right tooltipped" data-position="left" data-delay="50">more_vert</i></h5>
        </div>
        <div class="divider"></div>
        <form class="h-form b-form striped-rows" name="hethong" action="includes/change-setting.php" method="post">
        <input type="text" hidden name="part" value="canhbao">
            <div class="form-body">
                <div class="card-content">
                    <div class="row">
                        <div class="col s3">
                            <div class="h-form-label">
                                <label for="full-n1">Số điện thoại thứ nhất</label>
                            </div>
                        </div>
                        <div class="input-field col s9">
                            <input id="full-n1" type="tel" name="phone1"  min="10" max="10" placeholder="Nhập số điện thoại phụ huynh 1" value="'.$db->query("SELECT * FROM `settings` WHERE `type` = 'alert_phone_1'")-> fetch_assoc()['value'] .'">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s3">
                            <div class="h-form-label">
                                <label for="full-n2">Số điện thoại thứ hai</label>
                            </div>
                        </div>
                        <div class="input-field col s9">
                            <input id="full-n2" type="tel" name="phone2" placeholder="Nhập số điện thoại phụ huynh 2" value="'.$db->query("SELECT * FROM `settings` WHERE `type` = 'alert_phone_2'")-> fetch_assoc()['value'] .'">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s3">
                            <div class="h-form-label">
                                <label for="full-n3">Số điện thoại thứ ba</label>
                            </div>
                        </div>
                        <div class="input-field col s9">
                            <input id="full-n3" type="tel" name="phone3" placeholder="Nhập số điện thoại phụ huynh 3" value="'.$db->query("SELECT * FROM `settings` WHERE `type` = 'alert_phone_3'")-> fetch_assoc()['value'] .'">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s3">
                            <div class="h-form-label">
                                <label for="cooldown">Khoảng cách giữa 2 lần cảnh báo liên tiếp(giây)</label>
                            </div>
                        </div>
                        <div class="input-field col s9">
                            <input id="full-n3" type="text" name="cooldown"  min="0" max="100" placeholder="Nhập thời gian" value="'.$db->query("SELECT * FROM `settings` WHERE `type` = 'alert_cooldown'")-> fetch_assoc()['value'] .'">
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col s3">
                            <div class="h-form-label">
                                <label for="temp">Nhiệt độ giới hạn</label>
                            </div>
                        </div>
                        <div class="input-field col s9">
                        <br />
                        <div id="range-input">
                            <input type="number" name="Slider_Min" id="Slider_Min" value="" hidden>
                            <input type="number" name="Slider_Max" id="Slider_Max" value="" hidden>
                        </div>
                        </div>
                    </div>                      
                    </div>
                               
            </div>
            <div class="divider"></div>
            <div class="card-content">
                <div class="form-action">
                    <button class="btn cyan waves-effect waves-light" type="submit" name="action">Save
                    </button>
                    <button class="btn waves-effect waves-light grey darken-4" type="submit" name="action">Cancel
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
</div>';

            break;
        case 'gioihan':
            echo '
        <div class="container-fluid">
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Chọn mục cài đặt</h5>
                            <div class="collection">
                                <a href="setting.php?value=hethong" class="collection-item">Cài đặt hệ thống</a>
                                <a href="setting.php?value=canhbao" class="collection-item">Cài đặt cảnh báo</a>
                                <a href="setting.php?value=gioihan" class="collection-item active">Cài đặt giới hạn</a>
                            </div>
                        </div>
                    </div>
                </div>
';
            echo '
<div class="col s12">
    <div class="card">
        <div class="card-content">
            <h5 class="card-title activator">Cài đặt hệ thống<i class="material-icons right tooltipped" data-position="left" data-delay="50">more_vert</i></h5>
        </div>
        <div class="divider"></div>
        <form class="h-form b-form striped-rows" name="gioihan" action="includes/change-setting.php" method="post">
        <input type="text" hidden name="part" value="gioihan">
            <div class="form-body">
                <div class="card-content">
                    <div class="row">
                        <div class="col s3">
                            <div class="h-form-label">
                                <label for="tv-limit">Giới hạn thời gian xem TV một ngày</label>
                            </div>
                        </div>
                        <div class="input-field col s9">
                            <input id="tv-limit" type="number" name="tv-limit" placeholder="Nhập số phút trẻ được xem TV mỗi ngày(phút):" value="'.$db->query("SELECT * FROM `settings` WHERE `type` = 'limit_tv'")-> fetch_assoc()['value'] .'">
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="card-content">
                <div class="form-action">
                    <button class="btn cyan waves-effect waves-light" type="submit" name="action">Save
                    </button>
                    <button class="btn waves-effect waves-light grey darken-4" type="submit" name="action">Cancel
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
</div>';
        break;
        default:
            echo '
        <div class="container-fluid">
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Chọn mục cài đặt</h5>
                            <div class="collection">
                                <a href="setting.php?value=hethong" class="collection-item">Cài đặt hệ thống</a>
                                <a href="setting.php?value=canhbao" class="collection-item">Cài đặt cảnh báo</a>
                                <a href="setting.php?value=gioihan" class="collection-item">Cài đặt giới hạn</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }?>

        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->
        <footer class="center-align m-b-30">All Rights Reserved by Hoang Le. Designed and Developed by <a href="https://hzv.io">HZV.io</a>.</footer>
    </div>
    <script src="assets/extra-libs/prism/prism.js"></script>
<?php include('includes/footer.php');?>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script src="assets/extra-libs/prism/prism.js"></script>
<script src="assets/extra-libs/noui-slider/nouislider.js"></script>
<script type="text/javascript">
    var slider = document.getElementById('range-input');
    var tempMin = document.getElementById("tempMin-input");
    var tempMax = document.getElementById("tempMax-input");

    noUiSlider.create(slider, {
        start: [<?php echo $db->query("SELECT * FROM `settings` WHERE `type` = 'alert_tempMin'")-> fetch_assoc()['value'];?>, <?php echo $db->query("SELECT * FROM `settings` WHERE `type` = 'alert_tempMax'")-> fetch_assoc()['value'];?>],
        connect: true,
        step: 1,
        orientation: 'horizontal',
        range: {
            'min': 10,
            'max': 44
        },
        format: wNumb({
            decimals: 0
        })
    });
    slider.noUiSlider.on('update', function (values, handle) {
        if (handle) {
            tempMax = values[handle];
            document.getElementById("Slider_Max").value = values[handle];
        } else {
            tempMin = values[handle];
            document.getElementById("Slider_Min").value = values[handle];
        }
    });
</script>