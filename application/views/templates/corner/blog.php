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

        <?php $this->view('templates/corner/_parts/menu',array('categories'=>$menu,'current_menu'=>array('blog'=>true))); ?><!--Home Navigation-->

    </header><!-- #masthead -->
    <div id="content" class="site-content">
        <header id="title_bread_wrap" class="entry-header cherry-banner" style="background:url('/assets/images/logo-cherry.png') no-repeat center; background-size: cover;">

        </header>
        <div class="inner">
            <div class="ak-container">
                <div id="primary" class="content-area">
                    <div class="content-inner clearfix">
                        <div class="row">
                            <?php
                            if (!empty($posts)) {
                            /** @var PostModel $post */
                            foreach ($posts as $post) {
                            ?>
                            <div class="col-md-6 blog-col">
                                <div class="thumbnail blog-list">
                                    <?php if($post->getImage()){ ?>
                                        <a href="<?= '/blog/' . $post->getUrl() ?>" class="img-container">
                                            <img src="<?= base_url('attachments/blog_images/' . $post->getImage()) ?>" alt="<?= $post->getTitle() ?>">
                                        </a>
                                    <?php } ?>
                                    <div class="caption">
                                        <h5>
                                            <a href="<?= '/blog/' . $post->getUrl() ?>">
                                                <?= character_limiter($post->getTitle(), 85) ?>
                                            </a>
                                        </h5>
                                        <small>
                                        <span>
                                            <i class="fa fa-clock-o"></i>
                                            <?= date('M d, y', $post->getTime()) ?>
                                        </span>
                                        </small>
                                        <p class="description"><?= character_limiter(strip_tags($post->getDescription()), 300) ?></p>
                                        <a class="btn btn-blog pull-right" href="<?= '/blog/' . $post->getUrl()?>"
                                                    <?= lang('read_mode') ?>
                                                </a>
                                                <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        } else {
                            ?>
                            <div class="alert alert-info"><?= lang('no_posts') ?></div>
                        <?php } ?>
                    </div>
                    <?= $links_pagination ?>
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