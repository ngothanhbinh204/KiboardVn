<?php
if (isset($_SESSION['khachhang']) && (is_array($_SESSION['khachhang']))) {
    extract($_SESSION['khachhang']);
}
$hinh_path = "uploads/user_img/" . $hinh;
if (is_file($hinh_path)) {
    $hinh = "<img src='" . $hinh_path . "' width='50'>";
} else {
    $hinh = "Chưa Có Hình Ảnh User";
}

?>
<section class="signup">
    <div class="container">
        <!-- <?php if (isset($thongbao)) : ?>
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo $thongbao ?>
            </div>
        <?php endif ?>

        <?php
        echo $thongbao;
        ?> -->

        <div class="signup-content">
            <div class="signup-image">
                <figure><img src="view/img/img_update.jpg" alt="sing up image"></figure>
                <a href="#" class="signup-image-link">I am already member</a>
            </div>
            <div class="signup-form">
                <h2 class="form-title">Cập Nhật Tài Khoản</h2>

                <form action="index.php?act=edit_khachhang" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <!--  Tên Đăng Nhập -->
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="ma_kh" placeholder="User Name" value="<?=$ma_kh?>" />
                    </div>

                    <!-- pass user -->
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="mat_khau" placeholder="Password" value="<?=$mat_khau?>" />
                    </div>

                    <!-- Tên user -->
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="ho_ten" placeholder="Your Name" value="<?=$ho_ten?>" />
                    </div>

                    <!-- Email user -->
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" placeholder="Your Email" value="<?=$email?>" />
                    </div>

                    <!-- Image user -->
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-image"></i></span>
                        </div>
                        <input type="file" class="form__input form-control" name="hinh">
                        <div class=""><?=$hinh?></div>

                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div>

                    <div class="form-group form-button">
                        <input type="hidden" name="id_kh" value="<?= $id_kh ?>">
                        <input type="submit" name="capnhat" id="signup" class="form-submit" value="Cập Nhật" />
                    </div>

                </form>

                <div class="alert alert-success">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    else "chưa có tài khảon";
                    ?>
                </div>

            </div>

        </div>
    </div>
</section>