<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="contact-page">
            <br>
            <div class="grid">
                <div class="grid__item one-whole">
                    <div class="column grid__item">
                        <?php /** @var $schools SchoolsModel */ ?>
                        <h1><?= $schools->getName();?></h1>
                    </div>
                    <br>
                    <div class="column grid__item" style="margin-top: 20px;">
                        <?= $schools->getDescription() ?>
                    </div>
                    <div class="column grid__item">
                        Địa chỉ: <?= $schools->getAddress() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>
