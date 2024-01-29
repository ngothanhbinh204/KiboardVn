<?php
$listbill =  load_All_bill();
$list_thongke =  load_All_thongke();



?>

<div class="main-content">
    <h3 class="title-page">
        Dashboards
    </h3>
    <section class="statistics row">
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="products.html">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            Tổng sản phẩm
                        </h5>
                    </div>
                    <span class="widget-numbers">
                       <?php

                       ?>
                    </span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="user.html">
                <div class="card mb-3 widget-chart">

                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            Tổng thành viên
                        </h5>
                    </div>
                    <span class="widget-numbers"></span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="caterogies.html">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            Tổng doanh mục
                        </h5>
                    </div>
                    <span class="widget-numbers"></span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="#">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            Tổng doanh mục
                        </h5>
                    </div>
                    <span class="widget-numbers"></span>
                </div>
            </a>
        </div>
    </section>
    <section class="row">
        <div class="col-sm-12 col-md-6 col xl-6">
            <div class="card chart">
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">Đến ngày</span>
                        <input type="date" class="form-control" placeholder="Server" aria-label="Server">
                        <button type="button" class="btn btn-primary">Xem</button>
                    </div>
                </form>
                <p>Tổng doanh thu: <span>100.000.000 VND</span></p>
                <table class="revenue table table-hover">
                    <thead>
                        <th>Mã đơn hàng</th>
                        <th>Doanh thu</th>
                        <th>Tình Trạng</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $trangthai = get_ttdh($bill["bill_trangthai"]);


                            echo '
                        <tr>
                            <td> DAM-NTB-' . $bill['id'] . '</td>
                            <td>' . $bill['bill_tong_donhang'] . ' USD</td>
                            <td>' . $trangthai . '</td>

                        </tr>
                        ';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <div class="card chart">
                <h4>Đơn hàng mới</h4>
                <table class="revenue table table-hover">
                    <thead>
                        <th>Mã đơn hàng</th>
                        <th>Trạng thái</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GIA001</td>
                            <td>Chờ duyệt</td>
                        </tr>
                        <tr>
                            <td>GIA002</td>
                            <td>Đã duyệt</td>
                        </tr>
                        <tr>
                            <td>GIA003</td>
                            <td>Chờ TT</td>
                        </tr>
                        <tr>
                            <td>GIA004</td>
                            <td>Đã duyệt</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <div class="card chart">
                <h4>Khách hàng mới</h4>
                <table class="revenue table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Username</th>
                        <th>Fullname</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_khachhang as $khachhang) {
                            extract($khachhang);

                            echo '
                        <tr>
                            <td>' . $id_kh . '</td>
                            <td>' . $ma_kh . '</td>
                            <td>' . $ho_ten . '</td>
                        </tr>
                        ';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<div class="card mb-12 widget-chart">
    <div class="main-content ">
        <div class=" frmcontent">
            <div class=" frmloai">
                    <h3 class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">Thống Kê Loại - Sản Phẩm</h3>
                

                <!-- <form class="row" action="index.php?act=listbill" method="post">
                <input type="text" name="keyword" placeholder="Nhập mã đơn hàng">
                <input type="submit" name="listloc" value="Lọc">
            </form> -->

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Mã Danh Mục</th>
                            <th scope="col">Tên Danh Mục</th>
                            <th scope="col">Số Lượng Hàng</th>
                            <th scope="col">Giá Cao Nhất</th>
                            <th scope="col">Giá Thấp Nhất</th>
                            <th scope="col">Trung Bình Giá Sản Phẩm</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_thongke as $thongke) {
                            extract($thongke);
                            echo '
                        <tr>
                            <td>' . $maloai . '</td>
                            <td>' . $tenloai . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $max_dongia . ' USD</td>
                            <td>' . $min_dongia . '</td>
                            <td>' . $trungbinh_dongia . '</td>
                        </tr>
                        ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>




            <!-- <div class="">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ Chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addHanghoa"> <input type="button" value="Nhập Thêm"> </a>
        </div> -->

        </div>
    </div>
</div>

<div class="main-content">
<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
    <div id="myChart" style="width:100%;  height:700px;">
    </div>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);


        function drawChart() {
            const data = google.visualization.arrayToDataTable([
                ['Danh Mục', 'Số Lượng Sản Phẩm'],
                <?php
                $tongloai = count($list_thongke);
                $i= 1;
                    foreach ($list_thongke as $thongke) {
                        extract($thongke);
                        if($i == $tongloai) {
                            $dauphay = "";
                        } else {
                            $dauphay = ",";
                        }
                        echo "['".$thongke['tenloai']."', ".$thongke['countsp']."]".$dauphay;
                        $i += 1;
                    }
                ?>
               
            ]);

            const options = {
                title: 'Thông kê sản phẩm theo Loại',
                is3D: true
            };

            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>

</body>

</html>
</div>