
<a href="#" class="palm--show">
    <div class="back-to-top">
        <p>ĐẦU TRANG</p>
    </div></a>
<div class="site-footer palm--hidden">
    <div class="site-wrapper">
        <div class="multi-column-footer grid">
            <?php foreach ($top_menu as $item){?>
            <div class="column grid__item one-fifth">
                <p class="capitalize"><a href="/category-<?= $item['info']['url'] ?>"><?= $item['info']['name'] ?></a></p>
                <?php if(!empty($item['children'])){ ?>
                <ul>
                    <?php foreach ($item['children'] as $child){ ?>
                    <li>
                        <a href="/category-<?= $child['url'] ?>"><?= $child['name'] ?></a>
                    </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            </div>
            <?php } ?>
            <div class="column grid__item one-fifth">
                <p>THÔNG TIN LIÊN HỆ</p>
                <ul>
                    <li><strong>Email:</strong><br/> thoitrangchobe.store@gmail.com</li>
                    <li><strong>Số điện thoại:</strong><br/> <a href="tel:0969188827">0969188827</a></li>
                    <li><strong>Địa chỉ:</strong><br/> 269/12B11 Bà Hom P.13 Q.6 TP.HCM</li>
                    <li><strong>Facebook:</strong><br/> <a target="_blank" href="https://facebook.com/cherryfashion.vn">facebook.com/cherryfashion.vn</a></li>
                </ul>
            </div>
            <div class="column grid__item one-fifth">
                <p>MẠNG XÃ HỘI</p>
                <div class="aps-social-icon-wrapper">
                    <div class="aps-group-horizontal">
                        <div class="fb-follow" data-href="https://www.facebook.com/cherryfashion.vn/" data-layout="standard" data-size="small" data-show-faces="true"></div>
                        <!--                            <div class="fb-like" data-href="https://www.facebook.com/cherryfashion.vn/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>-->
                        <div class="fb-page" data-href="https://www.facebook.com/cherryfashion.vn/" data-tabs="timeline" data-width="320" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cherryfashion.vn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cherryfashion.vn/">Cherry fashion - Thời trang thiết kế cho bé</a></blockquote></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-footer-mobile large--hidden">
    <div class="site-wrapper narrow">
        <div class="social-media">
            <a href="http://www.facebook.com/cherryfashion.vn" class="icon icon-facebook"></a>
        </div>
    </div>
</div>