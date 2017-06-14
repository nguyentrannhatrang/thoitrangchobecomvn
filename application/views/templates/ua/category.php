<body>
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="city">
            <div class="grid">
                <div class="grid__item one-whole">
                    <!--start hero-->
                    <div class="hero"><img src="https://media-cdn.urbanadventures.com/data/254/tour_1157/c-fakepath-20160614_171511.jpg" class="hero-photo"><span class="hero-from">Image features our tour:<a href="/Cinque-Terre-tour-tasting-cinque-terre" class="hero-author">Tasting Cinque Terre</a></span></div>
                    <!--end hero-->
                    <div class="location-blurb spacer">
                        <!-- s-dest-title -->
                        <h1><?= $current_categorie->getName() ?></h1>
                        <!-- e-dest-title -->
                        <p>Imagine five ancient fishing villages, all with beautiful houses coloured like a rainbow, backed by green hills with vineyards and olive trees. And all of this before the blue coast of the Mediterranean Sea. Cinque Terre holds the most spectacular examples of old Italian traditions, fantastic nature, and delicious food — a place where you can still experience life as it was hundreds of years ago.</p>
                        <p>Want to create your own customised Best. Day. Ever.? Something totally unique and special and tailored just for you and your friends and family? Well, you're in luck <span lang="EN-US">—</span> we offer private tours, too! Just enter your info into our <a href="http://www.urbanadventures.com/private-tours" target="_blank">Private Tours</a> request form, and let us know how we can give you your own perfect Urban Adventure.</p>
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
                                        <a href="/product-<?= $product->url?>" style="background-image: url('<?= base_url('/attachments/shop_images/'.$product->image)?>');" class="tour-info-tile-image"></a>
                                        <div class="tour-info-tile-info"><a href="/product-<?= $product->url?>" class="tour-info-tile-title"><?= $product->getNameLimit(150)?></a>
<!--                                            <div class="location">--><!--</div>-->


                                            <!--s-price-->
                                            <div class="tour-info-price-and-more"><span class="tour-info-tile-price"><?= $product->getPriceFormat()?> đồng</span></div>
                                            <!--e-price-->
                                        </div>
                                        <div class="tour-info-tile-description palm--hidden">
                                            <p class="bio">
                                                <?= $product->getBasicDescription(200);?>
                                            </p>
                                            <div class="more-info">
                                                <a href="/product-<?= $product->url?>">
                                                    <i class="icon icon-encircled-right-arrow palm--hidden"></i>
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