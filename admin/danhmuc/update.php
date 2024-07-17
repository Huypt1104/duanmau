<?php
    if (is_array($dm)) {
        extract($dm);
    }
?>

<div class="row">
            <div class="row frmtitle">
                <h1>Cập nhập loại hàng</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        <label for="">Mã loại</label> <br>
                        <input type="text" name="maloai" id="" disabled>
                    </div>
                    <div class="row mb10">
                        <label for="">Tên loại</label> <br>
                        <input type="text" name="tenloai" id="" value="<?php if(isset($name)&&($name)!="") echo $name; ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id)>0) echo $id; ?>">
                        <input type="submit" name="capnhap" id="" value="Cập nhập">
                        <input type="reset" name="" id="" value="Nhập lại">
                        <a href="index.php?act=listdm"><input type="button" name="" id="" value="Danh sách"></a>
                    </div>
                    <?php 
                        if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                        }
                    ?>

                </form>
            </div>
        </div>
    </div>