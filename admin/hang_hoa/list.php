<style>
    .row {
        margin: 30px 0;
    }

    td,
    tr {
        text-align: center;
    }
</style>

<div class="main-content">
    <h3 class="title-page">
        Hàng Hóa
    </h3>
    <div class="input-group flex-nowrap d-flex justify-content-start">
        <form class="row" action="index.php?act=listHanghoa" method="post">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"> Tìm Hàng Hóa</span>
                <input type="text" name="keyword" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                <select class="input-group-text" name="maloaihh">
                <option value="0" selected>Tất Cả</option>
                <?php
                foreach ($listloai as $loai) {
                    extract($loai);
                    echo '
                        <option value="' . $ma_loai . '">"' . $ten_loai . '"</option>;
                        ';
                }
                ?>
            </select>

            <input class="btn btn-success"  type="submit" name="listloc" value="Lọc">
            </div>
            <!-- <input type="text" name="keyword"> -->
           
            
        </form>
    </div>

    <div class="d-flex justify-content-end">
        <a href="index.php?act=addHanghoa" class="btn btn-primary mb-2">Thêm sản phẩm</a>
    </div>
    
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mã Hàng Hóa</th>
                <th scope="col">Tên Hàng Hóa</th>
                <th scope="col">Đơn Giá</th>
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Ngày Nhập</th>
                <th scope="col">Lượt Xem</th>
                <th scope="col">Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listhanghoa as $hanghoa) {
                extract($hanghoa);
                $suaHanghoa = "index.php?act=suaHanghoa&ma_hh=" . $ma_hh;
                $xoaHanghoa = "index.php?act=xoaHanghoa&ma_hh=" . $ma_hh;
                $hinh_path = "../uploads/" . $hinh;
                if (is_file($hinh_path)) {
                    $hinh = "<img src='" . $hinh_path . "' height='100'>";
                } else {
                    $hinh = "Chưa Có Hình Ảnh Sản Phẩm";
                }
                echo '
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $ma_hh . '</td>
                            <td>' . $ten_hh . '</td>
                            <td>' . $don_gia . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $ngay_nhap . '</td>
                            <td>' . $so_luot_xem . '</td>
                            <td>
                                <a href="' . $suaHanghoa . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="' . $xoaHanghoa . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                            </td>
                        </tr>
                        ';
            }
            ?>

        </tbody>
        <tfoot>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mã Hàng Hóa</th>
                <th scope="col">Tên Hàng Hóa</th>
                <th scope="col">Đơn Giá</th>
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Ngày Nhập</th>
                <th scope="col">Lượt Xem</th>
                <th scope="col">Thao Tác</th>
            </tr>
        </tfoot>
    </table>
    <script>
        new DataTable('#example');
    </script>
</div>


<!-- <div class="container ">
    <div class=" frmcontent">
        <div class=" frmloai">
            <div class="row alert-secondary mg-5 rounded container">
                <h3 class="font-weight-bold">Danh Sách Hàng Hóa</h3>
            </div>

            <form class="row" action="index.php?act=listHanghoa" method="post">
                <input type="text" name="keyword">
                <select name="maloaihh">
                    <option value="0" selected>Tất Cả</option>
                    <?php
                    foreach ($listloai as $loai) {
                        extract($loai);
                        echo '
                        <option value="' . $ma_loai . '">"' . $ten_loai . '"</option>;
                        ';
                    }
                    ?>

                </select>
                <input type="submit" name="listloc" value="Lọc">

            </form>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mã Hàng Hóa</th>
                        <th scope="col">Tên Hàng Hóa</th>
                        <th scope="col">Đơn Giá</th>
                        <th scope="col">Hình Ảnh</th>
                        <th scope="col">Ngày Nhập</th>
                        <th scope="col">Lượt Xem</th>
                        <th scope="col">Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listhanghoa as $hanghoa) {
                        extract($hanghoa);
                        $suaHanghoa = "index.php?act=suaHanghoa&ma_hh=" . $ma_hh;
                        $xoaHanghoa = "index.php?act=xoaHanghoa&ma_hh=" . $ma_hh;
                        $hinh_path = "../uploads/" . $hinh;
                        if (is_file($hinh_path)) {
                            $hinh = "<img src='" . $hinh_path . "' height='100'>";
                        } else {
                            $hinh = "Chưa Có Hình Ảnh Sản Phẩm";
                        }
                        echo '
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $ma_hh . '</td>
                            <td>' . $ten_hh . '</td>
                            <td>' . $don_gia . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $ngay_nhap . '</td>
                            <td>' . $so_luot_xem . '</td>
                            <td> <a href="' . $suaHanghoa . '"> <input type="button" value="Sửa"> </a> <a href="' . $xoaHanghoa . '"> <input type="button" value="Xóa"> </a></td>
                        </tr>
                        ';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ Chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">

        </div>

    </div>
</div> -->