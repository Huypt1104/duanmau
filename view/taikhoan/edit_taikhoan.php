<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            
            <div class="boxtitle">Cập nhập tài khoản</div>
            <div class="row boxcontent formdangky">
                <?php
                    if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);

                    }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <label for="">Email</label> <br>
                    <input type="email" name="email" id="" value="<?=$email?>"> <br>
                    <label for="">Username</label> <br>
                    <input type="text" name="user" id="" value="<?=$user?>"> <br>
                    <label for="">Password</label> <br>
                    <input type="password" name="pass" id="" value="<?=$pass?>"> <br>
                    <label for="">Địa chỉ</label> <br>
                    <input type="text" name="address" id="" value="<?=$address?>"> <br>
                    <label for="">Điện thoại</label> <br>
                    <input type="text" name="tel" id="" value="<?=$tel?>"> <br>

                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="capnhap" value="Cập nhập">
                    <input type="reset" value="Nhập lại">
                </form>
                <h3 class="thongbao">
                <?php
                    if (isset($thongbao)&&($thongbao!="")) {
                        echo $thongbao;
                    }
                ?>
                </h3>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>