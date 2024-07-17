<?php
include "connect.php";
$id = $_GET['id'];
$sql = "DELETE FROM hang_hoa WHERE ma_hh ='$id'";
$conn->exec($sql);
header('location:hanghoa.php');
?>