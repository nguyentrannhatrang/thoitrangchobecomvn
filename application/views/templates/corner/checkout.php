<body class="page-template-default page page-id-6 woocommerce-checkout woocommerce-page apwidget_title ">
<?php $this->view('templates/corner/_parts/plugin-js');?>
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
        <?php $this->view('templates/corner/_parts/menu',array('categories'=>$menu,'current_menu'=>$current_menu)); ?>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
        <div class="page_header_wrap clearfix cherry-banner" style="background:url('/assets/images/logo-cherry.png') no-repeat center; background-size: cover;">
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="message error" style="display:block">
                    <p><?= $this->session->flashdata('error') ?></p>
                </div>
            <?php } ?>
        </div>
        <div class="inner">
            <div id="breadcrumb">
                <a href="http://thoitrangchobe.com.vn">Trang chủ</a> > <span class="current">Đặt hàng</span>
            </div>
            <main id="main" class="site-main clearfix no-sidebar">
                <div id="primary" class="content-area">
                    <article id="post-6" class="post-6 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="content-inner clearfix">
                                <h2 class="post-title">Đặt hàng</h2>
                                <div class="content-page">
                                    <div class="woocommerce">
                                        <form name="checkout" id="frm-checkout" method="post" class="checkout woocommerce-checkout"
                                              action="/checkout/" enctype="multipart/form-data">
                                            <div class="col2-set w50" id="customer_details">
                                                <h3 class="h-checkout">Thông tin khách hàng</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-sort="10">
                                                        <label for="billing_first_name" class="">Họ và tên<abbr class="required" title="required">*</abbr>
                                                        </label>
                                                        <input type="text" class="input-text require" name="name" id="billing_name" placeholder=""  value="" autocomplete="given-name" autofocus="autofocus" />
                                                    </p>
                                                    <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-sort="50">
                                                        <label for="billing_address_1" class="">Địa chỉ <abbr class="required" title="required">*</abbr></label>
                                                        <input type="text" class="input-text require " name="address" id="billing_address_1" value="" autocomplete="address-line1" />
                                                    </p>
                                                    <p class="form-row form-row-first validate-phone" id="billing_phone_field" data-sort="100">
                                                        <label for="billing_phone" class="">Điện thoại</label>
                                                        <input type="tel" class="input-text require" name="phone" id="billing_phone" placeholder=""  value="" autocomplete="tel" />
                                                    </p>
                                                    <p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-sort="110">
                                                        <label for="billing_email" class="">Email <abbr class="required" title="required">*</abbr>
                                                        </label>
                                                        <input type="email" class="input-text require " name="email" id="billing_email" placeholder=""  value="" autocomplete="email username" />
                                                    </p>
                                                    <p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-sort="110">
                                                        <label for="billing_email" class="">Yêu cầu <abbr class="required" title="required">*</abbr>
                                                        </label>
                                                        <textarea name="message" class="input-text "></textarea>

                                                    </p>
                                                </div>
                                            </div>

                                            <div id="order_review" class="woocommerce-checkout-review-order w50">
                                                <h3 id="order_review_heading">Thông tin đơn hàng</h3>
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-name">Sản phẩm</th>
                                                        <th class="product-total">Giá trị</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($data_carts as $data_cart){ ?>
                                                        <?php foreach ($data_cart as $sizeCode=>$item) {?>
                                                            <tr class="cart_item">
                                                                <td class="product-name">
                                                                    <?= $item['name']?> &ndash; <?= $item['size']?>
                                                                    <strong class="product-quantity">&times; <?= $item['quantity']?></strong>
                                                                </td>
                                                                <td class="product-total">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol"></span><?= number_format($item['price'] * $item['quantity'], 2, '.', ',') ?> đồng</span>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    </tbody>
                                                    <tfoot>

                                                    <tr class="cart-subtotal">
                                                        <th>Số tiền</th>
                                                        <td>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol"></span><?= number_format($summary['total'], 2, '.', ',') ?> đồng
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="shipping">
                                                        <th>Phí giao hàng</th>
                                                        <td>
                                                            <p>Phụ thuộc vào vị trí.</p>
                                                        </td>
                                                    </tr>
                                                   <!-- <script>
                                                        jQuery(document).ready(function() {
                                                            jQuery(".extra-flate-tool-tip").parent().css("position", "relative");
                                                        });
                                                    </script>-->
                                                    <tr class="order-total">
                                                        <th>Tổng tiền</th>
                                                        <td>
                                                            <strong>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol"></span><?= number_format($summary['total'], 2, '.', ',') ?> đồng
                                                                </span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                <div id="payment" class="woocommerce-checkout-payment">
                                                    <div class="form-row place-order" style="float: right">
                                                        <input class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Place order" type="submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .entry-content -->
                    </article><!-- #post-## -->
                </div><!-- #primary -->
            </main>
        </div>
    </div><!-- #content -->