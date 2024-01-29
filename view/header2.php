<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>kiBoardvn - Website Phím Cơ Việt Nam</title>
    <link rel="shortcut icon" type="image/png" href="view/img/avt.png" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="view/css/style_register.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="testdemo/lib/animate/animate.min.css" rel="stylesheet">
    <link href="testdemo/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="testdemo/css/style.css" rel="stylesheet">
    <link href="view/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">

                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">About</a>
                    <a class="text-body mr-3" href="">Contact</a>
                    <a class="text-body mr-3" href="">Help</a>
                    <a class="text-body mr-3" href="">FAQs</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <?php
                    if (isset($_SESSION['khachhang'])) {
                        extract($_SESSION['khachhang']);
                        $hinh_path = "uploads/user_img/" . $hinh;
                        if (is_file($hinh_path)) {
                            $hinh = "<img src='" . $hinh_path . "' width='50'>";
                        } else {
                            $hinh = "Chưa Có Hình Ảnh Sản Phẩm";
                        }
                    ?>
                        <div class="btn-group">
                            <?= $hinh ?>
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Xin Chào : <?= $ho_ten  ?> </button>
                            <div class="dropdown-menu dropdown-menu-right">

                                <button class="dropdown-item" type="button"> <a href="index.php?act=quen_matkhau">Quên Mật Khẩu</a></button>
                                <button class="dropdown-item" type="button"> <a href="index.php?act=edit_khachhang">Cập Nhật Tài Khoản</button>
                                <?php if ($vai_tro == 1) { ?>
                                    <button class="dropdown-item" type="button"> <a href="admin/index.php">Đăng Nhập Admin</button>
                                <?php } ?>
                                <button class="dropdown-item" type="button"> <a href="index.php?act=logout">Thoát</button>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button"> <a href="index.php?act=register">Đăng Ký</a></button>
                                <button class="dropdown-item" type="button"> <a href="index.php?act=login">Đăng Nhập</button>
                            </div>
                        </div>

                        <div class="btn-group mx-2">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">EUR</button>
                                <button class="dropdown-item" type="button">GBP</button>
                                <button class="dropdown-item" type="button">CAD</button>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Đóng câu lệnh -->

                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="index.php" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">kiBoard</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">vn</span>
                </a>
            </div>
            <!-- search -->
            <div class="col-lg-4 col-6 text-left">
                <form action="index.php?act=hanghoa" method="post">
                    <div class="input-group">
                        <input class="form-control border-end-0 border rounded-pill" name="keyword" type="search" value="" placeholder="Tìm Kiếm Sản Phẩm ... " id="example-search-input">
                        <span class="input-group-append">
                            <button name="timkiem" class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="submit    ">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <button type="submit" class="btn rounded-pill ms-n5" name="timkiem" value=""> <i class="fa fa-search"></i> </button>
                            </span>
                        </div>
                    </div> -->

                </form>
            </div>
            <!-- search -->
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+012 345 6789</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Danh Mục Sản Phẩm</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <!-- <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div> -->
                        <?php
                        foreach ($dslh as $dslh) {
                            extract($dslh);
                            $linkdm = "index.php?act=hanghoa&maloai=" . $ma_loai;
                            echo '
                            <a href="' . $linkdm . '" class="nav-item nav-link">' . $ten_loai . '</a>
                                ';
                        }
                        ?>


                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">kiBoard</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">vn</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="index.php?act=gioithieu" class="nav-item nav-link">Giới Thiệu</a>
                            <a href="index.php?act=gopy" class="nav-item nav-link">Góp Ý</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="index.php?act=hoidap" class="nav-item nav-link">Hỏi Đáp</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="index.php?act=mybill">Đơn Hàng của tôi</a>
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="index.php?act=viewcart" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <!-- Navbar End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <?php
    ob_end_flush();
    ?>