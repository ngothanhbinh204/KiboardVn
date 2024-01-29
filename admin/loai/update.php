    <?php
        if(is_array($loai)) {
            extract($loai);
        }
    ?>

<div class="main-content">
    <div class=" alert alert-info row frmtitle">
        <h1>Cập Nhật Loại Hàng Hóa</h1>
    </div>
    <form action="index.php?act=updateLoai" method="post">
        <div class=" row form-group">
            <label for="text">Nhập Mã Loại</label>
            <input type="text" name="maloai" class="form-control" id="">
        </div>
        <div class=" row form-group">
            <label for="">Nhập Tên Loại</label>
            <input type="text" name="tenloai" value="<?php if(isset($ten_loai) && ($ten_loai!="")) echo $ten_loai ?>" class="form-control" id="">
        </div>
        <div class="row mb10">
            <input type="hidden" name="maloai" value="<?php if(isset($ma_loai) && ($ma_loai > 0)) echo $ma_loai ?>">
            <input type="submit" name="capnhat" value="Cập Nhật">
            <input type="reset" value="Nhập Lại">
            <a href="index.php?act=listLoai"> <input type="button" value="Danh Sách"> </a>
        </div>
        <div class="alert alert-success">
        <?php
            if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
        ?>
        </div>
        
    </form>
</div>