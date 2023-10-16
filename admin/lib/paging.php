<?php 
function get_paging($num_page, $page, $base_url = ""){
    $str_paging = "<ul id='list-paging' class='fl-right'>" ;
    if($page > 1){
        $page_prev = $page - 1;
        $str_paging .="<li><a href=\"{$base_url}&id={$page_prev}\"><</a></li>";
    }    
    for($i = 1; $i <= $num_page; $i++){
        $active = "";
        if ($i == $page)
            $active = "class='active'";
        $str_paging .="<li {$active}><a href=\"{$base_url}&id={$i}\">$i</a></li>";
    }
    if($page < $num_page){
        $page_next = $page + 1;
        $str_paging .="<li><a href=\"{$base_url}&id={$page_next}\">></a></li>";
    }  
    $str_paging .= "</ul>";  
    return $str_paging;

};
// <ul id="list-paging" class="fl-right">
//                         <li>
//                             <a href="" title=""><<</a>
//                         </li>
//                         <li class="active">
//                             <a href="?page=list_product&id=1" title="">1</a>
//                         </li>
//                         <li>
//                             <a href="?page=list_product&id=2" title="">2</a>
//                         </li>
//                         <li>
//                             <a href="?page=list_product&id=3" title="">3</a>
//                         </li>
//                         <li>
//                             <a href="?page=list_product&id=4" title="">>></a>
//                         </li>
//                     </ul>