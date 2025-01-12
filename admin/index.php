<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "header.php";
    // Controller

    if (isset($_GET['act'])) {
        $act=$_GET['act'];
        switch ($act) {
            /* Danh mục */
            case 'adddm':
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $tenloai=$_POST['tenloai'];  
                    insert_danhmuc($tenloai);                 
                    $thongbao = "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            case 'xoadm':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            case 'suadm';
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;

            case 'updatedm';
                if (isset($_POST['capnhap'])&&($_POST['capnhap'])) {
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao = "Cập nhập thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
            break;

            /* Sản phẩm */
            case 'addsp':
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $dir = "../upload/";
                    $file = $dir.basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $file)) {

                    }
                    insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);                 
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                // var_dump($listdanhmuc);
                include "sanpham/add.php";
                break;
            
            case 'listsp':
                if (isset($_POST['listok'])&&($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw, $iddm);
                include "sanpham/list.php";
                break;

            case 'xoasp':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;

            case 'suasp';
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;

            case 'updatesp';
                if (isset($_POST['capnhap'])&&($_POST['capnhap'])) {
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $dir = "../upload/";
                    $file = $dir.basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $file)) {

                    }
                    update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                    $thongbao = "Cập nhập thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("", 0);
                include "sanpham/list.php";
            break;

            case 'dskh':
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;

            case 'dsbl':
                $listbl = loadall_binhluan(0);
                include "binhluan/list.php";
                break;

            case 'thongke':
                $listthongke = loadall_thongke();
                include "thongke/list.php";
                break;
            
            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }

    include "footer.php";
?>