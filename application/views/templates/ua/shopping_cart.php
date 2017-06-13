<body>
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="my-cart">
            <h3>Sản phẩm đã chọn</h3>
            <div class="split-block">
                <div class="grid">
                    <div class="grid__item one-quarter lap--one-third">
                        <div style="background-image: url('http://www.urbanadventures.com/data/254/tour_1156/xm-c-fakepath-12-lead.jpg')" class="split-block-photo"></div>
                    </div>
                    <div class="grid__item three-quarters lap--two-thirds">
                        <div class="split-block-bio">
                            <div class="grid">
                                <div class="grid__item three-quarters palm--one-whole">
                                    <h5>This is Aperitivo!</h5><br>
                                    <div>Cinque Terre, Italy</div>
                                    <div class="date">15 Jun 2017</div><br>
                                </div>
                                <div class="grid__item one-quarter palm--one-whole">
                                    <div class="cart-total">
                                        <h5>USD 88.46</h5><a href="?item=0&act=remove">Bỏ sản phẩm này</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-tour-info">
                                <div>Pick-up time: 5.30 PM    &nbsp;&nbsp;Duration: 2 hours<br> 1 Adult</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart-sub-total">
                <div class="grid">
                    <div class="grid__item one-quarter"></div>
                    <div class="grid__item three-quarters">
                        <div class="sub-total">
                            <p class="title">Subtotal:&nbsp<span class="price">USD 88.46</span></p>
<!--                            <p class="conditions">Prices above include all applicable taxes and service charges</p>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-cart-book-now">
                <div class="submit-button"><a href="/checkout" class="wide button">Đặt hàng</a></div>
            </div>
        </div>
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>