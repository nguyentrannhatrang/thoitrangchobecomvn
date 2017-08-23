<div class="site-navigation-mobile palm--show">
    <?php $this->view('templates/ua/_parts/social-media',array()); ?>
    <div class="site-navigation-search spacer">
        <form id="search_top" action="/search" method="get">
            <div class="combo full">
                <div class="combo-first"><i class="icon icon-search"></i></div>
                <div class="combo-last">
                    <input type="text" name="q" placeholder="Search for an adventure..." class="tour-query">
                    <input id="search-top-submit" type="submit" style="display:none;">
                </div>
            </div>
        </form>
    </div>
    <ul class="site-navigation-links">
        <?php foreach ($top_menu as $item){?>
        <li class="navigation-link"><a href="/category-<?= $item['info']['url'] ?>" class="link large"><?= $item['info']['name'] ?></a>
            <?php if(!empty($item['children'])){ ?>
            <ul class="nested-link-group">
                <?php foreach ($item['children'] as $child){ ?>
                <li class="nested-link">
                    <a href="/category-<?= $child['url'] ?>" class="link"><?= $child['name'] ?></a>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>
        </li>
        <?php } ?>
        <li class="navigation-link"><a href="/gioi-thieu" class="link large">Giới thiệu</a></li>
        <li class="navigation-link"><a href="/lien-he" class="link large">Liên hệ</a></li>
        <li class="navigation-link"><a href="/blog" class="link large">Blog</a></li>
        <li class="navigation-link">
            <a href="#" class="link large">Tiện ích</a>
            <ul class="nested-link-group">
                <li class="nested-link">
                    <a href="/truong-mam-non" class="link">Trường mầm non Sài Gòn</a>
                </li>
            </ul>
        </li>
    </ul>
</div>