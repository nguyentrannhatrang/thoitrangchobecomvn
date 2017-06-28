
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="blog-detail-page">
            <div class="grid">
                <div class="grid__item one-whole">
                    <div class="column grid__item">
                        <div id="primary" class="content-area">
                            <div class="content-inner clearfix">
                                <div class="row">
                                    <div class="col-sm-3 left-col-archive">
                                        <a href="<?= '/blog' ?>" class="btn btn-default"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> <?= lang('go_back') ?></a>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="alone title">
                                            <?php
                                            /**@var PostModel $article */
                                            ?>
                                            <h4><span><?= $article->getTitle() ?></span></h4>
                                        </div>
                                        <span class="blog-preview-time">
                <i class="fa fa-clock-o"></i>
                                            <?= date('M d, y', $article->getTime()) ?>
            </span>             <?php if($article->getImage()){ ?>
                                            <div class="thumbnail blog-detail-thumb">
                                                <img src="<?= base_url('attachments/blog_images/' . $article->getImage()) ?>" alt="<?= $article->getTitle() ?>" title="<?= $article->getTitle() ?>">
                                            </div>
                                        <?php } ?>
                                        <div class="blog-description">
                                            <?= $article->getDescription() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>