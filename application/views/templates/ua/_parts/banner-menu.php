<div class="site-header palm--hidden">
    <div class="top-nav">
        <div class="site-wrapper">
            <div class="grid">
                <div class="search-nav grid__item one-half palm--one-whole">
                    <form id="search-header" action="/search" method="get"><i class="icon icon-search" id="btn-search"></i>
                        <input type="text" name="s" id="txt-search" placeholder="Tên sản phẩm" class="tour-query">
                    </form>
                </div>
                <div class="right-menue grid__item one-half palm--one-whole">
                    <form id="frm-currency" name="frm-currency" method="post" action="" class="currency">
                        <ul class="right-menue-list">
                            <!--s-my-cart-->
                            <?php $this->view('templates/ua/_parts/cart');?>
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
                            <img width="70px" height="70px" src="/assets/images/ua/logo.png" title="Cherry fashion" alt="Cherry fashion" class="urban-adventures-branding">
                            <span class="tagline">Thời Trang Thiết Kế Cho Bé Gái</span>
                        </a>
                    </div>
                </div>
                <div class="grid__item one-third">
                    <div class="social-media">
                        <a target="_blank" href="http://www.facebook.com/cherryfashion.vn" class="icon icon-facebook"></a>
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
                            <li class="nav-link-element"><a href="/gioi-thieu" class="nav-link-anchor">Giới thiệu</a></li>
                            <li class="nav-link-element"><a href="/lien-he" class="nav-link-anchor">Liên hệ</a></li>
                            <li class="nav-link-element"><a href="/blog" class="nav-link-anchor">Blog</a></li>
                            <li class="nav-link-element"><a href="/truong-mam-non" class="nav-link-anchor">Trường Mầm Non</a></li>
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
                    <a href="/cart">
                        <i class="icon icon-cart"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="logos">
        <div class="site-wrapper">
            <div class="grid">
                <div class="grid__item one--whole">
                    <div class="urban-adventures"><a href="/"><img  width="40px" height="40px" src="/assets/images/ua/logo.png" title="Cherry fashion" alt="Cherry fashion" class="urban-adventures-branding"></a><span class="urban-adventures-tagline">Thời Trang Thiết Kế Cho Bé Gái</span></div>
                </div>
            </div>
        </div>
    </div>
</div>