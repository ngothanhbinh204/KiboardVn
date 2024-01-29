<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="view/img/img_login2.jpg" alt="sing up image"></figure>
                        <a href="index.php?act=register" class="signup-image-link"> Đăng ký thành viên ngay !!!</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Nhập Mật Khẩu Mới :</h2>
                        <form action="index.php?act=reset_matkhau&ma_kh=<?php echo $_REQUEST['ma_kh']?>" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="mat_khau" id="your_name" placeholder="Mật Khẩu Mới"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="xnmk"  placeholder="Xác nhận mật khẩu"/>
                            </div>
                           
                          
                            <div class="form-group form-button">
                                <input type="submit" name="thaydoi" id="signin" class="form-submit" value="Thay Đổi"/>
                            </div>
                        </form>
                        <div class="alert alert-success">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    else "chưa có tài khảon";
                    ?>
                </div>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>