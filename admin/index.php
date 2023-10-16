<?php
session_start();
require './lib/url.php';
require './data/users.php';
require './lib/users.php';


$page = isset($_GET['page']) ? $_GET['page'] : 'login_ad';
$path = "./pages/{$page}.php";

//Kiểm tra login
if(!is_login() && $page != 'login_ad'){
    redirect('?page=login_ad');
}

if (file_exists($path)) {
    require "{$path}";
} else {
    require "./pages/404.php";
}


?>