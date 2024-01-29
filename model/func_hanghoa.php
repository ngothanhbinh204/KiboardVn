<?php
function insert_hang_hoa($ten_hh, $dongia, $hinh, $ngaynhap, $mota, $maloaihh)
{
    $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, hinh, ngay_nhap, mo_ta, ma_loaihh) VALUES('$ten_hh','$dongia','$hinh','$ngaynhap','$mota','$maloaihh')";
    pdo_execute($sql);
}

function delete_hang_hoa($ma_hh)
{
    $sql = "DELETE FROM hang_hoa WHERE ma_hh=" . $ma_hh;
    pdo_execute($sql);
}


function load_All_hang_hoa_top10()
{

    $sql = "SELECT * FROM hang_hoa WHERE 1 order by so_luot_xem desc limit 0,10";
    $listHanghoa = pdo_query($sql);
    return $listHanghoa;
}

function load_All_hang_hoa_home()
{

    $sql = "SELECT * FROM hang_hoa WHERE 1 order by ma_hh asc limit 0,8";
    $listHanghoa = pdo_query($sql);
    return $listHanghoa;
}

function load_All_hang_hoa($keyword, $maloaihh)
{

    $sql = "SELECT * FROM hang_hoa WHERE 1 ";
    if ($keyword != "") {
        $sql .= " and ten_hh like '%" . $keyword . "%'";
    }
    if ($maloaihh > 0) {
        $sql .= " and ma_loaihh = '" . $maloaihh . "'";
    }
    $sql .= " order by ma_hh desc";
    $listHanghoa = pdo_query($sql);
    return $listHanghoa;
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