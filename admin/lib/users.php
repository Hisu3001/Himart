<?php
function check_login($username, $password){
    global $list_users;
    foreach($list_users as $item) {
        if($item['username'] == $username && $item['password'] == md5($password)){
            return true;
        }
    }
    return false;
}


function is_login() {
    if(isset($_SESSION['is_login'])) 
        return true;
    return false;  
}


function user_login() {
    if(!empty($_SESSION['user_login'])){
        return $_SESSION['user_login'];
    }
}