<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Register</h2>

                <form action="index.php?act=register" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <!--  Tên Đăng Nhập -->
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="ma_kh"  placeholder="User Name" />
                    </div>
                    
                    <!-- pass user -->
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="mat_khau"  placeholder="Password" />
                    </div>

                    <!-- Tên user -->
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="ho_ten"  placeholder="Your Name" />
                    </div>

                    <!-- Email user -->
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email"  placeholder="Your Email" />
                    </div>

                    <!-- Image user -->
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-image"></i></span>
                        </div>
                        <input type="file" class="form__input form-control" name="hinh">
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div>

                    <div class="form-group form-button">
                        <input type="submit" name="register" id="signup" class="form-submit" value="register" />
                    </div>
                    
                </form>

                <div class="alert alert-success">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    else "chưa có tài khảon";
                    ?>
                </div>

            </div>
            <div class="signup-image">
                <figure><img src="view/img/img_register2.png" alt="sing up image"></figure>
                <a href="index.php?act=login" class="signup-image-link">Tôi đã là thành viên</a>
            </div>
        </div>
    </div>
</section>