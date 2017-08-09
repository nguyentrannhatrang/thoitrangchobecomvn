
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="city">
            <div class="grid">
                <div class="grid__item one-whole">
                    <!--start hero-->
                    <div class="hero"><img src="/assets/images/ua/banner.png" class="hero-photo"></div>
                    <!--end hero-->
                    <div class="location-blurb spacer">
                        <!-- s-dest-title -->
                        <h1><?= $current_categorie->getName() ?></h1>
                        <!-- e-dest-title -->
                    </div>
                    <div class="sections">
                        <div class="site-section spacer">
                            <div class="grid">
                                <?php
                                /**
                                 * @var ProductModel  $product
                                 */
                                foreach ($products as $index=>$product){?>
                                <div class="grid__item one-third palm--one-whole spacer">
                                    <div class="tour-info-tile">
                                        <div class=" ribbon"></div>
                                        <a href="/category-<?= $product->urlCategory ?>/<?= $product->url?>" style="background-image: url('<?= base_url('/attachments/shop_images/'.$product->image)?>');" class="tour-info-tile-image" title="<?= $product->getName()?>"></a>
                                        <div class="tour-info-tile-info"><a href="/category-<?= $product->urlCategory ?>/<?= $product->url?>" class="tour-info-tile-title"><?= $product->getNameLimit(150)?></a>
<!--                                            <div class="location">--><!--</div>-->


                                            <!--s-price-->
                                            <div class="tour-info-price-and-more"><span class="tour-info-tile-price sp-price"><?= $product->getPriceFormat()?> đồng</span></div>
                                            <!--e-price-->
                                        </div>
                                        <div class="tour-info-tile-description palm--hidden">
                                            <p class="bio">
                                                <?= $product->getBasicDescription(200);?>
                                            </p>
                                            <div class="more-info">
                                                <a href="/category-<?= $product->urlCategory ?>/<?= $product->url?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="youtube-video">
                                <!--youtube_city_video-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>