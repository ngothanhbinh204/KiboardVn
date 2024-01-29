<?php
    include "model/pdo_thi.php";
    include "model/func_banhmi.php";

    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $iddm = $_POST['iddm'];
        $tenhh = $_POST['tenhh'];
        $dongia = $_POST['dongia'];
        $hinh = $_FILES['hinh']['name'];
        $target_dir = "uploads_banhmi/";
        $target_file = $target_dir . basename($_FILES["hinh"]["name"]); // name, tmp_name : Key truy xuất tới file
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
           // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        } else {
          //  echo "Sorry, there was an error uploading your file.";
        }
        insert_banh_mi($tenhh, $dongia, $hinh, $iddm);
    }
    $listloai = load_All_loai_banh_mi();
    $listbanhmi = load_All_banh_mi();
?>
<div class="main-content">
    <div class=" alert alert-success row frmtitle">
        <h1>Thêm Mới Bánh mì </h1>
    </div>

    <table id="example" class="table table-striped" style="width:100%">
        <form action="" method="post" enctype="multipart/form-data">
            <div class=" row form-group">
                <label for="text">Danh mục sản phẩm</label>
                <select name="iddm">
                    <?php
                    foreach ($listloai as $loai) {
                        extract($loai);
                        echo '
                        <option value="' . $id . '">"' . $tenloai_banhmi . '"</option>;
                        ';
                    }
                    ?>

                </select>
            </div>
            <div class=" row form-group">
                <label for="">Nhập Tên Bánh Mì</label>
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
            <div class=" mb10">
                <a href=""><input type="submit" name="themmoi" value="Thêm Mới"></a>
                <a href=""><input type="reset" value="Nhập Lại"></a>
            </div>

        </form>
       
    </table>



    <table>
        <tbody>
        <?php
            foreach ($listbanhmi as $banhmi) {
                extract($banhmi);
           
                $hinh_path = "uploads_banhmi/" . $hinh;
                if (is_file($hinh_path)) {
                    $hinh = "<img src='" . $hinh_path . "' height='100'>";
                } else {
                    $hinh = "Chưa Có Hình Ảnh Sản Phẩm";
                }
                echo '
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $ten . '</td>
                            <td>' . $gia . '</td>
                            <td>' . $hinh . '</td>
                       
                            
                        </tr>
                        ';
            }
            ?>
        </tbody>
    </table>
</div>