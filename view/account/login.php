<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="view/img/img_login2.jpg" alt="sing up image"></figure>
                        <a href="index.php?act=register" class="signup-image-link"> Đăng ký thành viên ngay !!!</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="index.php?act=login" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="ma_kh" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="mat_khau" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group">
                                
                                <label for="remember-me" class="label-agree-term"> <a href="index.php?act=quen_matkhau"> Quên mật khẩu</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="signin" class="form-submit" value="Log in"/>
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