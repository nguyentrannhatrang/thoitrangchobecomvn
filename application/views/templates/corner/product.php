<body class="product-template-default single single-product postid-555 woocommerce woocommerce-page apwidget_title ">
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
                    <!--
                    <a class="quick-wishlist" href="http://jenscornershop.com.au/wishlist/" title="Wishlist">
                        <i class="fa fa-heart"></i>
                        (0)                        
                    </a>
                    <div class="login-woocommerce">
                        <a href="http://jenscornershop.com.au/my-account/" class="account">
                            Login                        
                        </a>
                    </div>-->
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
        <header id="title_bread_wrap" class="entry-header cherry-banner" style="background:url('/assets/images/logo-cherry.png') no-repeat center; background-size: cover;">
            
        </header>
<div class="inner">
    <div id="breadcrumb">
        <a href="http://thoitrangchobe.com.vn">Trang chủ</a> >
        <?php if($current_categorie->getSubFor() && isset($menu[$current_categorie->getSubFor()])){
            $categorieParent = $menu[$current_categorie->getSubFor()]; ?>
            <a href="/category-<?= $categorieParent->getUrlName() ?>/"><?= $categorieParent->getName() ?></a> > 
        <?php }?>
        <a href="/category-<?= $current_categorie->getUrlName() ?>/"><?=$current_categorie->getName() ?></a> >
        <span><?= $product->getName() ?></span>
    </div>
    <div class="ak-container">
        <div id="primary" class="content-area">
            <div class="content-inner clearfix">
                <div
                     class="single-img post-555 product type-product status-publish has-post-thumbnail product_cat-handmade product_cat-playsuits product_cat-newborn product_tag-playsuit product_tag-seaside product_shipping_class-whole-post first instock shipping-taxable purchasable product-type-variable has-default-attributes has-children">

                    <div class="img-wrap">
                        <div class="images">
                            <a id="main-image">
                            <img width="600" height="600" src="<?= base_url('/attachments/shop_images/'.$product->image)?>" class="attachment-shop_single size-shop_single wp-post-image"/>
                            </a>
                            <div class="thumbnails columns-3 images-slick">
                                <?php foreach ($others_image as $other) {?>
                                <div class="item-image">
                                    <img width="600" height="600"
                                         src="<?= $other?>"/>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title"><?= $product->getName() ?></h1>
                        <p class="price">
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol"></span><?= $product->getPriceFormat() ?> VND
                            </span>
                        </p>
                        <div>
                            <?= $product->getBasicDescription() ?>
                        </div>
                        <br/>
                        <form class="variations_form cart frm-product" id="frm-product" method="post">
                            <input type="hidden" name="product_id" id="product_id" value="<?= $product->getId() ?>">
                            <input type="hidden" name="product_price" id="product_price" value="<?= $product->getPrice() ?>">
                            <table class="variations" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td class="label"><label for="pa_size">Kích cỡ</label></td>
                                    <td class="value">
                                        <select id="pa_size" class="" name="size" data-attribute_name="attribute_pa_size" data-show_option_none="yes">
                                            <option value="">Chọn kích cỡ</option>
                                            <?php foreach ($sizes_data as $size){?>
                                            <option value="<?= $size['code']?>" ><?= $size['name']?></option>
                                            <?php }?>
                                        </select>
                                        <span class="error" id="error_pa_size"></span>
                                        <a class="reset_variations" href="#">Clear</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" id="out_stock"></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="single_variation_wrap">
                                <div class="woocommerce-variation single_variation"></div>
                                <div class="woocommerce-variation-add-to-cart variations_button">
                                    <div class="quantity">
                                        <input type="number" class="qty" step="1" min="0" max="0" id="quantity" name="quantity" value="0" />
                                        <span class="error" id="error_quantity"></span>
                                    </div>
                                    <button type="button" id="add_to_cart" class="single_add_to_cart_button button alt">Thêm vào giỏ hàng</button>
                                    
                                </div>
                                <div class="total-price">
                                    <span>Tổng tiền: </span>
                                    <span class="price" id="total-price"></span> đồng
                                </div>
                            </div>
                        </form>
                    </div><!-- .summary -->

                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs" role="tablist">
                            <li class="description_tab active tab-details" id="tab-title-description" role="tab" aria-controls="tab-description">
                                <a href="#tab-description">Mô tả</a>
                            </li>
                            <li class="additional_information_tab tab-details" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                                <a href="#tab-additional_information">Thông tin kèm</a>
                            </li>
                            <li class="tab-title-reviews tab-details" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                <a href="#tab-reviews">Đánh giá (<?= $count_reviews ?>)</a>
                                <input id="number_review" type="hidden" value="<?= $count_reviews ?>" />
                            </li>
                        </ul>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">

                            <h2>Mô tả</h2>
                            <?= $product->getDescription()?>
                            </div>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">

                            <h2>Thông tin kèm theo</h2>

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
                                    <h2 class="woocommerce-Reviews-title">Đánh giá</h2>

                                    <?php if($count_reviews == 0){ ?>
                                        <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                    <?php } ?>

                                </div>
                                <div id="template-comment-view" style="display: none;">
                                    <div class="item-comment">
                                        <p> {{comment}}</p>
                                        <strong>{{name}} ({{email}})</strong>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" id="load_more">Hiển thị thêm</a>
                                </div>

                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <span id="reply-title" class="comment-reply-title">Be the first to review &ldquo;White Arrows Playsuit&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="/product/white-arrows-playsuit/#respond" style="display:none;">Cancel reply</a></small></span>
                                            <form action="http://thoitrangchobe.com.vn" method="post" id="commentform" class="comment-form" novalidate>
                                               <!-- <p class="comment-notes">
                                                    <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                                </p>-->
                                                <!--<p class="comment-form-rating">
                                                    <label for="rating">Your rating</label>
                                                    <select name="rating" id="rating" aria-required="true" required>
                                                        <option value="">Rate&hellip;</option>
                                                        <option value="5">Perfect</option>
                                                        <option value="4">Good</option>
                                                        <option value="3">Average</option>
                                                        <option value="2">Not that bad</option>
                                                        <option value="1">Very poor</option>
                                                    </select>
                                                </p>-->
                                                <p class="error" id="review_error"></p>
                                                <p class="mesage-success" id="review_success"></p>
                                                <p class="comment-form-comment">
                                                    <label for="comment">Ý kiến của bạn <span class="required">*</span></label>
                                                    <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea>
                                                </p>
                                                <p class="comment-form-author"><label for="author">Họ tên <span class="required">*</span></label>
                                                    <input id="author" name="author" type="text" value="" size="30" aria-required="true" required />
                                                </p>
                                                <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" aria-required="true" required /></p>
                                                <p class="form-submit">
                                                    <input name="submit-review" type="submit" id="submit" class="submit" value="Submit" />
                                                </p>
                                            </form>
                                        </div><!-- #respond -->
                                    </div>
                                </div>


                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>


                    <div class="related products">
                        <div class="title-bg">
                            <h2>Sản phẩm cùng loại</h2>
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
        <span class="widget-title">Danh mục sản phẩm</span>
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

 <script>
     var size_quantity = '<?php echo json_encode($sizes_data);?>';
 </script>