<?php
include "model/pdo_thi.php";
include "model/func_sinhvien.php";
$top3sinhvien = load_All_sinh_vien_top3();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        
            
       
  
    <tbody>
<?php
            foreach ($top3sinhvien as $sinhvien) {
                extract($sinhvien);
                
                echo '

                        <tr>
                            <td>' . $maSinhVien . '</td>
                            <td>' . $hoTen . '</td>
                            <td>' . $diem . '</td>
                        </tr>
                        ';
            }
            ?>
             </tbody>
             </table>
</body>
</html>