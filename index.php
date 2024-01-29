<?php
ob_start();
session_start();
include "model/pdo.php";
include "model/func_loai.php";
include "model/func_hanghoa.php";
include "model/func_khachhang.php";
include "model/cart.php";
$dslh = load_count_hh_loai();
include "view/header2.php";
include "global_var.php";
include "model/conn.php";
require "PHPMailer/mailer.php";


if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$hhNew = load_All_hang_hoa_home();
$counthh_loai = load_count_hh_loai() ;
$dstop10 = load_All_hang_hoa_top10();
$dslh = load_All_loai();


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'gopy':
            include "view/gopy.php";
            break;
        case 'hoidap':
            include "view/hoidap.php";
            break;
        case 'register':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['register']) && ($_POST['register'])) {
                    $ma_kh = $_POST['ma_kh'];
                    $ho_ten = $_POST['ho_ten'];
                    $mat_khau = $_POST['mat_khau'];
                    $email = $_POST['email'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "uploads/user_img/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]); // name, tmp_name : Key truy xuất tới file
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    $mat_khau = password_hash($mat_khau, PASSWORD_DEFAULT); // mã hóa pass

                    insert_khach_hang($ma_kh, $ho_ten, $mat_khau, $email, $hinh);
                    $thongbao = "Đã đăng ký thành công";
                }
            }
            include "view/account/register.php";
            break;

        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $ma_kh = $_POST['ma_kh'];
                $mat_khau = $_POST['mat_khau'];
                // $checkuser = check_user($ma_kh, $mat_khau);
                // pdo_get_connection();
                $query = $conn->prepare('SELECT *  FROM khach_hang WHERE ma_kh = :ma_kh');
                $query->bindValue(':ma_kh', $ma_kh);
                $query->execute();
                $checkuser = $query->fetch(PDO::FETCH_ASSOC);


                if (!$checkuser) {
                    $thongbao = 'Tài khoản không tồn tại!';
                } else {
                    // check pass
                    if (password_verify($mat_khau, $checkuser['mat_khau'])) {
                        $_SESSION['khachhang'] = $checkuser;
                        header('location: index.php');
                    } else {
                        $thongbao = 'Sai mật khẩu rồi bạng !!!';
                    }
                }


                // if (is_array($checkuser)) {
                //     $_SESSION['khachhang'] = $checkuser;
                //     $thongbao = "Đăng Nhập Thành Công";
                //     header('location: index.php');
                // } else {
                //     $thongbao = "Tài khoản không tồn tại";
                // }
            }
            include "view/account/login.php";
            break;

        case 'quen_matkhau':

            if (!empty($_POST['email']) && !empty($_POST['ma_kh'])) {
                $email = $_POST['email'];
                $ma_kh = $_POST['ma_kh'];
                $stmt = $conn->prepare("SELECT * FROM khach_hang WHERE email =? and ma_kh =?");
                $stmt->execute([$email, $ma_kh]);
                if ($stmt->fetchColumn()) {
                    echo "ĐÚng";
                    $context = "http://localhost/SUBPHP/DuAnMau_01/index.php?act=reset_matkhau&ma_kh=" . $ma_kh;
                    sendMail($email, "Reset PassWord", $context);
                    echo '<script>alert("Check your email box")</script>';
                } else {
                    echo "Username và password của bạn không đúng";
                }
            } else echo "Vui lòng nhập email và username";
            include "view/account/quen_matkhau.php";

            break;

        case 'logout':
            include 'view/account/logout.php';
            break;
            
        case 'reset_matkhau':
            if (isset($_REQUEST['ma_kh'])) {
                echo "có mã khách hang";
                echo $_REQUEST['ma_kh'];
            } else {
                echo "khogn có";
            }
            if (!empty($_POST['mat_khau']) && !empty($_POST['xnmk']) && !empty($_REQUEST['ma_kh'])) {
                if ($_POST['mat_khau'] == $_POST['xnmk']) {
                    //Nếu có username mà người ta đã nhập ở form forgot rồi thì update lại pass cho username đó
                    $stmt = $conn->prepare("UPDATE khach_hang SET mat_khau=? WHERE ma_kh = ?");
                    $hs = password_hash($_POST['mat_khau'], PASSWORD_DEFAULT);
                    // $_REQUEST['usr'] là username lấy từ link gửi trong mail.
                    $stmt->execute([$hs, $_REQUEST['ma_kh']]);
                    echo "cạp naht a";
                    header("location: index.php?act=login");
                    exit();
                } else echo 'Passwords not match';
            } else echo "Can't change password!";
            $conn == null;
            include 'view/account/reset.php';

            break;

            // case 'reset':
            //     include 'view/account/reset.php';
            //     break;
        case 'edit_khachhang':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_kh = $_POST['id_kh'];
                $ma_kh = $_POST['ma_kh'];
                $ho_ten = $_POST['ho_ten'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "uploads/user_img/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]); // name, tmp_name : Key truy xuất tới file
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    //  echo "Sorry, there was an error uploading your file.";
                }
                update_khach_hang($id_kh, $ma_kh, $ho_ten, $mat_khau, $email, $hinh);
                $thongbao = "Đã cập nhật thành công";
                include 'view/account/account_confirm.php';
                // header('location: index.php?act=edit_khachhang');
            }
            include "view/account/edit_khachhang.php";
            break;

        case 'hanghoachitiet':

            if (isset($_GET['mahh']) && ($_GET['mahh'] > 0)) {
                $ma_hh = $_GET['mahh'];
                $one_product = load_one_hang_hoa($ma_hh);
                extract($one_product); // lấy ma_loaihh trong $one_product ( vì $one_product đã load ra được ma_loaihh của hàng hóa)
                $hh_cungloai =  load_hang_hoa_cung_loai($ma_hh, $ma_loaihh);
                include "view/hanghoachitiet.php";
            } else {
                include "view/home.php";
            }
            break;

        case 'hanghoa':
            if (isset($_POST['keyword']) && ($_POST['keyword'] != "")) {
                $keyword = $_POST['keyword'];
            } else {
                $keyword = "";
            }

            if (isset($_GET['maloai']) && ($_GET['maloai'] > 0)) {
                $maloai = $_GET['maloai'];
            } else {
                $maloai = 0;
            }
            $dshh =  load_All_hang_hoa($keyword, $maloai);
            $tenloai = load_ten_dm($maloai);
            include "view/hanghoa.php";
            break;

        case 'viewcart':
            include 'view/cart/view_cart.php';
            break;

        case 'addtocart':
            // add thông tin sản phẩm từ form add to cart đến session
            if(isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $ma_hh = $_POST['ma_hh'];
                $ten_hh = $_POST['ten_hh'];
                $don_gia = $_POST['don_gia'];
                $hinh = $_POST['hinh'];
                $soluong = 1;
                $thanhtien = $soluong * $don_gia;
                $spadd = [$ma_hh, $ten_hh, $don_gia, $hinh, $soluong, $thanhtien];
                array_push($_SESSION['mycart'], $spadd);
                

            }
            include "view/cart/view_cart.php";
            break;
            
            case 'delcart' :
                if(isset($_GET['idcart'])) {
                    array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
                    echo $_GET['idcart'];   
                } else {
                    $_SESSION['mycart'] = [];
                }
                header('location: index.php?act=viewcart');
                break;

        case 'bill' :
            include "view/cart/bill.php";
            break;
        case 'billconfirm' :
            // tạo bill = lấy thông tin trên bill
            if(isset($_POST['dathang']) && ($_POST['dathang'])) {
                if(isset($_SESSION['khachhang'])) $iduser = $_SESSION['khachhang']['id_kh'];
                else $id = 0;
                $ma_kh = $_POST['ma_kh'];
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $thanhpho = $_POST['thanhpho'];
                $pttt = $_POST['pttt'];
                $ngay_dathang = date('h:i:sa d/m/Y');
                $tong_donhang = tong_donhang();
                // Tạo bill 
                $id_bill = insert_bill($iduser,$ma_kh, $ho_ten, $email, $sdt, $diachi, $thanhpho, $pttt, $ngay_dathang, $tong_donhang);

                // insert into cart : session['mycart'] & id_bill
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['khachhang']['id_kh'], $cart[0], $cart[1], $cart[2], $cart[3], $cart[4], $cart[5], $id_bill);
                }
                // xóa SESSION mycart
                $_SESSION['mycart'] = [];

            }
            $bill = load_one_bill($id_bill);
            $bill_ct = load_All_cart($id_bill);
            include "view/cart/billconfirm.php";
            break;
        case 'mybill':
            $listbill = load_All_bill($_SESSION['khachhang']['id_kh']);
            include "view/cart/mybill.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";

// include "view/header2.php";
ob_end_flush();
