<?php

function load_All_khach_hang()
{
    $sql = "SELECT * FROM khach_hang order by id_kh desc";
    $list_khachhang = pdo_query($sql);
    return $list_khachhang;
}
function load_new_khach_hang()
{
    $sql = "SELECT * FROM khach_hang order by id_kh desc limit 0,5";
    $list_khachhang = pdo_query($sql);
    return $list_khachhang;
}

function insert_khach_hang($ma_kh, $ho_ten, $mat_khau, $email, $hinh)
{
    $sql = "INSERT INTO khach_hang(ma_kh,ho_ten, mat_khau, email, hinh) VALUES('$ma_kh','$ho_ten','$mat_khau','$email','$hinh')";
    pdo_execute($sql);
}

function check_user($ma_kh, $mat_khau)
{
    $sql = "SELECT * FROM khach_hang WHERE ma_kh='" . $ma_kh . "' and mat_khau='" . $mat_khau . "' ";
    $loai =  pdo_query_one($sql);
    return $loai;
}

function update_khach_hang($id_kh, $ma_kh, $ho_ten, $mat_khau, $email, $hinh)
{
    if ($hinh != "") {
        $sql = "UPDATE khach_hang SET ma_kh ='" . $ma_kh . "', ho_ten ='" . $ho_ten . "', mat_khau ='" . $mat_khau . "',  email ='" . $email . "',  hinh ='" . $hinh . "' WHERE id_kh=".$id_kh;
    }
    else {
        $sql = "UPDATE khach_hang SET ma_kh ='" . $ma_kh . "', ho_ten ='" . $ho_ten . "', mat_khau ='" . $mat_khau . "',  email ='" . $email . "' WHERE id_kh=".$id_kh;
    }
    pdo_execute($sql);

}

function get_user($id_kh) {
    $sql = "SELECT * FROM khach_hang where id_kh=?";
    $result = pdo_query_one($sql,$id_kh);
    return $result;
 }

// function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email){
//     $sql = "UPDATE khach_hang SET mat_khau=?,ho_ten=?,email=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $ma_kh);
// }
