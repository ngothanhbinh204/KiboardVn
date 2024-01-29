

    <!-- loc danh muc Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative  mx-xl-5 mb-4"><span class="bg-secondary pr-3">Danh mục : <?=$tenloai?></span></h2>

        <div class="row px-xl-5">
   
        <?php

        foreach ($dshh as $hh) {
            extract($hh);
            $linkhh = "index.php?act=hanghoachitiet&mahh=" . $ma_hh;
            $hinhUp = $img_path . $hinh;
        

            echo '<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="' . $hinhUp . '" alt="">
                    <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="ma_hh" value="' . $ma_hh . '">
                    <input type="hidden" name="ten_hh" value="' . $ten_hh . '">
                    <input type="hidden" name="don_gia" value="' . $don_gia . '">
                    <input type="hidden" name="hinh" value="' . $hinhUp . '">
                    <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""> <button type="submit" name="addtocart" value="ADD" class="btn"><i class="fa fa-shopping-cart"></i></button> </a>
                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                        <a class="btn btn-outline-dark btn-square" href="' . $linkhh . '"><i class="fa fa-search"></i></a>
                        
                    </div>
                    </form>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="' . $linkhh . '">' . $ten_hh . '</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$' . $don_gia . '</h5>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>   
                ';
        }
        ?>
         </div>
    </div>
    <!-- loc danh muc End -->


    <?php
    include "category_and_product.php";
    ?>

