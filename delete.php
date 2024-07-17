<?php
include "connect.php";
$id = $_GET['id'];
$sql = "DELETE FROM loai WHERE ma_loai ='$id'";
$conn->exec($sql);
header('location:danhsachloai.php');
?>