

<div class="main-content">
<div class=" alert alert-info row frmtitle">
        <h1>Thêm Mới Loại Hàng Hóa</h1>
    </div>
    <form action="index.php?act=addLoai" method="post">
        <div class=" row form-group">
            <label for="text">Nhập Mã Loại</label>
            <input type="text" name="maloai" class="form-control" id="">
        </div>
        <div class=" row form-group">
            <label for="">Nhập Tên Loại</label>
            <input type="text" name="tenloai" class="form-control" id="">
        </div>
        <div class="row mb10">
            <input type="submit" name="themmoi" value="Thêm Mới">
            <input type="reset" value="Nhập Lại">
            <a href="index.php?act=listLoai"> <input type="button" value="Danh Sách"> </a>
        </div>
        <div class="">
        <?php
            if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
        ?>
        </div>
        
    </form>
</div>