<?php
function insert_loai($tenloai)
{
    $sql = "INSERT INTO loai(ten_loai) VALUES('$tenloai')";
    pdo_execute($sql);
}

function delete_loai($maloai)
{
    $sql = "DELETE FROM loai WHERE ma_loai=" . $maloai;
    pdo_execute($sql);
}

// function load_count_hh_loai()
// {
//     $sql = "SELECT COUNT(ma_loai) FROM loai WHERE 1";
//     $listloai = pdo_query_one($sql);
//     return $listloai;
// }

function load_All_loai()
{
    $sql = "SELECT * FROM loai order by ten_loai desc";
    $listloai = pdo_query($sql);
    return $listloai;
}

function load_count_hh_loai()
{
    $sql = "SELECT L.ma_loai, L.ten_loai, COUNT(H.ma_hh) AS SoLuongHangHoa FROM loai AS L LEFT JOIN hang_hoa AS H ON L.ma_loai = H.ma_loaihh GROUP BY L.ma_loai, L.ten_loai;";
    $listloai = pdo_query($sql);
    
    return $listloai;
}

function load_one_loai($maloai)
{
    $sql = "SELECT * FROM loai WHERE ma_loai=" . $maloai;
    $loai =  pdo_query_one($sql);
    return $loai;
}

function update_loai($maloai, $tenloai)
{
    $sql = "UPDATE loai
            SET ten_loai ='" . $tenloai . "'
            WHERE ma_loai=" . $maloai;
    pdo_execute($sql);
}
