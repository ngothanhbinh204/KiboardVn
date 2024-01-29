<?php
if (isset($_SESSION['khachhang']) && (is_array($_SESSION['khachhang']))) {
    $user_info = get_user($id_kh);
    $_SESSION['khachhang'] = $user_info;
    extract($user_info);
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
                <h2 class="form-title">Thông Tin Đã Cập Nhật</h2>

                    <div class="form-group">
                        <!--  Tên Đăng Nhập -->
                        <label for="name">UserName :</i></label>
                        <?=$ma_kh?>
                    </div>

                    <!-- pass user -->
                    <div class="form-group">
                        <label for="pass">Mật Khẩu</label>
                        <?=$mat_khau?>
                    </div>

                    <!-- Tên user -->
                    <div class="form-group">
                        <label for="name">Họ Và Tên :</label>
                        <?=$ho_ten?>
                    </div>

                    <!-- Email user -->
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <?=$email?>
                    </div>

                    <!-- Image user -->
                    <div class="form-group">
                        <label for="">Hình Ảnh :</label>
                        <?=$hinh?>

                    </div>

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