<?php
include 'connect.php';
$sql = 'SELECT a.ma_loai, a.ten_loai, b.ma_hh, b.ten_hh, b.don_gia, b.giam_gia, b.hinh, b.ngay_nhap, b.mo_ta, b.dac_biet, b.so_luot_xem FROM loai as a, hang_hoa as b WHERE a.ma_loai = b.ma_loai';
$result = $conn->query($sql)->fetchAll();
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
           <div class="row2 mb10 formds_loai">
           <table>
                <tr>
                    <th>MÃ HH</th>
                    <th>TÊN HH</th>
                    <th>Giá</th>
                    <th>Hình</th>
                    <th>Loại</th>
                    <th>Hành động</th>
                </tr>

            <?php foreach($result as $a){ ?>
                <tr>
                    <td><?php echo $a['ma_hh'] ?></td>
                    <td><?php echo $a['ten_hh'] ?></td>
                    <td><?php echo $a['don_gia'] ?></td>
                    <td><img width="50px" height="50px" src="<?php echo "img/".$a['hinh'] ?>" alt=""></td>
                    <td><?php echo $a['ten_loai'] ?></td>
                    <td><button><a href="edithh.php?id=<?php echo $a['ma_hh']?>">Sửa</a></button>   <button><a href="javascript:xoa('deletehh.php?id=<?php echo $a['ma_hh'] ?>')">Xóa</a></button></td>
                </tr>
            <?php } ?>
           
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <a href="themhanghoa.php"><input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>

    </div>
    
</body>
</html>
<script>
    function xoa(x){
        if(confirm('Bạn có muốn xóa không')){
            document.location = x;
        }
    }
</script>