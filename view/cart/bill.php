<?php
$tong = 0;
foreach ($_SESSION['mycart'] as $row_cart) {
    $hinh = $img_path . $row_cart[3];
    $thanhtien = $row_cart[2] * $row_cart[4];
    $tong += $thanhtien;
}
?>
<div class="container-fluid">
    <form action="index.php?act=billconfirm" method="post">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>

            <?php
            if (isset($_SESSION['khachhang'])) {
                echo "đâsd";
                $ma_kh = $_SESSION['khachhang']['ma_kh'];
                $ho_ten = $_SESSION['khachhang']['ho_ten'];
                $email = $_SESSION['khachhang']['email'];
            } else {
                $ma_kh = "";
                $ho_ten = "";
                $email = "";
            }
            ?>
            <div class="bg-light p-30 mb-5">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>First Name</label>
                        <input class="form-control" type="text" name="ma_kh" placeholder="Tên User" value="<?= $ma_kh ?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Last Name</label>
                        <input class="form-control" type="text" name="ho_ten" value="<?= $ho_ten ?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" name="email" value="<?= $email ?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Mobile No</label>
                        <input class="form-control" name="sdt" type="text" placeholder="+123 456 789">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Address Line 1</label>
                        <input class="form-control" name="diachi" type="text" placeholder="123 Street">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>City</label>
                        <input class="form-control" name="thanhpho" type="text" placeholder="New York">
                    </div>




                </div>
            </div>
            <div class="collapse mb-5" id="shipping-address">
           
            </div>
        </div>
        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom">
                    <table class="table table-light table-borderless table-hover text-center mb-0">
                        <tbody class="align-middle">
                            <?php
                            viewcart(0);

                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="border-bottom pt-3 pb-2">
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
                        <h5><?=$tong?></h5>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                <div class="bg-light p-30">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" value="1" name="pttt" id="paypal" checked>
                            <label class="custom-control-label" for="paypal">Ví Momo</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" value="2" name="pttt" id="directcheck">
                            <label class="custom-control-label" for="directcheck">Thanh toán khi nhận hàng</label>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" value="3" name="pttt" id="banktransfer">
                            <label class="custom-control-label" for="banktransfer">Chuyển khoản</label>
                        </div>
                    </div>
                    <input type="submit" name="dathang" value="Place Order">
                </div>
            </div>
        </div>
    </div>
    </form>
</div>