<?php
require './lib/product.php';
require './inc/connect.php';

//sản phẩm
$sql = "SELECT * FROM `list_product`";
$result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($result);
$list_product = array();
if ($num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_product[] = $row;
    }
}

//danh mục
$sql = "SELECT * FROM `list_product_cat`";
$result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($result);
$list_cat = array();
if ($num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_cat[] = $row;
    }
}


$mod = isset($_GET['mod']) ? $_GET['mod'] : 'home';
$act = isset($_GET['act']) ? $_GET['act'] : 'main';
$path = "./modules/{$mod}/{$act}.php";

require './inc/header.php';

if (file_exists($path)) {
    require "{$path}";
} else {
    require "./inc/404.php";
}

require './inc/footer.php';
?>