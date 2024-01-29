<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
    <div id="myChart" style="width:100%; max-width:600px; height:500px;">
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