<?php
include "../model/pdo.php";
include "../model/func_loai.php";
include "../model/func_hanghoa.php";
include "../model/func_khachhang.php";
include "../model/cart.php";
include "../model/func_thongke.php";
include "header.php";
// controller
 $count_hh = count_hang_hoa();
 $list_khachhang = load_new_khach_hang();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhsachKh': // link tới danh sách loại hàng hóa
            $list_khachhang = load_All_khach_hang();
            include "account/list.php";
            break;
            // Controller Loại Hàng Hóa
        case 'addLoai': // link tới thêm mới Loại hàng hóa
            // Kiểm tra xem user có click vào nút add không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_loai($tenloai);
                $thongbao = "Thêm Loại Sản Phẩm Mới Thành Công !!!";
            }
            include "loai/add.php";
            break;
            // ------------------------------------------------------------
        case 'listLoai': // link tới danh sách loại hàng hóa
            $listloai = load_All_loai();
            include "loai/list.php";
            break;
            // ------------------------------------------------------------
        case 'suaLoai': // sửa thông tin loại hàng hóa
            if (isset($_GET['ma_loai']) && ($_GET['ma_loai']) > 0) {
                $loai = load_one_loai($_GET['ma_loai']);
            }
            include "loai/update.php";
            break;
            // ------------------------------------------------------------
        case 'xoaLoai': // xóa loại hàng hóa
            if (isset($_GET['ma_loai']) && ($_GET['ma_loai']) > 0) {
                delete_loai($_GET['ma_loai']);
            }
            $listloai = load_All_loai();
            include "loai/list.php";
            break;
            // ------------------------------------------------------------
        case 'updateLoai': // update loại hàng hóa
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $maloai = $_POST['maloai'];
                update_loai($maloai, $tenloai);
                $thongbao = "Cập Nhật Thành Công !!!";
            }
            $listloai = load_All_loai();
            include "loai/list.php";
            break;
            // ------------------------------------------------------------

            // Controller Hàng Hóa -----------------------------------------------------

        case 'addHanghoa':
            // Kiểm tra xem user có click vào nút add không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $maloaihh = $_POST['maloaihh'];
                $tenhh = $_POST['tenhh'];
                $dongia = $_POST['dongia'];
                $ngaynhap = $_POST['ngaynhap'];
                $mota = $_POST['mota'];
                
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]); // name, tmp_name : Key truy xuất tới file
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                   // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                  //  echo "Sorry, there was an error uploading your file.";
                }
                insert_hang_hoa($tenhh, $dongia, $hinh, $ngaynhap, $mota, $maloaihh);
                $thongbao = "Thêm Loại Sản Phẩm Mới Thành Công !!!";
            }
            $listloai = load_All_loai();
            include "hang_hoa/add.php";
            break;

        case 'listHanghoa': // link tới danh sách loại hàng hóa
            if(isset($_POST['listloc']) && ($_POST['listloc'])) {
                $keyword = $_POST['keyword'];
                $maloaihh = $_POST['maloaihh'];   
            } else {
                $keyword ='';
                $maloaihh = 0;
            }
            $listloai = load_All_loai();
            $listhanghoa = load_All_hang_hoa($keyword, $maloaihh);
            include "hang_hoa/list.php";
            break;

            case 'xoaHanghoa': // xóa loại hàng hóa
                if (isset($_GET['ma_hh']) && ($_GET['ma_hh']) > 0) {
                    delete_hang_hoa($_GET['ma_hh']);
                }
                $listloai = load_All_loai();
                $listhanghoa = load_All_hang_hoa("", 0);
                include "hang_hoa/list.php";
                break;

        case 'suaHanghoa': // sửa thông tin loại hàng hóa
            if (isset($_GET['ma_hh']) && ($_GET['ma_hh']) > 0) {
                $hanghoa = load_one_hang_hoa($_GET['ma_hh']);
            }
            $listloai = load_All_loai();
            include "hang_hoa/update.php";
            break;
            
        case 'updateHanghoa': // update loại hàng hóa
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $maloaihh = $_POST['maloaihh'];
                $mahh = $_POST['mahh'];
                $tenhh = $_POST['tenhh'];
                $dongia = $_POST['dongia'];
                $ngaynhap = $_POST['ngaynhap'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]); // name, tmp_name : Key truy xuất tới file
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                   // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                  //  echo "Sorry, there was an error uploading your file.";
                }
                update_hang_hoa($mahh,$maloaihh,$tenhh, $dongia, $ngaynhap, $mota, $hinh);
                $thongbao = "Cập Nhật Thành Công !!!";
            }
            $listloai = load_All_loai();
            $listhanghoa = load_All_hang_hoa("", 0);
            include "hang_hoa/list.php";
            break;
            // ------------------------------------------------------------


        case 'listbill':
            if(isset($_POST['keyword']) && ($_POST['keyword'] != "")) {
                $keyword = $_POST['keyword'];
            } else {
                $keyword = "";
            }
            $listbill =  load_All_bill($keyword,0);
            include "bill/listbill.php";
            break;
            
        case 'thongke':
            $list_thongke =  load_All_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $list_thongke =  load_All_thongke();
            include "thongke/bieudo.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
