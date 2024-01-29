<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    



     <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-3">
            <div class=" dstop10">
                <div class="top10 text-title-top10 ">
                    <h3>Top 10 yêu thích</h3>
                    
                </div>
                <?php
                foreach ($dstop10 as $top10) {
                    extract($top10);
                    $hinhUp = $img_path . $hinh;
                    $linkhh = "index.php?act=hanghoachitiet&mahh=" . $ma_hh;
                    echo '
                        <div class="row ">
                            <div class=" mb-10 top10">
                            <a style="font-size:0.75rem" href="' . $linkhh . '"> <img src="' . $hinhUp . '" alt="" style="width:30%"> </a>
                            <a style="font-size:0.75rem" href="' . $linkhh . '">' . $ten_hh . '</a>
                            </div>
                        </div>
                    ';
                }


                ?>
            </div>
            </div>
            <div class="col-lg-6">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <img src="view/img/slideshow5.jpg">
                    </div>

                    <div class="mySlides fade">
                        <img src="view/img/slideshow2.jpg">
                    </div>

                    <div class="mySlides fade">
                        <img src="view/img/slideshow4.jpg">
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-offer mb-30" style="height: 150px;">
                    <img class="img-fluid" src="uploads/akko_worldtour.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Khuyến mãi 20%</h6>
                        <h3 class="text-white mb-3">Đặt Ngay</h3>
                        <a href="index.php?act=hanghoa" class="btn btn-primary">Xem Sản Phẩm</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 150px;">
                    <img class="img-fluid" src="uploads/kc_mathca.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Giảm 40%</h6>
                        <h3 class="text-white mb-3">Đặt Ngay</h3>
                        <a href="index.php?act=hanghoa" class="btn btn-primary">Xem Sản Phẩm </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- end slideshow -->

     <!-- Featured Start -->
     <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Đảm bảo chất lương</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Miễn phí ship</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Đổi trả trong vòng 14 ngày</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hỗ Trợ 24/7</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->



    <?php
    include "category_and_product.php";
    ?>



    <!-- js slideshow -->
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 1500); // Change image every 2 seconds
        }
    </script>
</body>

</html>