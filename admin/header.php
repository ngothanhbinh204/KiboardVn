<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    .header_logo{
        color: white;
    }
</style>
<body>
<!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <div class="header_logo">
        <h1>Page Admin</h1>
    </div>
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Trang Chủ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?act=addLoai">Danh Mục</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="index.php?act=addHanghoa">Hàng Hóa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?act=danhsachKh">Khách Hàng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?act=danhsachBl">Bình Luận</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?act=listbill">Danh Sách Đơn Hàng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?act=thongke">Thống Kê</a>

      </li>
    </ul>
  </div>
</nav> -->

<div class="container-fluid main-page">

        <div class="app-main">
            <nav class="sidebar bg-primary">
                <ul>
                    <li>
                        <a href="index.php"><i class="fa-solid fa-house ico-side"></i>Dashboards</a>
                    </li>
                    <li>
                        <a href="index.php?act=listbill"><i class="fa-solid fa-cart-shopping ico-side"></i>Quản kí đơn hàng</a>
                    </li>
                    <li>
                        <a href="index.php?act=addLoai"><i class="fa-solid fa-folder-open ico-side"></i>Quản lí danh muc</a>
                    </li>
                    <li>
                        <a href="index.php?act=addHanghoa"><i class="fa-solid fa-keyboard ico-side"></i>Quản lí sản phẩm</a>
                    </li>
                    <li>
                        <a href="index.php?act=danhsachKh"><i class="fa-solid fa-user ico-side"></i>Quản lí thành viên</a>
                    </li>
                    <li>
                        <a href="index.php?act=danhsachKh"><i class="fa-solid fa-user ico-side"></i>Quản lí bình luận</a>
                    </li>
                </ul>
            </nav>
            
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>
</html>