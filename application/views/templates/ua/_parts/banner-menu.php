<div class="site-header palm--hidden">
    <div class="top-nav">
        <div class="site-wrapper">
            <div class="grid">
                <div class="search-nav grid__item one-half palm--one-whole">
                    <form id="search-header" action="/search" method="get"><i class="icon icon-search"></i>
                        <input type="text" name="s" placeholder="Tên sản phẩm" class="tour-query">
                        <input type="submit" style="display:none">
                    </form>
                </div>
                <div class="right-menue grid__item one-half palm--one-whole">
                    <form id="frm-currency" name="frm-currency" method="post" action="" class="currency">
                        <ul class="right-menue-list">
                            <!--s-my-cart-->
                            <?php $this->view('templates/ua/_parts/cart');?>
<!--                            <li class="right-menue-item">|</li>-->
                            <!--e-my-cart-->

                            <!--s-login-->
<!--                            <li class="right-menue-item"><a href="" data-attribute="log-in-modal" class="open-modal">Log In</a></li>-->
                            <!--e-login-->
                            <!--<li class="right-menue-item">|</li>
                            <li class="right-menue-item">
                                <select id="currency" name="currency" class="currency-select nav-dropdown-element font-open-sans-regular">
                                    <option value="AUD">AUD</option><option value="CAD">CAD</option><option value="CHF">CHF</option><option value="EUR">EUR</option><option value="GBP">GBP</option><option value="JPY">JPY</option><option value="NZD">NZD</option><option value="SGD">SGD</option><option value="USD" selected="selected">USD</option>
                                </select>
                            </li>-->
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="logos">
        <div class="site-wrapper">
            <div class="grid">
                <div class="grid__item two-thirds">
                    <div class="urban-adventures"><a href="/">
                            <img width="70px" height="70px" src="/assets/images/ua/logo.png" alt="Thời trang cho bé, Đầm bé gái" title="Thời trang cho bé, Đầm bé gái" class="urban-adventures-branding">
                            <span class="tagline font-carto-gothic-regular">Handmade</span>
                        </a>
                    </div>
                </div>
                <div class="grid__item one-third">
                    <div class="social-media">
                        <a target="_blank" href="http://www.facebook.com/cherryfashion.vn" class="icon icon-facebook"></a>
                        <!--<a target="_blank" href="http://twitter.com/urbanadventures" class="icon icon-twitter"></a>
                        <a target="_blank" href="https://plus.google.com/101395910973874706269" class="icon icon-google-plus"></a>
                        <a target="_blank" href="http://www.pinterest.com/UrbanAdventures" class="icon icon-pinterest"></a>
                        <a target="_blank" href="http://instagram.com/urbanadventures" class="icon icon-instagram"></a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-nav">
        <div class="site-wrapper">
            <div class="grid">
                <div class="grid__item desk--one-whole">
                    <div class="nav-links-container">
                        <ul class="nav-links">
                            <?php foreach ($top_menu as $item){?>
                            <li class="nav-link-element"><a id="featured_nav<?= $item['info']['url'] ?>" href="/category-<?= $item['info']['url'] ?>" class="nav-link-anchor"><?= $item['info']['name'] ?><i class="icon icon-down-arrow"></i></a>
                                <?php if(!empty($item['children'])){ ?>
                                <div class="nav-dropdown-container">
                                    <div class="nav-dropdown">
                                        <dl class="subnav-section">
                                            <?php foreach ($item['children'] as $child){ ?>
                                            <dd class="nav-dropdown-element"><a href="/category-<?= $child['url'] ?>" class="nav-dropdown-anchor"><?= $child['name'] ?></a></dd>
                                            <?php } ?>
                                        </dl>
                                    </div>
                                </div>
                                <?php } ?>
                            </li>
                            <?php } ?>
                            <li class="nav-link-element"><a href="/about" class="nav-link-anchor">Giới thiệu</a></li>
                            <li class="nav-link-element"><a href="/contact" class="nav-link-anchor">Liên hệ</a></li>
                            <li class="nav-link-element"><a href="/blog" class="nav-link-anchor">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- mobile -->
<div class="site-header-mobile palm--show">
    <div class="top-nav">
        <div class="site-wrapper">
            <div class="grid">
                <div class="grid__item two-thirds"><i id="header-navigation-toggle" class="icon icon-menu"></i>

                    <!--s-login-->
<!--                    <a href="" data-attribute="log-in-modal" class="icon icon-user open-modal"></a>-->
                    <!--e-login-->
                    <a href="/cart">
                        <i class="icon icon-cart"></i>
                    </a>
                </div>
                <!--<div class="grid__item one-third">
                    <form id="frm-currency2" name="frm-currency2" method="post" action="" class="currency">
                        <div class="currency-selector nav-dropdown-element">
                            <select id="currency2" name="currency" class="currency-select font-open-sans-regular">
                                <option value="AUD">AUD</option><option value="CAD">CAD</option><option value="CHF">CHF</option><option value="EUR">EUR</option><option value="GBP">GBP</option><option value="JPY">JPY</option><option value="NZD">NZD</option><option value="SGD">SGD</option><option value="USD" selected="selected">USD</option>
                            </select>
                        </div>
                    </form>
                </div>-->
            </div>
        </div>
    </div>
    <div class="logos">
        <div class="site-wrapper">
            <div class="grid">
                <div class="grid__item one--whole">
                    <div class="urban-adventures"><a href="/"><img  width="40px" height="40px" src="/assets/images/ua/logo.png" alt="Urban Adventures Logo" class="urban-adventures-branding"></a><span class="urban-adventures-tagline font-carto-gothic-regular">Handmade.</span></div>
                </div>
            </div>
        </div>
    </div>
</div>