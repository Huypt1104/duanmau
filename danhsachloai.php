<?php
include 'connect.php';
$sql = 'SELECT * FROM loai';
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
              <li><a href="hanghoa.php">Hàng hóa</a></li>
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
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>

            <?php foreach($result as $a){ ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $a['ma_loai'] ?></td>
                    <td><?php echo $a['ten_loai'] ?></td>
                    <td><button><a href="edit.php?id=<?php echo $a['ma_loai']?>">Sửa</a></button>   <button><a href="javascript:xoa('delete.php?id=<?php echo $a['ma_loai'] ?>')">Xóa</a></button></td>
                </tr>
            <?php } ?>
           
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <a href="admin.php"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
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