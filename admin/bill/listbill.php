<style>
.row{
    margin: 30px 0;
}
td , tr {
    text-align: center;
}
</style>



<div class="main-content">
                <h3 class="title-page">
                    Quản lí đơn hàng
                </h3>
                <div class="col-6">
                <form class="row" action="index.php?act=listbill" method="post">
                <input type="text" name="keyword" placeholder="Nhập mã đơn hàng">
                <input type="submit" name="listloc" value="Lọc">
                </form>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                        <th scope="col">Mã Bill</th>
                        <th scope="col">Khách Hàng</th>
                        <th scope="col">Số Lượng Hàng</th>
                        <th scope="col">Giá Trị Đơn Hàng</th>
                        <th scope="col">Ngày Đặt Hàng</th>
                        <th scope="col">Tình Trạng Đơn Hàng</th>
                        <th scope="col">Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $khachhang=$bill["bill_username"]. '
                        <br>' . $bill["bill_email"] . '
                        <br>' . $bill["bill_sdt"] . '
                        <br>' . $bill["bill_diachi"] . '
                        <br>' . $bill["bill_thanhpho"];
                        $countsp = count_bill_user($bill["id"]);
                        $trangthai = get_ttdh($bill["bill_trangthai"]);
                        $suabill = "index.php?act=suabill&id=" . $bill["id"];
                        $xoabill = "index.php?act=xoabill&id=" . $bill["id"];
                        
                        echo '
                        <tr>
                            <td> DAM-NTB-' . $bill['id'] . '</td>
                            <td>' . $khachhang . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $bill['bill_tong_donhang'] . ' USD</td>
                            <td>' . $bill["bill_ngay_dathang"] . '</td>
                            <td>' . $trangthai . '</td>
                            <td> <a href="' . $suabill . '"> <input type="button" value="Sửa"> </a> <a href="' . $xoabill . '"> <input type="button" value="Xóa"> </a></td>
                        </tr>
                        ';
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th scope="col">Mã Bill</th>
                        <th scope="col">Khách Hàng</th>
                        <th scope="col">Số Lượng Hàng</th>
                        <th scope="col">Giá Trị Đơn Hàng</th>
                        <th scope="col">Ngày Đặt Hàng</th>
                        <th scope="col">Tình Trạng Đơn Hàng</th>
                        <th scope="col">Thao Tác</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
