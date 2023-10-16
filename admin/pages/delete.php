<?php
require './connect.php';
//Lấy id sp
$id = (int)$_GET['id'];

$sql = "DELETE FROM `list_product` WHERE `ID` = '{$id}'";

if(mysqli_query($conn, $sql)) {
    redirect('?page=list_product');
}

