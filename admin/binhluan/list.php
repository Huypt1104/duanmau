<div class="row">
            <div class="row frmtitle">
                <h1>Danh sách bình luận</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>NỘI DUNG</th>
                            <th>Iduser</th>
                            <th>Idpro</th>
                            <th>Ngày bình luận</th>
                            <th></th>
                        </tr>
                        
                        <?php 
                            foreach ($listbl as $bl) {
                                extract($bl);
                                $suabl = "index.php?act=suabl&id=".$id;
                                $xoabl = "index.php?act=xoabl&id=".$id;

                                echo '
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$noidung.'</td>
                                    <td>'.$iduser.'</td>
                                    <td>'.$idpro.'</td>
                                    <td>'.$ngaybinhluan.'</td>
                                    <td><a href="'.$suabl.'"><input type="button" value="Sửa"> </a> | <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                            }
                        ?>
                        
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" name="" id="" value="Chọn tất cả">
                    <input type="button" name="" id="" value="Bỏ chọn tất cả">
                    <input type="button" name="" id="" value="Xóa các mục đã chọn">
                    <a href="index.php?act=adddm"><input type="button" name="" id="" value="Nhập thêm"></a>
                </div>
            </div>
        </div>