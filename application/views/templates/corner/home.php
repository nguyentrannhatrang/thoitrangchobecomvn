<div id="content" class="site-content">		
    <section id="main-slider">
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
                                    <a href="/product-<?=$product->url?>/" title="<?=$product->name?>">
                                        <img style="width: 275px!important;height: 275px!important;" src="<?= base_url('/attachments/shop_images/'.$product->image)?>" sizes="(max-width: 300px) 100vw, 300px" />
                                    </a>
                                <a href="/product-<?= $product->url?>" title="<?= $product->name?>">
                                    <h3><?= $product->name?></h3>
                                    <p class="short_desc"><?= $product->getBasicDescription(100)?></p>
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">
                                            </span><?= $product->getPriceFormat()?> đồng</span>
                                    </span>
                                </a>
<!--                                <a class="item-wishlist" href="/?add_to_wishlist=1350">Wishlist</a>-->
                            </li>
                            <?php }?>
                        </ul>
                    </aside>
                </div>
            </section>
        </div>
    </section>
    <?php }?>

</div><!-- #content -->