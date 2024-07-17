<?php

include "connect.php";
$id = $_GET['id'];
$sql = 'SELECT * from loai';
$result = $conn->query($sql)->fetchAll();
$sqlhh = "SELECT * FROM hang_hoa WHERE ma_hh = '$id'";
$resulthh = $conn->query($sqlhh)->fetch();
if(isset($_POST['them'])){
    $tenhh = $_POST['tenhh'];
    $dongia = $_POST['dongia'];
    $giamgia = $_POST['giamgia'];
    $ngaynhap = $_POST['ngay'];
    $mota = $_POST['mota'];
    $dacbiet = $_POST['dacbiet'];
    $luotxem = $_POST['soluotxem'];
    $loai = $_POST['loai'];
    if(isset($_FILES['image'])){
        $target_dir = "img/";
        $name_img = $_FILES['image']['name'];
        $target_file = $target_dir.$name_img;
        move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
    }
    $sql = "UPDATE hang_hoa SET ten_hh = '$tenhh', don_gia = ' $dongia' , giam_gia = '$giamgia', hinh = '$name_img', ngay_nhap = '$ngaynhap', mo_ta='$mota',dac_biet = '$dacbiet',so_luot_xem='$luotxem',ma_loai='$loai' WHERE ma_hh='$id'";
    $conn->exec($sql);
    echo 'Sửa thành công';
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
          <form action="#" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 formds_loai">
            <label for="">Tên hàng hóa</label>
            <input type="text" name="tenhh" value="<?php echo $resulthh['ten_hh'] ?>"> <br>
            <label for="">Đơn giá</label>
            <input type="text" name="dongia" value="<?php echo $resulthh['don_gia'] ?>"><br>
            <label for="">Giảm giá</label>
            <input type="text" name="giamgia" value="<?php echo $resulthh['giam_gia'] ?>"><br>
            <label for="">Hình</label>
            <input type="file" name="image"><br>
            <label for="">Ngày nhập</label>
            <input type="date" name="ngay"><br>
            <label for="">Mô tả</label>
            <input width="100px" height="300px" type="text" name="mota" value="<?php echo $resulthh['mo_ta'] ?>"><br>
            <label for="">Đặc biệt</label>
            <select name="dacbiet" id="">
                <option value="0">Không</option>
                <option value="1">Có</option>
            </select><br>
            <label for="">Số lượt xem</label>
            <input type="text" name="soluotxem" placeholder="Nhập số lượt xem"> <br>
            <label for="">Loại</label>
            <select name="loai" id="">
                <?php foreach($result as $a){ 
                    $sl = "";
                    if($resulthh['ma_loai']==$a['ma_loai']){
                        $sl = 'selected';
                    }
                    
                    ?>
                    <option value="<?php echo $a['ma_loai'] ?>" selected ><?php echo $a['ten_loai'] ?></option>
                <?php } ?>
            </select><hr>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <input  class="mr20" name="them" type="submit" value="THÊM">
           </div>
          </form>
         </div>
        </div>

    </div>
    
</body>
</html>
