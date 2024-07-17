<?php

function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql="INSERT into sanpham(name,price,image,mota,iddm) values ('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id){
    $sql=" DELETE from sanpham where id=".$id;
    pdo_execute($sql);
}

function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_top10() {
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    if ($kyw!="") {
        $sql.=" and name like '%".$kyw."%'";
    }
    if ($iddm>0) {
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function load_ten_dm($iddm) {
    if ($iddm > 0) {
        $sql = "SELECT * FROM danhmuc WHERE id=".$iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}

function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

function load_sanpham_cungloai($id, $iddm) {
    $sql = "SELECT * FROM sanpham WHERE iddm=".$iddm." AND id <> ".$id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!="")
        $sql="update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."',image='".$hinh."' where id=".$id;
    else
        $sql="update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."' where id=".$id;
    pdo_execute($sql);
}
?>