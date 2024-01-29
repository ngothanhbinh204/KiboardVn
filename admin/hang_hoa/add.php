<div class="main-content">
    <div class=" alert alert-success row frmtitle">
        <h1>Thêm Mới Hàng Hóa </h1>
    </div>

    <table id="example" class="table table-striped" style="width:100%">
        <form action="index.php?act=addHanghoa" method="post" enctype="multipart/form-data">
            <div class=" row form-group">
                <label for="text">Danh mục sản phẩm</label>
                <select name="maloaihh">
                    <?php
                    foreach ($listloai as $loai) {
                        extract($loai);
                        echo '
                        <option value="' . $ma_loai . '">"' . $ten_loai . '"</option>;
                        ';
                    }
                    ?>

                </select>
            </div>
            <div class=" row form-group">
                <label for="">Nhập Tên Hàng Hóa</label>
                <input type="text" name="tenhh" class="form-control">
            </div>
            <div class=" row form-group">
                <label for="">Đơn Giá</label>
                <input type="text" name="dongia" class="form-control">
            </div>
            <div class=" row form-group">
                <label for="">Hình</label>
                <input type="file" name="hinh">
            </div>
            <div class=" row form-group">
                <label for="">Ngày Nhập</label>
                <input type="date" name="ngaynhap" class="form-control">
            </div>
            <div class=" row form-group">
                <label for="">Mô Tả</label>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class=" mb10">
                <a href=""><input type="submit" name="themmoi" value="Thêm Mới"></a>
                <a href=""><input type="reset" value="Nhập Lại"></a>
                <a href="index.php?act=listHanghoa"> <input type="button" value="Danh Sách"> </a>
            </div>
            <?php if (isset($thongbao)) : ?>
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $thongbao ?>
                </div>
            <?php endif ?>

        </form>
       
    </table>
</div>