<body class="product-template-default single single-product postid-555 woocommerce woocommerce-page apwidget_title ">
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

        <?php $this->view('templates/corner/_parts/menu',array('categories'=>$menu,'current_menu'=>$current_menu)); ?><!--Home Navigation-->

    </header><!-- #masthead -->
    <div id="content" class="site-content">
        <header id="title_bread_wrap" class="entry-header" style="background:url('http://jenscornershop.com.au/wp-content/themes/accesspress-store/images/about-us-bg.jpg') no-repeat center; background-size: cover;">
            <div class="ak-container">
                <h1 class="entry-title ak-container"><?=$current_categorie->getName() ?></h1>
                <div class="woocommerce-breadcrumb accesspress-breadcrumb" >
                    <a href="http://jenscornershop.com.au">Home</a>&nbsp;
                    <?php if($current_categorie->getSubFor() && isset($menu[$current_categorie->getSubFor()])){
                        $categorieParent = $menu[$current_categorie->getSubFor()]; ?>
                        <a href="/category-<?= $categorieParent->getUrlName() ?>/"><?= $categorieParent->getName() ?></a>&nbsp;
                    <?php }?>
                    <span><?=$current_categorie->getName() ?></span>
                </div>
            </div>
        </header>
<div class="inner">
    <div class="ak-container">
        <div id="primary" class="content-area">
            <div class="content-inner clearfix">
                <div itemscope itemtype="http://schema.org/Product" id="product-555" class="single-img post-555 product type-product status-publish has-post-thumbnail product_cat-handmade product_cat-playsuits product_cat-newborn product_tag-playsuit product_tag-seaside product_shipping_class-whole-post first instock shipping-taxable purchasable product-type-variable has-default-attributes has-children">

                    <div class="img-wrap">
                        <div class="images">
                            <a id="main-image">
                            <img width="600" height="600" src="http://jenscornershop.com.au/wp-content/uploads/2017/04/PicsArt_04-21-02.15.30-600x600.jpg" class="attachment-shop_single size-shop_single wp-post-image"/>
                            </a>
                            <div class="thumbnails columns-3 images-slick">
                                <div class="item-image">
                                    <img width="600" height="600" src="http://jenscornershop.com.au/wp-content/uploads/2016/12/PicsArt_12-04-02.10.31.jpg"/>
                                </div>
                                <div class="item-image">
                                    <img width="600" height="600" src="http://jenscornershop.com.au/wp-content/uploads/2017/04/PicsArt_04-07-08.32.21-180x180.jpg"/>
                                </div>
                                <div class="item-image">
                                    <img width="600" height="600" src="http://jenscornershop.com.au/wp-content/uploads/2017/04/PicsArt_04-09-09.20.56-180x180.jpg"/>
                                </div>
                                <div class="item-image">
                                    <img width="600" height="600" src="http://jenscornershop.com.au/wp-content/uploads/2017/04/PicsArt_04-09-09.20.56-180x180.jpg"/>
                                </div>
                                <div class="item-image">
                                    <img width="600" height="600" src="http://jenscornershop.com.au/wp-content/uploads/2017/04/PicsArt_04-09-09.20.56-180x180.jpg"/>
                                </div>
                                <div class="item-image">
                                    <img width="600" height="600" src="http://jenscornershop.com.au/wp-content/uploads/2017/04/PicsArt_04-09-09.20.56-180x180.jpg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title"><?= $product->getName() ?></h1>
                        <p class="price">
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol"></span><?= $product->getPriceFormat() ?>
                            </span>
                        </p>

                        <form class="variations_form cart" method="post">
                            <table class="variations" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td class="label"><label for="pa_size">Size</label></td>
                                    <td class="value">
                                        <select id="pa_size" class="" name="attribute_pa_size" data-attribute_name="attribute_pa_size" data-show_option_none="yes">
                                            <option value="">Choose an option</option>
                                            <option value="nb" >NB</option>
                                        </select>
                                        <a class="reset_variations" href="#">Clear</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>


                            <div class="single_variation_wrap">
                                <div class="woocommerce-variation single_variation"></div><div class="woocommerce-variation-add-to-cart variations_button">
                                    <div class="quantity hidden">
                                        <input type="hidden" class="qty" name="quantity" value="1" />
                                    </div>
                                    <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                                    <input type="hidden" name="add-to-cart" value="555" />
                                    <input type="hidden" name="product_id" value="555" />
                                    <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                </div>
                            </div>


                        </form>

                        <div class="product_meta">
                            <div class="sku_wrapper">SKU: <span class="sku" itemprop="sku">N/A</span>.</div>
                            <div class="posted_in">Categories: <a href="http://jenscornershop.com.au/product-category/handmade/" rel="tag">Handmade</a>, <a href="http://jenscornershop.com.au/product-category/handmade/playsuits/" rel="tag">Playsuits</a>, <a href="http://jenscornershop.com.au/product-category/handmade/newborn/" rel="tag">Newborn</a>.</div>	<div class="tagged_as">Tags: <a href="http://jenscornershop.com.au/product-tag/playsuit/" rel="tag">playsuit</a>, <a href="http://jenscornershop.com.au/product-tag/seaside/" rel="tag">seaside</a>.</div>	</div>

                    </div><!-- .summary -->

                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs" role="tablist">
                            <li class="description_tab active tab-details" id="tab-title-description" role="tab" aria-controls="tab-description">
                                <a href="#tab-description">Description</a>
                            </li>
                            <li class="additional_information_tab tab-details" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                                <a href="#tab-additional_information">Additional information</a>
                            </li>
                            <li class="tab-title-reviews tab-details" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                <a href="#tab-reviews">Reviews (0)</a>
                            </li>
                        </ul>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">

                            <h2>Description</h2>
                            <?= $product->getDescription()?>
                            </div>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">

                            <h2>Additional information</h2>

                            <table class="shop_attributes">


                                <tr>
                                    <th>Size</th>
                                    <td><p>0, 00, 000, NB</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            <div id="reviews" class="woocommerce-Reviews">
                                <div id="comments">
                                    <h2 class="woocommerce-Reviews-title">Reviews</h2>


                                    <p class="woocommerce-noreviews">There are no reviews yet.</p>

                                </div>


                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <span id="reply-title" class="comment-reply-title">Be the first to review &ldquo;White Arrows Playsuit&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="/product/white-arrows-playsuit/#respond" style="display:none;">Cancel reply</a></small></span>			<form action="http://jenscornershop.com.au/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
                                                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                                <p class="comment-form-rating">
                                                    <label for="rating">Your rating</label>
                                                    <select name="rating" id="rating" aria-required="true" required>
                                                        <option value="">Rate&hellip;</option>
                                                        <option value="5">Perfect</option>
                                                        <option value="4">Good</option>
                                                        <option value="3">Average</option>
                                                        <option value="2">Not that bad</option>
                                                        <option value="1">Very poor</option>
                                                    </select>
                                                </p>
                                                <p class="comment-form-comment">
                                                    <label for="comment">Your review <span class="required">*</span></label>
                                                    <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea>
                                                </p>
                                                <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label>
                                                    <input id="author" name="author" type="text" value="" size="30" aria-required="true" required />
                                                </p>
                                                <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" aria-required="true" required /></p>
                                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='555' id='comment_post_ID' />
                                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                </p>			</form>
                                        </div><!-- #respond -->
                                    </div>
                                </div>


                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>


                    <div class="related products">
                        <div class="title-bg">
                            <h2>Related Products</h2>
                        </div>
                        <ul class="products">
                            <?php foreach ($relation_products as $index=>$_product){?>
                                <li class="product type-product <?php echo (($index % 3 == 0) ?'first':(($index % 3 == 2)?'first':''));?> ">
                                    <div class="collection_combine">
                                        <a href="/product-<?=$_product->getUrl() ?>" class="full-outer">
                                            <div class="outer-img">
                                                <div class="inner-img">
                                                    <img width="300" height="300" src="<?= base_url('/attachments/shop_images/'.$_product->getImage()) ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""  />
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collection_desc clearfix">
                                        <a href="/product-<?=$_product->getUrl() ?>" class="collection_title">
                                            <h3><?=$_product->getName() ?></h3>
                                            <p class="short_desc"><?=$_product->getName() ?></p>
                                        </a>
                                        <div class="price-cart">

                                        <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&#36;</span><?=$_product->getPriceFormat() ?>
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
</div><!-- #product-555 -->



</div>
</div>
<div id="secondary" class="widget-area secondary-right sidebar">
    <!-- #secondary -->
    <div id="woocommerce_product_categories-3" class="widget woocommerce widget_product_categories widget-count-3">
        <span class="widget-title">Product Categories</span>
        <ul class="product-categories">
            <?php foreach ($right_menu as $item){?>
                <li class="cat-item cat-item-7 cat-parent current-cat-parent">
                    <a href="/category-<?= $item['info']['url'] ?>"><?= $item['info']['name'] ?></a>
                    <?php if(!empty($item['children'])){ ?>
                        <ul class='children'>
                            <?php foreach ($item['children'] as $child){ ?>
                                <li class="cat-item cat-item-18">
                                    <a href="/category-<?= $child['url'] ?>"><?= $child['name'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
</div>
</div>        