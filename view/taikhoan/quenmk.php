<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            
            <div class="boxtitle">Quên mật khẩu</div>
            <div class="row boxcontent formdangky">
                <form action="index.php?act=quenmk" method="post">
                    <label for="">Email</label> <br>
                    <input type="email" name="email" id=""> <br>
                    
                    <input type="submit" name="guiemail" value="Quên mật khẩu">
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