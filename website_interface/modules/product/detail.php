<?php 
$id = (int) $_GET['id'];
// echo $id;
$item = get_product_by_id($id);
// show_array($item); 

?>
<div id="main-content-wp" class="clearfix detail-product-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Laptop</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="detail-product-wp">
                <div class="section-detail clearfix">
                    <div class="thumb-wp fl-left">
                        <a href="" title="" id="main-thumb">
                            <img id="zoom" src="uploads/<?php echo $item['product_thunb'] ?>" data-zoom-image="uploads/<?php echo $item['product_thunb'] ?>"/>
                        </a>
                        <div id="list-thumb">
                            <a href="" data-image="uploads/<?php echo $item['product_thunb'] ?>" data-zoom-image="uploads/<?php echo $item['product_thunb'] ?>">
                                <img id="zoom" src="uploads/<?php echo $item['product_thunb'] ?>" />
                            </a>
                            <a href="" data-image="uploads/<?php echo $item['product_thunb'] ?>" data-zoom-image="uploads/<?php echo $item['product_thunb'] ?>">
                                <img id="zoom" src="uploads/<?php echo $item['product_thunb'] ?>" />
                            </a>
                            <a href="" data-image="uploads/<?php echo $item['product_thunb'] ?>" data-zoom-image="uploads/<?php echo $item['product_thunb'] ?>">
                                <img id="zoom" src="uploads/<?php echo $item['product_thunb'] ?>" />
                            </a>
                            <a href="" data-image="uploads/<?php echo $item['product_thunb'] ?>" data-zoom-image="uploads/<?php echo $item['product_thunb'] ?>">
                                <img id="zoom" src="uploads/<?php echo $item['product_thunb'] ?>" />
                            </a>
                            <a href="" data-image="uploads/<?php echo $item['product_thunb'] ?>" data-zoom-image="uploads/<?php echo $item['product_thunb'] ?>">
                                <img id="zoom" src="uploads/<?php echo $item['product_thunb'] ?>" />
                            </a>
                            <a href="" data-image="uploads/<?php echo $item['product_thunb'] ?>" data-zoom-image="uploads/<?php echo $item['product_thunb'] ?>">
                                <img id="zoom" src="uploads/<?php echo $item['product_thunb'] ?>" />
                            </a>
                        </div>
                    </div>
                    <div class="thumb-respon-wp fl-left">
                        <img src="public/images/img-pro-01.png" alt="">
                    </div>
                    <div class="info fl-right">
                        <h3 class="product-name"><?php echo $item['product_title'] ?></h3>
                        <div class="desc">
                            <p><?php echo $item['product_desc'] ?></p>
                        </div>
                        <div class="num-product">
                            <span class="title">Sản phẩm: </span>
                            <span class="status">Còn hàng</span>
                        </div>
                        <p class="price"><?php echo $item['price'] ?>đ</p>
                        <div id="num-order-wp">
                            <a title="" id="minus"><i class="fa fa-minus"></i></a>
                            <input type="text" name="num-order" value="1" id="num-order">
                            <a title="" id="plus"><i class="fa fa-plus"></i></a>
                        </div>
                        <a href="?mod=product&act=main" title="Thêm giỏ hàng" class="add-cart">Thêm giỏ hàng</a>
                    </div>
                </div>
            </div>
            <div class="section" id="post-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Mô tả sản phẩm</h3>
                </div>
                <div class="section-detail">
                    <p><?php echo $item['product_content'] ?></p>
                </div>
            </div>
            <div class="section" id="same-category-wp">
                <div class="section-head">
                    <h3 class="section-title">Cùng chuyên mục</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item">
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-17.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-18.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-19.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-20.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-21.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-22.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-23.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
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
            <div class="section" id="banner-wp">
                <div class="section-detail">
                    <a href="" title="" class="thumb">
                        <img src="" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>