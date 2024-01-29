<?php
session_start();
include "../../model/pdo.php";
include "../../model/func_binhluan.php";
$ma_hh_bl = $_REQUEST['ma_hh_bl'];


$load_binhluan = load_All_binhluan($ma_hh_bl);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<td></td>

    <div class="row">
        <div class="boxcontent">
            <table>
                <?php
                echo "Nội dung bình luận :";
                foreach ($load_binhluan as $binhluan) {
                    extract($binhluan);
                    echo '<tr><td>'.$noi_dung.'</td>';
                    echo '<td>'.$id_kh_bl.'</td>';
                    echo '<td>'.$ngay_bl.'</td></tr>';
                }
                ?>
            </table>
        </div>
    </div>

    <div class="row">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="ma_hh_bl" value="<?= $ma_hh_bl ?>">
            <input type="hidden" name="id_kh_bl" value="<?= $id_kh_bl ?>">
            
            <input type="text" name="noidung">
            <div class="form-group mb-0">
                <input type="submit" name="guibinhluan" value="Gửi bình Luận" class="btn btn-primary px-3">
            </div>
        </form>

        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noi_dung = $_POST['noidung'];
            $ma_hh_bl = $_POST['ma_hh_bl'];
            $id_kh_bl = $_SESSION['khachhang']['id_kh'];

            $ngay_bl = date('h:i:sa d/m/Y');
            insert_binhluan($noi_dung, $ma_hh_bl, $id_kh_bl, $ngay_bl);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>

</body>

</html>