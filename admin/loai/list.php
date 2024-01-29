

<div class="main-content">
    <h3 class="title-page">
        Danh mục
    </h3>
    <div class="d-flex justify-content-end">
        <a href="index.php?act=addLoai" class="btn btn-primary mb-2">Thêm danh mục</a>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mã Loại</th>
                <th scope="col">Tên Loại</th>
                <th scope="col">Chức Nắng</th>
            </tr>
        </thead>
        <tbody>
        <?php
                    foreach ($listloai as $list) {
                        extract($list);
                        $suaLoai = "index.php?act=suaLoai&ma_loai=" . $ma_loai;
                        $xoaLoai = "index.php?act=xoaLoai&ma_loai=" . $ma_loai;
                        echo '
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $ma_loai . '</td>
                            <td>' . $ten_loai . '</td>
                            <td>
                            <a href="' . $suaLoai . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                            <a href="' . $xoaLoai . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                           </td>
                        </tr>
                        ';
                    }
                    ?>
        </tbody>
        <tfoot>
        <tr>
                <th scope="col">#</th>
                <th scope="col">Mã Loại</th>
                <th scope="col">Tên Loại</th>
                <th scope="col">Chức Nắng</th>
            </tr>
        </tfoot>
    </table>
</div>