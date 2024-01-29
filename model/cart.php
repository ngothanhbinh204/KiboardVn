<?php
function viewcart($del)
{
    $tong = 0;
    $i = 0;

    if ($del == 1) {
        $xoahh_th = ' <th>Remove</th>';
    } else {
        $xoahh_th = "";
    }

    echo '
    <thead class="thead-dark">
    <tr>
        <th>Tên SP</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th>Tổng</th>
        ' . $xoahh_th . '
    </tr>
</thead>
    ';
    foreach ($_SESSION['mycart'] as $row_cart) {
        $hinh = $row_cart[3];
        $thanhtien = $row_cart[2] * $row_cart[4];
        $tong += $thanhtien;
        if ($del == 1) {
            $xoahh_td = ' <td class="align-middle"> <a href="index.php?act=delcart&idcart=' . $i . '"> <button name="" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </button> </a> <>';
        } else {
            $xoahh_td = "";
        }

        echo ' 
            
            <tr>
                    <td class="align-middle"><img src="' . $hinh . '" alt="" style="width: 50px;">' . $row_cart[1] . '</td>
                    <td class="align-middle">' . $row_cart[2] . '</td>
                    <td class="align-middle">
                        <div class="input-group quantity mx-auto" style="width: 100px;">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-primary btn-minus" >
                                <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="' . $row_cart[4] . '">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle">' . $thanhtien . '</td>
                    ' . $xoahh_td . ' 
                </tr>';
        $i += 1;
    }
}

function bill_chitiet($listbill)
{
    $tong = 0;
    $i = 0;

    echo '
        <thead class="thead-dark">
            <tr>
                <th>Tên SP</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Tổng</th>
            </tr>
        </thead>
        ';
    foreach ($listbill as $row_cart) {
        $hinh = $row_cart['hinh'];
        $tong += $row_cart['thanh_tien'];
        echo ' 
            
            <tr>
                    <td class="align-middle"><img src="' . $hinh . '" alt="" style="width: 50px;">' . $row_cart['ten_hh'] . '</td>
                    <td class="align-middle">' . $row_cart['don_gia'] . '</td>
                    <td class="align-middle">
                        <div class="input-group quantity mx-auto" style="width: 100px;">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-primary btn-minus" >
                                <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="' . $row_cart['so_luong'] . '">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle">' . $row_cart['thanh_tien'] . '</td>
                </tr>';
        $i += 1;
    }
    echo '
    <tr>
        <td colspan="4"> Tổng Đơn Hàng</td>
        <td>' . $tong . '</td>
    </tr>
';
}



function tong_donhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $row_cart) {
        $thanhtien = $row_cart[2] * $row_cart[4];
        $tong += $thanhtien;
    }
    return $tong;
}

function insert_bill($iduser, $ma_kh, $ho_ten, $email, $sdt, $diachi, $thanhpho, $pttt, $ngay_dathang, $tong_donhang)
{
    $sql = "INSERT INTO bill(iduser, bill_username, bill_hoten, bill_email, bill_sdt, bill_diachi, bill_thanhpho, bill_pttt, bill_ngay_dathang, bill_tong_donhang) VALUES('$iduser','$ma_kh', '$ho_ten', '$email', '$sdt', '$diachi', '$thanhpho', '$pttt', '$ngay_dathang', '$tong_donhang')";
    return pdo_execute_return_lastInsertID($sql);
}

function insert_cart($iduser, $idpro, $ten_hh, $don_gia, $hinh, $so_luong, $thanh_tien, $idbill)
{
    $sql = "INSERT INTO cart(iduser, idpro , ten_hh, don_gia, hinh, so_luong, thanh_tien, idbill) VALUES('$iduser','$idpro', '$ten_hh', '$don_gia', '$hinh', '$so_luong', '$thanh_tien', '$idbill')";
    return pdo_execute($sql);
}
function load_one_bill($idbill)
{
    $sql = "SELECT * FROM bill WHERE id=" . $idbill;
    $bill =  pdo_query_one($sql);
    return $bill;
}
// load nhiều sản phẩm tron giỏ hàng
function load_All_cart($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill =  pdo_query($sql);
    return $bill;
}

function count_bill_user($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill =  pdo_query($sql);
    return sizeof($bill);
}
function load_All_bill($keyword = "", $iduser=0)
{

    $sql = "SELECT * FROM bill WHERE 1";
    if ($iduser > 0) $sql .= " AND iduser=" . $iduser; // nếu không có iduser thì hiện tất cả bill lên và ngược lại
    if ($keyword != "") $sql .= " AND id like '%" . $keyword . "%'";
    $sql .= " order by id desc";
    $listbill =  pdo_query($sql);
    return $listbill;
}

function get_ttdh($ttdh)
{
    switch ($ttdh) {
        case '0':
            $trangthai = "Đơn Hàng Mới";
            break;
        case '1':
            $trangthai = "Đang Xử Lí";
            break;
        case '2':
            $trangthai = "Đang Giao Hàng";
            break;
        case '3':
            $trangthai = "Đã Giao Hàng";
            break;

        default:
            $trangthai = "Đơn Hàng Mới";
            break;
    }
    return $trangthai;
}
