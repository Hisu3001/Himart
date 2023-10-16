<?php


$cat_id = (int) $_GET['cat_id'];
$info_cat = get_info_cat($cat_id);


$list_item = get_list_product_by_cat_id($cat_id);
// show_array($list_item);

?>
<div id="main-content-wp" class="clearfix category-product-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title=""><?php echo $info_cat['cat_title'] ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="list-product-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title fl-left"><?php echo $info_cat['cat_title'] ?></h3>
                    <div class="filter-wp fl-right">
                        <p class="desc">Hiển thị <?php echo count($list_item) ?> sản phẩm</p>
                        <div class="form-filter">
                            <form method="POST" action="">
                                <select name="select">
                                    <option value="0">Sắp xếp</option>
                                    <option value="1">Từ A-Z</option>
                                    <option value="2">Từ Z-A</option>
                                    <option value="3">Giá cao xuống thấp</option>
                                    <option value="3">Giá thấp lên cao</option>
                                </select>
                                <button type="submit">Lọc</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_item)) { ?>
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_item as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                        <img src="uploads/<?php echo $item['product_thunb'] ?>">
                                    </a>
                                    <a href="<?php echo $item['url'] ?>" title="" class="product-name"><?php echo $item['product_title'] ?></a>
                                    <div class="price">
                                        <span class="new"><?php echo $item['price'] ?></span>
                                        <span class="old">20.900.000đ</span>
                                    </div>
                                    <div class="action clearfix">
                                        <a href="?mod=cart&act=main" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                        <a href="?mod=cart&act=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <!-- <div class="section" id="paging-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
        <div class="sidebar fl-left">
            <div class="section" id="category-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Danh mục sản phẩm</h3>
                </div>
                <div class="secion-detail">
                    <ul class="list-item">
                        <li>
                            <a href="?mod=product&act=main&cat_id=2" title="">Điện thoại</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?mod=product&act=main&cat_id=2" title="">Samsung</a>
                                </li>
                                <li>
                                    <a href="?mod=product&act=main&cat_id=2" title="">Iphone</a>
                                </li>
                                <li>
                                    <a href="?mod=product&act=main&cat_id=2" title="">Xiaomi</a>
                                </li>
                                <li>
                                    <a href="?mod=product&act=main&cat_id=2" title="">Nokia</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?mod=product&act=main&cat_id=3" title="">Máy tính bảng</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=main&cat_id=1" title="">Laptop</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=main&cat_id=4" title="">Tai nghe</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=main&cat_id=5" title="">Đồng hồ thông minh</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=main&cat_id=6" title="">Phụ kiện</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=main&cat_id=7" title="">Thiết bị văn phòng</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section" id="filter-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Bộ lọc</h3>
                </div>
                <div class="section-detail">
                    <form method="POST" action="">
                        <table>
                            <thead>
                                <tr>
                                    <td colspan="2">Giá</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="r-price"></td>
                                    <td>Dưới 500.000đ</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="r-price"></td>
                                    <td>500.000đ - 1.000.000đ</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="r-price"></td>
                                    <td>1.000.000đ - 5.000.000đ</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="r-price"></td>
                                    <td>5.000.000đ - 10.000.000đ</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="r-price"></td>
                                    <td>Trên 10.000.000đ</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <td colspan="2">Hãng</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="r-brand"></td>
                                    <td>Acer</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="r-brand"></td>
                                    <td>Apple</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="r-brand"></td>
                                    <td>Hp</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="r-brand"></td>
                                    <td>Lenovo</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="r-brand"></td>
                                    <td>Samsung</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="r-brand"></td>
                                    <td>Toshiba</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <td colspan="2">Loại</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="r-price"></td>
                                    <td>Điện thoại</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="r-price"></td>
                                    <td>Laptop</td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>

            <div class="section" id="banner-wp">
                <div class="section-detail">
                    <a href="?mod=product&act=detail" title="" class="thumb">
                        <img src="" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>