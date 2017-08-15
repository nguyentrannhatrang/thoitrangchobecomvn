
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="blog-page">
            <div class="grid">
                <div class="grid__item one-whole">
                    <div class="column grid__item">
                        <div class="content-title">
                            <strong>BÀI VIẾT - CHIA SẺ</strong>
                        </div>
                        <?php
                        if (!empty($posts)) {
                        /** @var PostModel $post */
                        foreach ($posts as $post) {
                            ?>
                        <ul>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                <a href="<?= '/blog/' . $post->getUrl() ?>"  title="<?= $post->getTitle()?>">
                                    <?= character_limiter($post->getTitle(), 85) ?>
                                </a> -
                                <span class="date-time">
                                    <i class="fa fa-clock-o"></i>
                                    <?= generateFormatDate($post->getTime()) ?>
                                </span>
                            </li>
                        </ul>
                        <?php }
                        }else{?>
                            <p>Chưa có bài viết</p>
                        <?php } ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>