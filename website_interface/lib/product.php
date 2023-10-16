<?php 
function get_info_cat($cat_id){
    global $list_cat;
    if(array_key_exists($cat_id,$list_cat)){
        return $list_cat[$cat_id];
    }
}
function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

function get_list_product_by_cat_id($cat_id) {
    global $list_product;
    $result = array();
    foreach ($list_product as $item) {
        if($item['cat_id'] == $cat_id) {
            $item['url'] = "?mod=product&act=detail&id={$item['ID']}";
            $result[] = $item;
        }
    }
    return $result;
}
function get_product_by_id($id) {
    global $list_product;
    if(array_key_exists($id, $list_product)){
        return $list_product[$id];
    }
}
