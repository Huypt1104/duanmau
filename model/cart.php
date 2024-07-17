<?php
function viewcart(){
    global $img_path;
    $tong=0;
    $i=0;

    echo '<tr>
    <td>Hình</td>
    <td>Sản phẩm</td>
    <td>Đơn giá</td>
    <td>Số lượng</td>
    <td>Thành tiền</td>
    <td>Thao tác</td>
    </tr>';
        foreach ($_SESSION['mycart'] as $cart) {
            $hinh=$img_path.$cart[2];
            $ttien=$cart[3] * $cart[4];
            $tong+=$ttien;
            $xoasp='<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
            echo '
                <tr>
                <td><img src="'.$hinh.'" alt="" height="80px"></td>
                <td>'.$cart[1].'</td>
                <td>'.$cart[3].'</td>
                <td>'.$cart[4].'</td>
                <td>'.$ttien.'</td>
                <td>'.$xoasp.'</td>
            </tr>';
            $i+=1;
        }
            echo '<tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>'.$tong.'</td>
                <td></td>
            </tr>';
    }

function tongdonhang(){
    $tong=0;
        foreach ($_SESSION['mycart'] as $cart) {
            $ttien=$cart[3] * $cart[4];
            $tong+=$ttien;
        }
        return $tong;
}

function insert_bill($name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang) {
    $sql = "INSERT INTO bill (bill_name, bill_email, bill_address, bill_tel, bill_pttt, ngaydathang, total) VALUES('$name', '$email', '$address', '$tel', '$pttt', '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill) {
    $sql = "INSERT INTO cart (iduser, idpro, img, name, price, soluong, thanhtien, idbill) VALUES('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id){
    $sql="select * from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadone_cart($idbill){
    $sql="select * from cart where idbill=".$idbill;
    $bill=pdo_query_one($sql);
    return $bill;
}


function loadall_thongke() {
    $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, max(sanpham.price) as maxprice, min(sanpham.price) as minprice, avg(sanpham.price) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $listthongke = pdo_query($sql);
    return $listthongke;
}
?>