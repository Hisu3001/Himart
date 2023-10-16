<?php
require './inc/header.php';
require './connect.php';
require './lib/db.php';
require './lib/paging.php';

$sql = "SELECT * FROM `list_product`";
$result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($result);
$list_product = array();
if ($num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_product[] = $row;
    }
}

//phân trang

$num_per_page = 6;
$total_row = db_num_rows("SELECT * FROM `list_product`");
$num_page = ceil($total_row / $num_per_page);

// echo "Số trang : {$num_page} <br>";
$page = isset($_GET['id']) ? (int)$_GET['id']:1;
$start = ($page - 1)*$num_per_page;
// echo "Trang : {$page}<br>";
// echo "Chỉ số bắt đầu : {$start}";

$list_product = db_fetch_array("SELECT * FROM `list_product` LIMIT {$start}, {$num_per_page} ");
?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách sản phẩm</h3>
                    <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <ul class="post-status fl-left">
                            <li class="all"><a href="">Tất cả <span class="count">(<?php echo $num_rows ?>)</span></a> |</li>
                            <li class="publish"><a href="">Đã đăng <span class="count">(0)</span></a> |</li>
                            <li class="pending"><a href="">Chờ xét duyệt<span class="count">(0)</span> |</a></li>
                            <li class="pending"><a href="">Thùng rác<span class="count">(0)</span></a></li>
                        </ul>
                        <form method="GET" class="form-s fl-right">
                            <input type="text" name="s" id="s">
                            <input type="submit" name="sm_s" value="Tìm kiếm">
                        </form>
                    </div>
                    <div class="actions">
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Công khai</option>
                                <option value="1">Chờ duyệt</option>
                                <option value="2">Bỏ vào thủng rác</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">
                        </form>
                    </div>
                    <div class="table-responsive">
                        <?php if (!empty($list_product)) { ?>
                            <table class="table list-table-wp" >
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                        <td><span class="thead-text">STT</span></td>
                                        <td><span class="thead-text">Mã sản phẩm</span></td>
                                        <td><span class="thead-text">Hình ảnh</span></td>
                                        <td><span class="thead-text">Tên sản phẩm</span></td>
                                        <td><span class="thead-text">Giá</span></td>
                                        <td><span class="thead-text">Danh mục</span></td>
                                        <!-- <td><span class="thead-text">Trạng thái</span></td>
                                        <td><span class="thead-text">Người tạo</span></td>
                                        <td><span class="thead-text">Thời gian</span></td> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $temp = $start;
                                    foreach ($list_product as $item) { 
                                        $item['url_update'] = "?page=update&id={$item['ID']}";
                                        $item['url_delete'] = "?page=delete&id={$item['ID']}";
                                        $temp++;?>
                                        <tr>
                                            <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                            <td><span class="tbody-text"><?php echo $temp; ?></h3></span>
                                            <td><span class="tbody-text"><?php echo $item['code'] ?></h3></span>
                                            <td>
                                                <div class="tbody-thumb">
                                                    <img src="uploads/<?php echo $item['product_thunb']?>" alt="">
                                                </div>
                                            </td>
                                            <td class="clearfix">
                                                <div class="tb-title fl-left">
                                                    <a href="" title=""><?php echo $item['product_title'] ?></a>
                                                </div>
                                                <ul class="list-operation fl-right">
                                                    <li><a href="<?php echo $item['url_update'] ?>" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo $item['url_delete'] ?>" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                            <td><span class="tbody-text"><?php echo $item['price'] ?>đ</span></td>
                                            <td><span class="tbody-text"><?php echo $item['cat_id'] ?></span></td>
                                            <!-- <td><span class="tbody-text">Hoạt động</span></td>
                                            <td><span class="tbody-text">Admin</span></td>
                                            <td><span class="tbody-text">12-07-2016</span></td> -->
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">Chọn vào checkbox để lựa chọn tất cả</p>
                    <?php
                    echo get_paging($num_page, $page, "?page=list_product") ;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require './inc/footer.php';
?>