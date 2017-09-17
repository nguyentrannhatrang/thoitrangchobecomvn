<body id="kinder-kouture" class="template-index" >
<style>.buddha-hidden-wireframe{display:none !important}</style>
<ul class="buddha-hidden-wireframe">
    <li>
        <a href="/" title="Home">Home</a>
    </li>
    <li>
        <a href="/" title="Collections">Collections</a>
        <ul>
            <li>
                <a href="/collections/fall-winter" title="Fall">Fall</a><ul><li><a href="/collections/fall-dress" title="Dresses">Dresses</a></li><li><a href="/collections/rompers" title="Rompers">Rompers</a></li><li><a href="/collections/fall-tops" title="Tops">Tops</a></li><li><a href="/collections/fall-accessory" title="Fall Accessory">Fall Accessory</a></li><li><a href="/collections/fall-pants" title="Fall Pants">Fall Pants</a></li><li><a href="/collections/fall-skirts-1" title="Skirts">Skirts</a></li></ul></li><li><a href="/collections/christmas" title="Christmas">Christmas</a><ul><li><a href="/collections/holiday-dresses" title="Dress">Dress</a></li><li><a href="/collections/holiday-accessories" title="Accessories">Accessories</a></li></ul></li><li><a href="/collections/baby" title="Baby">Baby</a><ul><li><a href="/collections/rompers" title="Bubbles">Bubbles</a></li><li><a href="/collections/dress-baby" title="Dress">Dress</a></li><li><a href="/collections/baby" title="All">All</a></li></ul></li><li><a href="/collections/ready-to-ship" title="Ready-To-Ship">Ready-To-Ship</a></li><li><a href="/collections/wholesale" title="Wholesale">Wholesale</a></li></ul></li><li><a href="/" title="About Us">About Us</a><ul><li><a href="/blogs/kinderkouture2017" title="Blog">Blog</a></li><li><a href="/pages/contact-us" title="Contact Us">Contact Us</a></li><li><a href="/pages/faq" title="Policies">Policies</a></li><li><a href="/pages/order-status" title="Order Status">Order Status</a></li><li><a href="/pages/about-us" title="About Us">About Us</a></li><li><a href="/pages/wholesale" title="Wholesale">Wholesale</a></li></ul></li>
</ul>
<div id="preloader_active">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>
<div class="popup_wrapper">
    <div class="newsletter_popup_inner">
        <span class="popup_off"><i class="fa fa-close"></i></span>
        <div class="subscribe_area">
            <h2 class="mb-20">Sign UP for OUR Newsletter</h2>
            <p class="mb-20">We promise to send you only cute things.</p>
            <div class="form-group subscribe-form-group">
                <form action="http://eepurl.com/uui_X" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                    <input type="email" class="form-control subscribe-form" id="mail" value="" name="EMAIL" placeholder="email@example.com">
                    <button type="submit" class="custom-btn mt-20" id="subscribe">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="waraper">
    <div id="shopify-section-header" class="shopify-section"><header>
            <div class="header-area ">
                <div class="container-fluid">
                    <div class="">
                        <div class="row">
                            <div class="col-md-3 col-lg-3  col-sm-4 col-xs-4">

                                <div class="logo">
                                    <a href="/"><img src="/assets/images/ua/logo.png"></a>
                                </div>

                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-2 col-xs-2 hidden-xs text-center">
                                <div class="main-menu display-inline">
                                    <nav>
                                        <ul class="menu">
                                            <li><a href="/">Trang Chủ</a></li>
                                            <li><a href="/">Đầm Bé Gái <i class="pe-7s-angle-down"></i></a>
                                                <ul class="mega-menu">
                                                    <?php foreach ($top_menu as $item){?>
                                                        <li class="mega-menu-li">
                                                            <a href="/category-<?= $item['info']['url'] ?>" title="Đầm bé gái - <?= $item['info']['name']?>">
                                                                <?= $item['info']['name'] ?>
                                                            </a>
                                                            <?php if(!empty($item['children'])){ ?>
                                                            <ul>
                                                                <?php foreach ($item['children'] as $child){ ?>
                                                                <li>
                                                                    <a href="/category-<?= $child['url'] ?>" title="Đầm bé gái - <?= $child['name']?>">
                                                                        <?= $child['name'] ?>
                                                                    </a>
                                                                </li>
                                                                <?php } ?>
                                                            </ul>
                                                            <?php } ?>
                                                        </li>
                                                    <?php } ?>
                                                    <li class="mega-menu-li image-menu">
                                                        <a href="/collections/instabadge-best-selling"><img src="http://cdn.shopify.com/s/files/1/1010/9088/collections/20841295_2191894037703715_1347110199_o_large.jpg?v=1504545575" alt="" /></a>
                                                    </li>
                                                    <li class="mega-menu-li image-menu">
                                                        <a href="/collections/instabadge-best-selling"><img src="http://cdn.shopify.com/s/files/1/1010/9088/collections/20841295_2191894037703715_1347110199_o_large.jpg?v=1504545575" alt="" /></a>
                                                    </li>
                                                    <li class="mega-menu-li image-menu">
                                                        <a href="/collections/instabadge-best-selling"><img src="http://cdn.shopify.com/s/files/1/1010/9088/collections/20841295_2191894037703715_1347110199_o_large.jpg?v=1504545575" alt="" /></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/gioi-thieu">Giới Thiệu</a></li>
                                            <li><a href="/lien-he">Liên Hệ</a></li>
                                            <li><a href="/blog">Blog</a></li>
                                            <li><a href="#">Tiện Ích<i class="pe-7s-angle-down"></i></a>
                                                <ul class="">
                                                    <li><a href="/truong-mam-non">Trường Mầm Non</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xs-8 col-sm-6 text-right text-sm text-res">
                                <div class="cart-user-language">

                                    <div class="shopping-cart ml-30">
                                        <a class="top-cart" href="/cart"><i class="pe-7s-cart"></i></a>
                                        <ul  style="display:none;">
                                            <li class="cart-loop-li">
                                                <ul>

                                                </ul>
                                            </li>
                                            <li>
                                                <hr class="shipping-border" />
                                                <div class="shipping">
                                                    <span class="f-left"> Total </span>
                                                    <span class="f-right cart-price shopping-cart__total">$ 0.00</span>
                                                </div>
                                            </li>
                                            <li class="checkout m-0"><a href="/checkout">Check Out <i class="pe-7s-angle-right"></i></a></li>
                                        </ul>
                                    </div>

                                    <!-- <div class="user">
                                       <a href="#" data-toggle="modal" data-target="#loginModal" title="Log in"><i class="pe-7s-add-user"></i></a>
                                     </div>-->

                                    <div class="search-block-top display-inline">
                                        <div class="icon-search">
<!--                                            <a href="#"><i class="pe-7s-search"></i></a>-->
                                            <form action="/search" method="get" class="search-bar" role="search" id="search-header">
                                                <input type="text" id="txt-search" name="s" value="" placeholder="Tên sản phẩm" class="input-group-field" aria-label="Tên sản phẩm">
                                                <button type="submit" class="button-search"><i class="pe-7s-search"></i></button>
                                            </form>
                                        </div>
                                       <!-- <div class="toogle-content">
                                            <form action="/search" method="get" class="search-bar" role="search" id="search-header">
                                                <input type="text" id="txt-search" name="s" value="" placeholder="Tên sản phẩm" class="input-group-field" aria-label="Tên sản phẩm">
                                                <button type="submit" class="button-search"><i class="pe-7s-search"></i></button>
                                            </form>

                                        </div>-->
                                    </div>


                                   <!-- <div class="language-menu none">
                                        <div class="currency-select">
                                            <select class="submenu-mainmenu currency-picker" id="currencies" name="currencies" style="display: inline; width: auto; vertical-align: inherit;">
                                                <option value="USD" selected="selected">VND</option>
                                            </select>
                                            <i class="pe-7s-angle-down"></i>
                                        </div>
                                    </div>-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </header>
    </div>