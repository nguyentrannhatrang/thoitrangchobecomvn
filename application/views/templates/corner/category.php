<body class="archive tax-product_cat term-newborn term-116 woocommerce woocommerce-page apwidget_title ">
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
                        <a class="cart-contents wcmenucart-contents" href="http://jenscornershop.com.au/cart/" title="View your shopping cart">
                            <i class="fa fa-shopping-cart"></i> [ 0 / <span class="amount">&#036;0.00</span> ]
                        </a>
                    </div>                                        <a class="quick-wishlist" href="http://jenscornershop.com.au/wishlist/" title="Wishlist">
                        <i class="fa fa-heart"></i>
                        (0)                        </a>
                    <div class="login-woocommerce">
                        <a href="http://jenscornershop.com.au/my-account/" class="account">
                            Login                        </a>
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

        <?php $this->view('templates/corner/_parts/menu',array('categories'=>$menu,'current_menu'=>$current_menu)); ?>

    </header><!-- #masthead -->
    <div id="content" class="site-content"><header id="title_bread_wrap" class="entry-header" style="background:url('http://jenscornershop.com.au/wp-content/themes/accesspress-store/images/about-us-bg.jpg') no-repeat center; background-size: cover;">
            <div class="ak-container">
                <h1 class="entry-title ak-container">The Autumn Collection</h1>
                <div class="woocommerce-breadcrumb accesspress-breadcrumb" ><a href="http://jenscornershop.com.au">Home</a>&nbsp;<a href="http://jenscornershop.com.au/product-category/handmade/">Handmade</a>&nbsp;<span>The Autumn Collection</span></div>            </div>
        </header>
        <div class="inner">
            <div class="ak-container left-sidebar">
                <div id="primary" class="content-area clearfix">
                    <div class="content-inner">
                        <p class="woocommerce-result-count">
                            Showing all <span class="total-products"><?= count($products) ?> results</span></p>
                        <!--<form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby">
                                <option value="menu_order"  selected='selected'>Default sorting</option>
                                <option value="popularity" >Sort by popularity</option>
                                <option value="rating" >Sort by average rating</option>
                                <option value="date" >Sort by newness</option>
                                <option value="price" >Sort by price: low to high</option>
                                <option value="price-desc" >Sort by price: high to low</option>
                            </select>
                        </form>-->
                        <nav class="gridlist-toggle"><a href="#" id="grid" title="Grid view">
                                <span class="dashicons dashicons-grid-view"></span> <em>Grid view</em></a>
                            <a href="#" id="list" title="List view">
                                <span class="dashicons dashicons-exerpt-view"></span> <em>List view</em></a></nav>
                        <div class="clearfix"></div>
                        <div class="wc-products">
                            <ul class="products">
                                <?php foreach ($products as $index=>$product){?>
                                <li class="<?php echo (($index % 3 == 0) ?'first':(($index % 3 == 1)?'last':''));?> post-1340 product type-product status-publish has-post-thumbnail product_cat-handmade product_cat-autumn-collection product_cat-shorts-skirts product_shipping_class-whole-post  instock shipping-taxable purchasable product-type-variable has-default-attributes has-children">
                                    <a href="/product-<?= $product->url?>" class="woocommerce-LoopProduct-link">
                                        <div class="collection_combine">
                                            <a href="/product-<?= $product->url?>" class="full-outer">
                                                <div class="outer-img">
                                                    <div class="inner-img">
                                                        <img width="300" height="300"
                                                             src="<?= base_url('/attachments/shop_images/'.$product->image)?>"
                                                             class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                             srcset="<?= base_url('/attachments/shop_images/'.$product->image)?> 300w" sizes="(max-width: 300px) 100vw, 300px" />
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="collection_desc clearfix">
                                            <a href="/product-<?= $product->url?>" class="collection_title">
                                                <h3><?= $product->name?></h3>
<!--                                                <p class="short_desc">--><?//= $product->basicDescription?><!--</p>-->
                                            </a>
                                            <div class="price-cart">
                                                <span class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol"></span><?= $product->price?></span>
                                                    <!--<span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol"></span><?/*= $product->priceOld*/?>
                                                    </span>-->
                                                </span>
                                    </a>
                                    <div class="woocommerce-product-details__short-description">
                                        <p><?= $product->basicDescription?></p>
                                    </div>
                                    <hr />
                                </li>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>
                </div>
                <div id="secondary" class="widget-area secondary-left sidebar">
                    <!-- #secondary -->
                    <div id="woocommerce_product_search-3" class="widget woocommerce widget_product_search widget-count-3">
                    </div><div id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter widget-count-3"><span class="widget-title">Filter by price</span><form method="get" action="http://jenscornershop.com.au/product-category/handmade/autumn-collection/">
                            <div class="price_slider_wrapper">
                                <div class="price_slider" style="display:none;"></div>
                                <div class="price_slider_amount">
                                    <input type="text" id="min_price" name="min_price" value="" data-min="8" placeholder="Min price" />
                                    <input type="text" id="max_price" name="max_price" value="" data-max="45" placeholder="Max price" />
                                    <button type="submit" class="button">Filter</button>
                                    <div class="price_label" style="display:none;">
                                        Price: <span class="from"></span> &mdash; <span class="to"></span>
                                    </div>

                                    <div class="clear"></div>
                                </div>
                            </div>
                        </form></div><div id="woocommerce_product_categories-3" class="widget woocommerce widget_product_categories widget-count-3"><span class="widget-title">Product Categories</span><ul class="product-categories"><li class="cat-item cat-item-7 cat-parent current-cat-parent"><a href="http://jenscornershop.com.au/product-category/handmade/">Handmade</a><ul class='children'>
                                    <li class="cat-item cat-item-18"><a href="http://jenscornershop.com.au/product-category/handmade/dresses/">Dresses</a></li>
                                    <li class="cat-item cat-item-19"><a href="http://jenscornershop.com.au/product-category/handmade/hats/">Hats</a></li>
                                </ul>
                            </li>
                            <li class="cat-item cat-item-8 cat-parent"><a href="http://jenscornershop.com.au/product-category/sewing/">Sewing</a><ul class='children'>
                                    <li class="cat-item cat-item-40"><a href="http://jenscornershop.com.au/product-category/sewing/biasbinding/">Bias Binding</a></li>
                               </ul>
                            </li>
                        </ul></div>
                </div>
            </div>
        </div>
    </div><!-- #content -->