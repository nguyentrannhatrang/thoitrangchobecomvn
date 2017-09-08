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
                        <div class="percent45">
                            <p>Chọn quận/huyện</p>
                            <form method="get" id="frm-search-schools">
                                <select id="district" name="district" class="depart form-select">
                                    <?php /** @var DistrictModel $district */
                                    foreach ($list_district as $district){?>
                                        <option value="<?= $district->getId()?>" <?php echo $district->getId() == $current_district?'selected':''; ?> ><?= $district->getName()?></option>
                                        <?php
                                    }?>
                                </select>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="column grid__item" style="margin-top: 20px;">
                        <ul>
                            <?php
                            /** @var SchoolsModel $schools */
                            foreach ($list_schools as $schools){ ?>
                                <li class="schools-item"><i class="fa fa-apple"></i> <a href="/truong-mam-non/<?= $schools->getUrl() ?>"><?= $schools->getName() ?></a>
                                  <span>Địa chỉ: <?= $schools->getAddress() ?></span>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>
