<?php
// $tong = 0;
// foreach ($_SESSION['mycart'] as $row_cart) {
//     $hinh = $img_path . $row_cart[3];
//     $thanhtien = $row_cart[2] * $row_cart[4];
//     $tong += $thanhtien;
// }
?>
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
   
                <tbody class="align-middle">
                    <tr>
                        <th>Mã Đơn Hàng</th>
                        <th>Số Lượng</th>
                        <th>Ngày Đặt</th>
                        <th>Tổng Giá Trị Đơn Hàng</th>
                        <th>Trạng Thái</th>
                    </tr>
                    <?php
                    if (is_array($listbill)) {
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['bill_trangthai']);
                            $countsp = count_bill_user($bill['id']);
                            echo '
                            <tr>
                                <td>DAM '.$bill['id'].'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['bill_ngay_dathang'].'</td>
                                <td>'.$bill['bill_tong_donhang'].'</td>
                                <td>'.$ttdh.'</td>
                             </tr>';
                        }
                    }
                    // viewcart(1);
                    ?>


                </tbody>
            </table>
        </div>
        <!-- <div class="col-lg-4">
            <form class="mb-30" action="">
                <div class="input-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Tổng đơn hàng</h6>
                        <h6><?= $tong ?></h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5><?= $tong ?></h5>
                    </div>
                    <a class="btn btn-block btn-primary font-weight-bold my-3 py-3" href="index.php?act=bill"> <input type="button" value="Đặt hàng"></a>
                    <a href="index.php?act=bill"> <button type="submit" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Tiếp Tục Đặt Hàng</button></a>
                </div>
            </div>
        </div> -->
        <!-- <div class="col-lg-4">
            <form class="mb-30" action="">
                <div class="input-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6>$150</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">$10</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5>$160</h5>
                    </div>
                    <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                </div>
            </div>
        </div> -->
    </div>
</div>