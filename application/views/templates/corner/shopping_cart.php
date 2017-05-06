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
                    <a class="site-logo" href="http://jenscornershop.com.au/">
                        <img src="http://jenscornershop.com.au/wp-content/uploads/2016/11/logo.png" alt=""/>
                    </a>
                    <a class="site-text" href="http://jenscornershop.com.au/">
                        <h1 class="site-title"></h1>
                        <h2 class="site-description"></h2>
                    </a>


                </div><!-- .site-branding -->

                <div class="headertwo-wrap">
                    <!-- Cart Link -->
                    <div class="view-cart">
                        <a class="cart-contents wcmenucart-contents" href="/cart/" title="View your shopping cart">
                            <i class="fa fa-shopping-cart"></i> [<span class="total-quantity">0</span> / <span class="amount">&#036;0.00</span> VND]
                        </a>
                    </div>
                    <!-- if enabled from customizer -->
                    <div class="search-form">
                        <form method="get" class="searchform" action="http://jenscornershop.com.au/" role="search">
                            <input type="text" name="s" value="" class="search-field" placeholder="Search products" />
                            <input type="hidden" name="post_type" value="product">
                            <button type="submit" class="searchsubmit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>

            </div>

        </div>

        <?php $this->view('templates/corner/_parts/menu',array('categories'=>$menu,'current_menu'=>$current_menu)); ?><!--Home Navigation-->

    </header><!-- #masthead -->
    <div id="content" class="site-content"><div class="page_header_wrap clearfix" style="background:url('http://jenscornershop.com.au/wp-content/themes/accesspress-store/images/about-us-bg.jpg') no-repeat center; background-size: cover;">
            <div class="ak-container">
                <header class="entry-header">
                    <h2 class="entry-title">Cart</h2>
                </header><!-- .entry-header -->
                <div id="accesspress-breadcrumb">
                    <a href="http://jenscornershop.com.au">Home</a>
                    <span class="current">Cart</span>
                </div>
            </div>
        </div>
        <div class="inner">
            <main id="main" class="site-main clearfix no-sidebar">
                <div id="primary" class="content-area">
                    <article id="post-5" class="post-5 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="content-inner clearfix">
                                <h2 class="post-title">Cart</h2>
                                <div class="content-page">
                                    <div class="woocommerce">
                                        <form class="woocommerce-cart-form" action="/cart/"
                                              method="post">
                                            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th class="product-remove">&nbsp;</th>
                                                    <th class="product-thumbnail">&nbsp;</th>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product-quantity">Quantity</th>
                                                    <th class="product-subtotal">Total</th>
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

                                                            <td class="product-name" data-title="Product">
                                                                <a href="/product/<?= $item['link']?>"><?= $item['name']?> &ndash; <?= $item['size']?></a>
                                                            </td>

                                                            <td class="product-price" data-title="Price">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol"></span><?= number_format($item['price'], 2, '.', ',') ?> VND</span>
                                                            </td>

                                                            <td class="product-quantity" data-title="Quantity">
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

                                                            <td class="product-subtotal" data-title="Total">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol"></span><?= number_format($item['price'] * $item['quantity'], 2, '.', ',') ?> VND</span>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } ?>




                                                <tr>
                                                    <td colspan="6" class="actions">

                                                       <!-- <div class="coupon">
                                                            <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" /> <input type="submit" class="button" name="apply_coupon" value="Apply coupon" />
                                                        </div>-->

                                                        <input type="submit" class="button" name="update_cart" value="Update cart" />


                                                        <!--<input type="hidden" id="_wpnonce" name="_wpnonce" value="f35b9ee221" /><input type="hidden" name="_wp_http_referer" value="/cart/" />-->				</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </form>

                                        <div class="cart-collaterals">
                                            <div class="cart_totals ">


                                                <h2>Cart totals</h2>

                                                <table cellspacing="0" class="shop_table shop_table_responsive">

                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td data-title="Subtotal"><span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol"></span><?= number_format($summary['total'], 2, '.', ',') ?></span> VND
                                                        </td>
                                                    </tr>
                                                    <tr class="shipping">
                                                        <th>Shipping</th>
                                                        <td>
                                                            <p>Shipping costs will be calculated once you have provided your address.</p>
                                                            <form class="woocommerce-shipping-calculator" action="http://jenscornershop.com.au/cart/" method="post">
                                                                <p><a href="#" class="shipping-calculator-button">Calculate shipping</a></p>
                                                                <section class="shipping-calculator-form" style="display:none;">

                                                                    <p class="form-row form-row-wide" id="calc_shipping_country_field">
                                                                        <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state" rel="calc_shipping_state">
                                                                            <option value="">Select a country&hellip;</option>
                                                                            <option value="AU">Australia</option>
                                                                        </select>
                                                                    </p>
                                                                    <p class="form-row form-row-wide" id="calc_shipping_state_field">
                                                                        <input type="hidden" name="calc_shipping_state" id="calc_shipping_state" placeholder="State / County" />
                                                                    </p>
                                                                    <p class="form-row form-row-wide" id="calc_shipping_postcode_field">
                                                                        <input type="text" class="input-text" value="" placeholder="Postcode / ZIP" name="calc_shipping_postcode" id="calc_shipping_postcode" />
                                                                    </p>
                                                                    <p><button type="submit" name="calc_shipping" value="1" class="button">Update totals</button></p>

                                                                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="f35b9ee221" />
                                                                    <input type="hidden" name="_wp_http_referer" value="/cart/" />
                                                                </section>
                                                            </form>

                                                        </td>
                                                    </tr>
                                                    <!--<script>
                                                        jQuery(document).ready(function() {
                                                            jQuery(".extra-flate-tool-tip").parent().css("position", "relative");
                                                        });
                                                    </script>-->



                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td data-title="Total">
                                                            <strong>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol"></span><?= number_format($summary['total'], 2, '.', ',') ?></span>
                                                            </strong>
                                                        </td>
                                                    </tr>

                                                </table>
                                                <div class="wc-proceed-to-checkout">
                                                    <a href="/checkout/" class="checkout-button button alt wc-forward">
                                                        Proceed to checkout</a>
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