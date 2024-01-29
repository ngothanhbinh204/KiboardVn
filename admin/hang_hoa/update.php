    <?php
    if (is_array($hanghoa)) {
        extract($hanghoa);
    }
    $hinh_path = "../uploads/" . $hinh;
    if (is_file($hinh_path)) {
        $hinh = "<img src='" . $hinh_path . "' height='80'>";
    } else {
        $hinh = "Chưa Có Hình Ảnh Sản Phẩm";
    }
    ?>



    <div class="main-content">
        <div class=" alert alert-success row frmtitle">
            <h1>Update Sản Phẩm</h1>
        </div>

        <table id="example" class="table table-striped" style="width:100%">
            <form action="index.php?act=updateHanghoa" method="post" enctype="multipart/form-data">
                <div class="row">
                    <select name="maloaihh">
                        <option value="0" selected>Tất Cả</option>
                        <?php
                        foreach ($listloai as $loai) {
                            extract($loai);
                            if ($ma_loaihh == $ma_loai) {
                                echo '
                            <option value="' . $ma_loai . '" selected>"' . $ten_loai . '"</option>';
                            } else {
                                echo '
                            <option value="' . $ma_loai . '" > "' . $ten_loai . '"</option>';
                            }
                        }
                        ?>

                    </select>
                </div>

                <div class=" row form-group">
                    <label for="">Nhập Tên Hàng Hóa</label>
                    <input type="text" name="tenhh" class="form-control" value="<?= $ten_hh ?>">
                </div>
                <div class=" row form-group">
                    <label for="">Đơn Giá</label>
                    <input type="text" name="dongia" class="form-control" value="<?= $don_gia ?>">
                </div>
                <div class=" form-group">
                    <label for="">Hình</label>
                    <input type="file" name="hinh">
                    <?= $hinh ?>
                </div>
                <div class=" row form-group">
                    <label for="">Ngày Nhập</label>
                    <input type="date" name="ngaynhap" class="form-control" value="<?= $ngay_nhap ?>">
                </div>
                <div class=" row form-group">
                    <label for="">Mô Tả</label>
                    <textarea name="mota" cols="30" rows="10"><?= $mo_ta ?></textarea>
                </div>
                <div class="row mb10">
                    <input type="hidden" name="mahh" value="<?= $ma_hh ?>">
                    <input type="submit" name="capnhat" value="Cập Nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listHanghoa"> <input type="button" value="Danh Sách"> </a>
                </div>
                <div class="alert alert-success">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </div>

            </form>

        </table>
    </div>