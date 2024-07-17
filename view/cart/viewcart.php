<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">Giỏ hàng</div>
            <div class="row boxcontent cart">
            <table>
                

                <?php
                    viewcart(0);
                ?>
            </table>
            </div>
        </div>
        <div class="row mb bill">
        <a href="index.php?act=bill"><input type="button" value="Tiếp tục đặt hàng"></a>
        <a href="index.php?act=delcart"> <input type="button" value="Xóa giỏ hàng"></a>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>