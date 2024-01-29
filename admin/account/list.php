<div class="main-content ">
<div class="  alert alert-success row frmtitle">
        <h1>Danh Sách User </h1>
    </div>
    <div class=" frmcontent">
        <div  class=" ">
            <table style="text-align: center;" class="table">
                <thead  class="thead-dark">
                    <tr>
                        <th scope="col">Mã Tài Khoản</th>
                        <th scope="col">Username</th>
                        <th scope="col">Họ Tên</th>
                        <th scope="col">Hình</th>
                        <!-- <th scope="col">Mật Khẩu</th> -->
                        <th scope="col">Email</th>
                        <th scope="col">Vai Trò</th>
                        <th scope="col">Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_khachhang as $khachhang) {
                        extract($khachhang);
                        $hinh_path = "../uploads/user_img/" . $hinh;
                        if (is_file($hinh_path)) {
                            $hinh = "<img src='" . $hinh_path . "' height='100'>";
                        } else {
                            $hinh = "not";
                        }
                        $sua_account = "index.php?act=sua_account&id_kh=".$id_kh;
                        $xoa_account = "index.php?act=xoa_account&id_kh=".$id_kh;
                        echo '
                        <tr>
                            <td>' . $id_kh . '</td>
                            <td>' . $ma_kh . '</td>
                            <td>' . $ho_ten . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $email . '</td>
                            <td>' . $vai_tro . '</td>

                            <td> <a href="'.$sua_account.'"> <input type="button" value="Sửa"> </a> <a href="'.$xoa_account.'"> <input type="button" value="Xóa"> </a></td>
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
            <a href="index.php?act=addLoai"> <input type="button" value="Nhập Thêm"> </a>
        </div>

    </div>
</div>