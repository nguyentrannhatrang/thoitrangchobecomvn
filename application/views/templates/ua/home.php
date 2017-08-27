
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content home-page">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="site-header-mobile palm--show">
            <div class="sub-nav">
            </div>
        </div>
        <div class="home-page">
            <!--<div class="hero-image">
                <div class="grid">
                    <div class="grid__item one-whole palm--hidden">
                        <img width="980px" height="400px" title="Thời trang cho bé" alt="Đầm bé gái, Thời trang cho bé" src="/assets/images/ua/banner.png">
                    </div>                    
                </div>
            </div>-->
            <!--<div class="carousel palm--hidden hidden show-slider">
                <ul class="bxslider-carousel">
                    <?php
/*                    /** @var ProductModel $product */
                    /*foreach ($products_slider as $product){ */?>
                    <li><a href="/category-<?/*= $product->urlCategory */?>/<?/*=$product->url*/?>/" target="_blank">
                            <div style="background-image: url('<?/*= base_url('/attachments/shop_images/'.$product->image)*/?>');" class="carousel-image"></div>
                            <h2 class="carousel-title"></h2></a>
                    </li>
                    <?php /*} */?>
                </ul>
                <i id="slider-prev" class="slider-prev"></i><i id="slider-next" class="slider-next"></i>
            </div>-->
            <!--start featured-->
            <br/>
            <div class="sections">
                <ul class="site-section-tabs palm--show">
                    <?php foreach ($products as $key=>$arrData){ ?>
                        <li class="tab"><a href="#featured<?= $key ?>"><?= $arrData['name']?></a></li>
                    <?php } ?>
                </ul>
                <?php $first =true; foreach ($products as $key=>$arrData){ ?>
                <section id="featured<?php echo $key ?>" class="site-section palm--hidden <?php echo $first?'active':''; $first = false; ?>">
                    <header class="site-section-header palm--hidden">
                        <h3><a href="/category-<?= $arrData['url']?>" class="action-with-chevron"><?= $arrData['name']?></a></h3>
                    </header>
                    <div class="grid">
                        <!--s-new-tour-home-->
                        <?php foreach ($arrData['data'] as $index=>$product) {
                            //if($index>4) break;
                            ?>
                        <div class="grid__item one-third<?php /*echo ($index==3?'two-thirds':'one-third') */?> palm--one-whole spacer ">
                            <a href="/category-<?= $product->urlCategory ?>/<?=$product->url?>/" title="<?=$product->getName()?>"  class="tour-tile thumb-sx<?php echo ($index==3?'2':'') ?>">
                                <div class="large ribbon-class ribbon"></div>
                                <div style="background-image: url('<?= base_url('/attachments/shop_images/'.$product->image)?>');" class="tour-tile-image"></div>
                                <?php if($product->getQuantity() <1 ) {?>
                                    <div class="sold-out"><img src="/assets/images/ua/het-hang.png"></div>
                                <?php } ?>
                                <div class="tour-tile-info">
                                    <h5 class="tour-tile-title"><?=$product->getNameLimit(50)?></h5>
                                    <span>

<!--                                        <span class="tour-tile-location">--><?//= $product->getBasicDescription(60)?><!--</span><br/>-->
                                    <span class="tour-tile-location sp-price"><?= $product->getPriceFormat()?> đồng</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                        <!--end tiles-->
                        <div class="grid__item one-whole palm--one-whole spacer"><a href="/category-<?= $arrData['url']?>" class="action-with-chevron see-more-items">Xem thêm</a></div>
                        <!--e-new-tour-home-->
                    </div>
                </section>
                <?php } ?>
            </div>
            <!--end featured-->
        </div>
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>

