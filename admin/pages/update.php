<?php
require './lib/function.php';
require './lib/product.php';
require './inc/header.php';
require './connect.php';

//Lấy id sp
$id = (int)$_GET['id'];

if (isset($_POST['btn_update'])) {
    $error = array();

    //Xử lý tên sp
    if (empty($_POST['product-name'])) {
        $error['product-name'] = "Không được để trống tên sản phẩm";
    } else {
        $productname = $_POST['product-name'];
    }

    //Xử lý giá sản phẩm
    if (empty($_POST['price'])) {
        $error['price'] = "Không được để trống giá sản phẩm";
    } else {
        if (!is_price($_POST['price'])) {
            $error['price'] = "Giá của sản phẩm chỉ bao gồm số và dấu .";
        } else {
            $price = $_POST['price'];
        }
    }

    //xử lý danh mục sp
    if (empty($_POST['parent_id'])) {
        $error['parent_id'] = "Không được để trống danh mục sản phẩm";
    } else {
        $cat_title = $_POST['parent_id'];
    }

    if (empty($error)) {
        $sql = "UPDATE `list_product` SET `product_title` = '{$productname}', `price` = '{$price}', `cat_title` = '{$cat_title}' WHERE `ID` = {$id}";
            if(mysqli_query($conn, $sql)) {
                echo "<script>alert('Cập nhật dữ liệu thành công')</script>";
            }else{
                echo "<script>alert('Cập nhật dữ liệu thất bại')</script>";
            }
    }
}
$sql = "SELECT * FROM `list_product` WHERE `ID` = {$id}";
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_array($result);
?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm sản phẩm</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" enctype="multipart/form-data">
                        <label for="product-name">Tên sản phẩm</label>
                        <input type="text" name="product-name" id="product-name" value="<?php echo $item['product_title'] ?>">
                        <p class="error"><?php echo form_error('product-name') ?></p>
                        <!-- <label for="product-code">Mã sản phẩm</label>
                        <input type="text" name="product-code" id="product-code" value="<?php echo set_value('product-code'); ?>">
                        <p class="error"><?php echo form_error('product-code') ?></p> -->
                        <label for="price">Giá sản phẩm</label>
                        <input type="text" name="price" id="price" value="<?php echo $item['price'] ?>">
                        <p class="error"><?php echo form_error('price') ?></p>
                        <!-- <label for="desc">Mô tả ngắn</label>
                        <textarea name="desc" id="desc" value="<?php echo set_value('desc'); ?>"></textarea>
                        <p class="error"><?php echo form_error('desc') ?></p>
                        <label for="full-desc">Chi tiết</label>
                        <textarea name="full-desc" id="desc" class="ckeditor" value="<?php echo set_value('full-desc'); ?>"></textarea>
                        <p class="error"><?php echo form_error('full-desc') ?></p> -->
                        <!-- <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb">
                            <img src="public/images/img-thumb.png">
                            <p class="error"><?php echo form_error('file') ?></p>
                        </div> -->
                        <label>Danh mục sản phẩm</label>
                        <select name="parent_id">
                            <option value="">-- Chọn danh mục --</option>
                            <option value="Điện thoại">Điện thoại</option>
                            <option value="Máy tính bảng">Máy tính bảng</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Tai nghe">Tai nghe</option>
                            <option value="Đồng hồ thông minh">Đồng hồ thông minh</option>
                            <option value="Phụ kiện">Phụ kiện</option>
                            <option value="Thiết bị văn phòng">Thiết bị văn phòng</option>
                        </select>
                        <p class="error"><?php echo form_error('parent_id') ?></p>
                        <button type="submit" name="btn_update" id="btn_submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require './inc/footer.php';
?>


