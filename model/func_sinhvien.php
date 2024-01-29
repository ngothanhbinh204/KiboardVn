<?php
function insert_banh_mi($ten, $gia, $hinh, $iddm)
{
    $sql = "INSERT INTO sanpham(ten, gia, hinh, iddm) VALUES('$ten','$gia','$hinh','$iddm')";
    pdo_execute($sql);
}
function load_All_loai_banh_mi()
{
    $sql = "SELECT * FROM danhmuc order by tenloai_banhmi desc";
    $listloai = pdo_query($sql);
    return $listloai;
}

function delete_hang_hoa($ma_hh)
{
    $sql = "DELETE FROM hang_hoa WHERE ma_hh=" . $ma_hh;
    pdo_execute($sql);
}


function load_All_sinh_vien_top3()
{

    $sql = "SELECT bangdiem.diem , sinhvien.hoTen , sinhvien.maSinhVien
    FROM bangdiem 
    join sinhvien on bangdiem.maSinhVien = sinhvien.idSinhVien
    GROUP by bangdiem.diem DESC LIMIT 0,3";
    $listsinhvien = pdo_query($sql);
    return $listsinhvien;
}

function load_All_hang_hoa_home()
{

    $sql = "SELECT * FROM hang_hoa WHERE 1 order by ma_hh asc limit 0,8";
    $listHanghoa = pdo_query($sql);
    return $listHanghoa;
}

function load_All_banh_mi()
{

    $sql = "SELECT * FROM sanpham WHERE iddm = 1 ";
    $listbanhmi = pdo_query($sql);
    return $listbanhmi;
}

function load_ten_dm($ma_loaihh)
{   
    if($ma_loaihh > 0) {
    $sql = "SELECT * FROM loai WHERE ma_loai=" . $ma_loaihh;
    $loai =  pdo_query_one($sql);
    extract($loai);
    return $ten_loai;
    } else {
        return "";
    }
}

function load_one_hang_hoa($ma_hh)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=" . $ma_hh;
    $loai =  pdo_query_one($sql);
    return $loai;
}

function load_hang_hoa_cung_loai($ma_hh, $ma_loaihh)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_loaihh=".$ma_loaihh." AND ma_hh <> " . $ma_hh;
    $loai =  pdo_query($sql);
    return $loai;
}

function update_hang_hoa($mahh, $maloaihh, $tenhh, $dongia, $ngaynhap, $mota, $hinh)
{
    if ($hinh != "") {
        $sql = "UPDATE hang_hoa SET ten_hh ='" . $tenhh . "', ma_loaihh ='" . $maloaihh . "',  don_gia ='" . $dongia . "',  ngay_nhap ='" . $ngaynhap . "',  hinh ='" . $hinh . "',  mo_ta ='" . $mota . "' WHERE ma_hh=".$mahh;
    }
    else {
        $sql = "UPDATE hang_hoa SET ten_hh ='" . $tenhh . "', ma_loaihh ='" . $maloaihh . "',  don_gia ='" . $dongia . "',  ngay_nhap ='" . $ngaynhap . "',  mo_ta ='" . $mota . "' WHERE ma_hh=".$mahh;
        
    }
    pdo_execute($sql);
}

function count_hang_hoa()
{
    $sql = "SELECT COUNT(`ma_hh`) as SoLuongHangHoa FROM `hang_hoa` WHERE 1;";
    $hanghoa = pdo_query_one($sql);
    return $hanghoa;
}
?>