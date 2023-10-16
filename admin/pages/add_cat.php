<?php 
require './inc/header.php';
require './connect.php';
require './lib/function.php';

if (isset($_POST['btn-submit'])) {
    $error = array();

    if (empty($_POST['title'])) {
        $error['title'] = "Không được để danh mục sản phẩm";
    } else {
        $cat_title = $_POST['title'];
    }

    if (empty($error)) {
        $sql = "INSERT INTO `list_product_cat` (`cat_title`)"
                ."VALUES ('{$cat_title}')";
            if(mysqli_query($conn, $sql)) {
                echo "<script>alert('Thêm danh mục thành công')</script>";
            }else{
                echo "<script>alert('Thêm danh mục thất bại')</script>";
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
                    <h3 id="index" class="fl-left">Thêm mới danh mục</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <label for="title">Tên danh mục</label>
                        <input type="text" name="title" id="title" >
                        <p class="error"><?php echo form_error('title') ?></p>
                        <button type="submit" name="btn-submit" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
require './inc/footer.php';
?>