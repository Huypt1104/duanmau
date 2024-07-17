<div class="row mb">
            <div class="boxtitle">Tài khoản</div>
            <div class="boxcontent formtaikhoan">
                <?php
                    if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                ?>
                    <div class="row mb10">
                        <label for="">Xin chào!</label> <br>
                        <?=$user?>
                    </div>
                    <div class="row mb10">
                    <li>
                        <a href="index.php?act=quenmk">Quên mật khẩu</a>
                    </li>
                    <li>
                        <a href="index.php?act=edit_taikhoan">Sửa tài khoản</a>
                    </li>
                    <?php
                        if ($role == 1) {
                    ?>  
                    <li>
                        <a href="admin/index.php">Đăng nhập admin</a>
                    </li>
                    <?php
                        }
                    ?>
                    <li>
                        <a href="index.php?act=thoat">Thoát</a>
                    </li>
                    </div>
                <?php
                    } else {
                ?>
                <form action="index.php?act=dangnhap" method="post">
                    <div class="row mb10">
                        <label for="">Tên đăng nhập</label> <br>
                        <input type="text" name="user" id="">
                    </div>
                    <div class="row mb10">
                        <label for="">Mật khẩu</label> <br>
                        <input type="password" name="pass" id="">
                    </div>
                    <div class="row mb10">
                        <input type="checkbox" name="" id=""> Ghi nhớ tài khoản? <br>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="dangnhap" id="" value="Đăng nhập">
                    </div>
                </form>
                <li>
                    <a href="#">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=dangky">Đăng kí thành viên</a>
                </li>
                <?php
                    }
                ?>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">Danh mục</div>
            <div class="boxcontent2 menudoc">
                <ul>
                    <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm = "index.php?act=sanpham&iddm=".$id;
                            echo '
                                <li><a href = "'.$linkdm.'">'.$name.'</a></li>
                                ';
                        }
                    ?>
                </ul>
            </div>
            <div class="boxfooter searchbox">
                <form action="index.php?act=sanpham" method="post">
                    <input type="text" name="kyw" id="" placeholder="Tìm kiếm">
                    <input type="submit" name="timkiem" value="Tìm kiếm">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="boxtitle">Top 10 yêu thích</div>
            <div class="row boxcontent">
                <?php
                    foreach ($dstop10 as $top10) {
                        extract($top10);
                        $linksp = "index.php?act=sanphamct&id=".$id;
                        $img = $img_path.$image;
                        echo '
                                <div class="row mb10 top10">
                                <img src="'.$img.'" alt="">
                                <a href="'.$linksp.'">'.$name.'</a>
                                </div>
                            ';
                    }
                ?>
            </div>
        </div>