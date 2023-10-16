<?php
function is_product_code($product_code){
    $partten = "/^[A-Za-z0-9#]{6,50}$/";
    if (!preg_match($partten, $_POST['product-code'], $matchs)) {
        return false;
    } else {
        return true;
    }
}

function is_price($price){
    $partten = "/^[0-9.]{7,10}$/";
    if (!preg_match($partten, $_POST['price'], $matchs)) 
        return false;
    return true;
}