<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM loai WHERE ma_loai = '$id' ";
$result = $conn->query($sql)->fetch();
if(isset($_POST['sua'])){
    $tenloai = $_POST['tenloai'];
    $sql = "UPDATE loai SET ten_loai='$tenloai' WHERE ma_loai = $id";
    $conn->exec($sql);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
     
    </style>
</head>
<body>
    <div class="boxcenter">
       <!-- BIGIN HEADER -->
       <header>
        <div class="row mb header_admin">
            <h1>Admin</h1>
        </div>
        <div class="row mb menu">
            <ul>
                
              <li><a href="index.html">Trang chủ</a></li>
              <li><a href="admin.html">Danh mục</a></li>
              <li><a href="">Hàng hóa</a></li>
              <li><a href="">Khách hàng</a></li>
              <li><a href="">Bình luận</a></li>
              <li><a href="">Thống kê</a></li>
            </ul>
        </div>
       </header>
        <!-- END HEADER -->
        <div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <input type="text" name="tenloai" value="<?php echo $result['ten_loai'] ?>">
           <input type="submit" name="sua" value="Sửa">



          </form>
         </div>
        </div>

    </div>
    <a href="danhsachloai.php">Danh sách</a>
</body>
</html>