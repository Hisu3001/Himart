<?php
require './lib/function.php';
require './lib/product.php';
require './inc/header.php';
require './connect.php';

if (isset($_POST['btn_submit'])) {
    $error = array();

    //Xử lý tên sp
    if (empty($_POST['product-name'])) {
        $error['product-name'] = "Không được để trống tên sản phẩm";
    } else {
        $productname = $_POST['product-name'];
    }

    //Xử lý mã sản phẩm 
    if (empty($_POST['product-code'])) {
        $error['product-code'] = "Không được để trống mã sản phẩm";
    } else {
        if (!(strlen($_POST['product-code']) >= 6 && strlen($_POST['product-code']) <= 50)) {
            $error['product-code'] = "Số lượng ký tự yêu cầu từ 6 đến 50 ký tự";
        } else {
            if (!is_product_code($_POST['product-code'])) {
                $error['product-code'] = "product-code chỉ cho phép sử dụng ký tự, dấu # chữ số từ 6-50 ký tự";
            } else {
                $code = $_POST['product-code'];
            }
        }
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

    //Xử lý desc 
    if (empty($_POST['desc'])) {
        $error['desc'] = "Không được để trống mô tả sản phẩm";
    } else {
        $desc = $_POST['desc'];
    }

    if (empty($_POST['full-desc'])) {
        $error['full-desc'] = "Không được để trống chi tiết sản phẩm";
    } else {
        $full_desc = $_POST['full-desc'];
    }

    //Xử lý file
    if (isset($_FILES['file'])) {
        //Thư mục chứ file upload
        $upload_dir = 'uploads/';
        //Đường dẫn của file sau khi upload
        $upload_file = $upload_dir . $_FILES['file']['name'];
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            $file = $_FILES['file']['name'];
        } else {
            $error['file'] = "Upload ảnh thất bại";
        }
    }

    //xử lý danh mục sp
    if (empty($_POST['parent_id'])) {
        $error['parent_id'] = "Không được để trống danh mục sản phẩm";
    } else {
        $cat_title = $_POST['parent_id'];
    }

    if (empty($error)) {
        $sql = "INSERT INTO `list_product` (`product_title`, `code`, `price`, `product_desc`, `product_content`, `product_thunb`, `cat_id`)"
                ."VALUES ('{$productname}', '{$code}', '{$price}', '{$desc}', '{$full_desc}','{$file}', '{$cat_title}')";
            if(mysqli_query($conn, $sql)) {
                echo "<script>alert('Thêm dữ liệu sản phẩm thành công')</script>";
            }else{
                echo "<script>alert('Thêm dữ liệu sản phẩm thất bại')</script>";
            }
    }
}
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
                        <input type="text" name="product-name" id="product-name" value="<?php echo set_value('product-name') ?>">
                        <p class="error"><?php echo form_error('product-name') ?></p>
                        <label for="product-code">Mã sản phẩm</label>
                        <input type="text" name="product-code" id="product-code" value="<?php echo set_value('product-code'); ?>">
                        <p class="error"><?php echo form_error('product-code') ?></p>
                        <label for="price">Giá sản phẩm</label>
                        <input type="text" name="price" id="price" value="<?php echo set_value('price'); ?>">
                        <p class="error"><?php echo form_error('price') ?></p>
                        <label for="desc">Mô tả ngắn</label>
                        <textarea name="desc" id="desc" value="<?php echo set_value('desc'); ?>"></textarea>
                        <p class="error"><?php echo form_error('desc') ?></p>
                        <label for="full-desc">Chi tiết</label>
                        <textarea name="full-desc" id="desc" class="ckeditor" value="<?php echo set_value('full-desc'); ?>"></textarea>
                        <p class="error"><?php echo form_error('full-desc') ?></p>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb">
                            
                            <p class="error"><?php echo form_error('file') ?></p>
                        </div>
                        <label>Danh mục sản phẩm</label>
                        <select name="parent_id">
                            <option value="">-- Chọn danh mục --</option>
                            <option value="2">Điện thoại</option>
                            <option value="3">Máy tính bảng</option>
                            <option value="1">Laptop</option>
                            <option value="4">Tai nghe</option>
                            <option value="5">Đồng hồ thông minh</option>
                            <option value="6">Phụ kiện</option>
                            <option value="7">Thiết bị văn phòng</option>
                        </select>
                        <p class="error"><?php echo form_error('parent_id') ?></p>
                        <!-- <label>Trạng thái</label>
                        <select name="status">
                            <option value="0">-- Chọn danh mục --</option>
                            <option value="1">Chờ duyệt</option>
                            <option value="2">Đã đăng</option>
                        </select> -->
                        <button type="submit" name="btn_submit" id="btn_submit">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require './inc/footer.php';
?>