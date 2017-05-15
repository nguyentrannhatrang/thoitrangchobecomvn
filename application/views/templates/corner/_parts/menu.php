<section class="home_navigation">
    <div class="inner_home">
        <div class="ak-container clearfix">
            <div class="right-header-main clearfix">
                <div class="right-header clearfix">
                    <!-- if enabled from customizer -->
                    <div id="toggle">
                        <div class="one"></div>
                        <div class="two"></div>
                        <div class="three"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="menu">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <a class="menu-toggle">
                                Menu
                            </a>
                            <div class="store-menu">
                                <ul id="menu-main-menu" class="menu">
                                    <li id="home"
                                        class="menu-item <?php if(isset($current_menu['home'])) echo 'current_page_item';?>"><a href="/">Trang chủ</a></li>
                                    <?php foreach ($categories as $categoty){?>
                                    <li id="categorie-<?= $categoty->id?>"
                                        class="menu-item <?php if(isset($current_menu['categorie-'.$categoty->id])) echo 'current_page_item';?>"><a href="/category-<?=$categoty->urlName?>"><?=$categoty->name ?></a></li>
                                    <?php }?>
                                    <li id="faqs" class="menu-item <?php if(isset($current_menu['faqs'])) echo 'current_page_item';?>"><a href="#">Tin tức</a></li>
                                    <li id="aboutus" class="menu-item <?php if(isset($current_menu['aboutus'])) echo 'current_page_item';?>"><a href="/about/">Giới thiệu</a></li>
                                    <li id="contacts" class="menu-item <?php if(isset($current_menu['contacts'])) echo 'current_page_item';?>"><a href="/contact/">Liên hệ</a></li>
                                </ul>
                            </div>                               
                        </nav><!-- #site-navigation -->
                    </div>
                </div> <!-- right-header -->
            </div> <!-- right-header-main -->
        </div>
    </div>
</section><!--Home Navigation-->