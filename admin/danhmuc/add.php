<div class="row">
            <div class="row frmtitle">
                <h1>Thêm mới loại hàng hóa</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        <label for="">Mã loại</label> <br>
                        <input type="text" name="maloai" id="" disabled>
                    </div>
                    <div class="row mb10">
                        <label for="">Tên loại</label> <br>
                        <input type="text" name="tenloai" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" id="" value="Thêm mới">
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