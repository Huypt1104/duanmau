<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            
            <div class="boxtitle">Đăng ký thành viên</div>
            <div class="row boxcontent formdangky">
                <form action="index.php?act=dangky" method="post">
                    <label for="">Email</label> <br>
                    <input type="email" name="email" id=""> <br>
                    <label for="">Username</label> <br>
                    <input type="text" name="user" id=""> <br>
                    <label for="">Password</label> <br>
                    <input type="password" name="pass" id=""> <br>
                    <input type="submit" name="dangky" value="Đăng ký">
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