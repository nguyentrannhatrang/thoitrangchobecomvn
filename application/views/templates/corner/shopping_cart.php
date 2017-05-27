<body class="page-template-default page page-id-5 woocommerce-cart woocommerce-page apwidget_title ">
<div id="page" class="hfeed site">

    <header id="mastheads" class="site-header headertwo" role="banner">

        <div class="before-top-header">
            <div class="ak-container clearfix">



            </div>
        </div>

        <div class="top-header clearfix">
            <div class="ak-container clearfix">

                <div id="site-branding" class="clearfix">
                    <a class="site-logo" href="http://thoitrangchobe.com.vn/">
                        <img src="http://jenscornershop.com.au/wp-content/uploads/2016/11/logo.png" alt=""/>
                    </a>
                    <a class="site-text" href="http://thoitrangchobe.com.vn/">
                        <h1 class="site-title"></h1>
                        <h2 class="site-description"></h2>
                    </a>


                </div><!-- .site-branding -->

                <div class="headertwo-wrap">
                    <!-- Cart Link -->
                    <?php $this->view('templates/corner/_parts/cart');?>
                    <!-- if enabled from customizer -->
                    <div class="search-form">
                        <form method="get" class="searchform" action="/search" role="search">
                            <input type="text" name="s" value="" class="search-field" placeholder="Tìm kiếm" />
<!--                            <input type="hidden" name="post_type" value="product">-->
                            <button type="submit" class="searchsubmit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>

            </div>

        </div>

        <?php $this->view('templates/corner/_parts/menu',array('categories'=>$menu,'current_menu'=>$current_menu)); ?><!--Home Navigation-->

    </header><!-- #masthead -->
    <div id="content" class="site-content">
        <div class="page_header_wrap clearfix cherry-banner" style="background:url('/assets/images/logo-cherry.png') no-repeat center; background-size: cover;">

        </div>
        <div class="inner">
            <div id="breadcrumb">
                <a href="http://thoitrangchobe.com.vn">Trang chủ</a> > <span class="current">Giỏ hàng</span>
            </div>
            <main id="main" class="site-main clearfix no-sidebar">
                <div id="primary" class="content-area">
                    <article id="post-5" class="post-5 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="content-inner clearfix">
                                <h2 class="post-title">Giỏ hàng</h2>
                                <div class="content-page">
                                    <div class="woocommerce">
                                        <form class="woocommerce-cart-form" action="/cart/"
                                              method="post">
                                            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th class="product-remove">&nbsp;</th>
                                                    <th class="product-thumbnail">&nbsp;</th>
                                                    <th class="product-name">Sản phẩm</th>
                                                    <th class="product-price">Giá</th>
                                                    <th class="product-quantity">Số lượng</th>
                                                    <th class="product-subtotal">Tổng</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php foreach ($data_carts as $productId=>$data_cart) {?>
                                                    <?php foreach ($data_cart as $sizeCode=>$item) {?>
                                                        <tr class="woocommerce-cart-form__cart-item cart_item" id="<?= $productId.$sizeCode?>">
                                                            <td class="product-remove">
                                                                <a href="#" class="remove remove_item" aria-label="Xóa sản phẩm" >&times;</a>
                                                            </td>
                                                            <td class="product-thumbnail">
                                                                <a href="/product/<?= $item['link']?>">
                                                                    <img width="180" height="180"
                                                                         src="<?= base_url('/attachments/shop_images/'.$item['image'])?>"
                                                                         class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                                                         sizes="(max-width: 180px) 100vw, 180px" />
                                                                </a>
                                                            </td>

                                                            <td class="product-name" data-title="Sản phẩm">
                                                                <a href="/product/<?= $item['link']?>"><?= $item['name']?> &ndash; <?= $item['size']?></a>
                                                            </td>

                                                            <td class="product-price" data-title="Giá">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol"></span><?= number_format($item['price'], 0, '', '.') ?>VND</span>
                                                            </td>

                                                            <td class="product-quantity" data-title="Số lượng">
                                                                <?php
                                                                    $quantityAvailable = 0;
                                                                    if(isset($quantity_available[$productId]) && isset($quantity_available[$productId][$sizeCode]))
                                                                        $quantityAvailable = $quantity_available[$productId][$sizeCode];
                                                                ?>
                                                                <div class="quantity">
                                                                    <input type="number" class="input-text qty text" step="1" min="0" max="<?= $quantityAvailable?>"
                                                                           name="quantity[<?= $productId?>][<?= $sizeCode?>]" value="<?= $item['quantity']?>" title="Qty" size="4" pattern="[0-9]*"
                                                                           inputmode="numeric" />
                                                                </div>
                                                            </td>

                                                            <td class="product-subtotal" data-title="Tổng">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol"></span><?= number_format($item['price'] * $item['quantity'], 0, '', '.') ?>VND</span>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } ?>




                                                <tr>
                                                    <td colspan="6" class="actions">

                                                       <!-- <div class="coupon">
                                                            <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" /> <input type="submit" class="button" name="apply_coupon" value="Apply coupon" />
                                                        </div>-->

                                                        <input type="submit" class="button" name="update_cart" value="Cập nhật" />


                                                        <!--<input type="hidden" id="_wpnonce" name="_wpnonce" value="f35b9ee221" /><input type="hidden" name="_wp_http_referer" value="/cart/" />-->
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </form>

                                        <div class="cart-collaterals">
                                            <div class="cart_totals ">


                                                <h2>Tổng tiền</h2>

                                                <table cellspacing="0" class="shop_table shop_table_responsive">

                                                    <tr class="cart-subtotal">
                                                        <th>Số tiền</th>
                                                        <td data-title="Số tiền"><span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol"></span><?= number_format($summary['total'], 0, '', '.') ?>VND</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="shipping">
                                                        <th>Phí giao hàng</th>
                                                        <td data-title="Phí giao hàng">
                                                            <p>Tùy từng vị trí.</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Tổng cộng</th>
                                                        <td data-title="Tổng cộng">
                                                            <strong>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol"></span><?= number_format($summary['total'], 0, '', '.') ?>VND</span>
                                                            </strong>
                                                        </td>
                                                    </tr>

                                                </table>
                                                <div class="wc-proceed-to-checkout">
                                                    <a href="/checkout/" class="checkout-button button alt wc-forward">
                                                        Đặt hàng</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><!-- .entry-content -->

                    </article><!-- #post-## -->

                </div><!-- #primary -->



            </main>
        </div>