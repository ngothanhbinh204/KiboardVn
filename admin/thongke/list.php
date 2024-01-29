<style>
    .row {
        margin: 30px 0;
    }

    td,
    tr {
        text-align: center;
    }
</style>
<div class="container ">
    <div class=" frmcontent">
        <div class=" frmloai">
            <div class="row alert-secondary mg-5 rounded container">
                <h3 class="font-weight-bold">Danh Sách Hàng Hóa</h3>
            </div>

            <form class="row" action="index.php?act=listbill" method="post">
                <input type="text" name="keyword" placeholder="Nhập mã đơn hàng">
                <input type="submit" name="listloc" value="Lọc">
            </form>

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
<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
    <div id="myChart" style="width:100%; max-width:800px; height:700px;">
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