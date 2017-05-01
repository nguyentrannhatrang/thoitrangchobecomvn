<div id="content" class="site-content">		<section id="main-slider">
        <div class="bx-slider">
            <div class="slides">
            </div>
            <div class="slides">
            </div>
        </div>
    </section>

    <!-- This is Product 1 Section !-->
    <?php foreach ($products as $key=>$arrData){ ?>
    <section id="product<?= $key?>" class="prod<?=$key?>-slider">
        <div class="ak-container">
            <section title="product-slider">
                <div class="ak-container">
                    <aside id="accesspress_store_product-3" class="widget widget_accesspress_store_product">
                        <div class="title-bg"><h2 class="prod-title"><?= $arrData['name']?></h2></div>
                        <ul class="new-prod-slide">
                            <?php foreach ($arrData['data'] as $product) {?>
                            <li class="span3 wow flipInY" data-wow-delay="0.2s">
                                <div class="item-img">
                                    <a href="/product-<?= $product->url?>/" title="<?= $product->name?>">
                                        <img width="300" height="300" src="<?= base_url('/attachments/shop_images/'.$product->image)?>" sizes="(max-width: 300px) 100vw, 300px" />            </a>
<!--                                    <a rel="nofollow" href="/product/--><?//= $product->url?><!--/" data-quantity="1" data-product_id="--><?//= $product->id?><!--" data-product_sku="" class="button product_type_variable add_to_cart_button">Select options</a>          </div>-->
                                <a href="/product-<?= $product->url?>" title="<?= $product->name?>">
                                    <h3><?= $product->name?></h3>
                                    <p class="short_desc"><?= $product->description?></p>
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">
                                            </span><?= $product->price?></span>
                                    </span>
                                </a>
<!--                                <a class="item-wishlist" href="/?add_to_wishlist=1350">Wishlist</a>-->
                            </li>
                            <?php }?>
                        </ul>
                    </aside>  </div>
            </section>
        </div>
    </section>
    <?php }?>

</div><!-- #content -->