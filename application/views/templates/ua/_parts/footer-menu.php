
<a href="#" class="palm--show">
    <div class="back-to-top">
        <p>BACK TO TOP</p>
    </div></a>
<div class="site-footer palm--hidden">
    <div class="site-wrapper">
        <!--<div class="news-letter-sign-up">
            <form id="frm-subscribe" action="/subscribe" name="frm-subscribe">
                <p>Sign up for our newsletter & get $10 off your first tour</p>
                <div class="news-letter-sign-up-form">
                    <input id="news-email" type="text" name="news-email" placeholder="Email address...">
                    <input id="SIGNUP" type="hidden" name="SIGNUP" value="footer">
                    <input id="subscribe-news" type="submit" value="OK">
                </div>
            </form>
        </div>-->
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
            <!--<div class="column grid__item one-fifth">
                <p>GET INSPIRED</p>
                <ul>
                    <li><a href="http://www.urbanadventures.com/blog/category/features/24-hours-in">24 Hours In... Guides</a></li>
                    <li><a href="http://www.urbanadventures.com/blog/category/features/things-to-do-in">Things To Do In... Guides</a></li>
                    <li><a href="/blog/">Urban Adventures Blog</a></li>
                    <li><a href="/subscribe">Get the Newsletter</a></li>
                </ul>
            </div>
            <div class="column grid__item one-fifth">
                <p>ABOUT US</p>
                <ul>
                    <li><a href="/about-us#responsible-travel">Responsible Travel</a></li>
                    <li><a href="/about-us#work-with-us">Jobs at Urban Adventures</a></li>
                    <li><a href="/about-us#head-office">Head Office Team</a></li>
                    <li><a href="/about-us#local-team">Local Teams</a></li>
                    <li><a href="/about-us#press">Press &amp; Awards</a></li>
                    <li><a href="/about-us#faqs">FAQs</a></li>
                    <li><a href="/terms-of-use">Terms &amp; Conditions</a></li>
                    <li><a href="/privacy-statement">Privacy Policy</a></li>
                </ul>
            </div>-->
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
        <!--<div class="news-letter-sign-up-mobile">
            <p>Sign up for our newsletter & get $10 off your first tour</p>
            <div class="news-letter-sign-up-form-mobile combo reversed full">
                <form id="frm-subscribe-mobile" action="/subscribe" name="frm-subscribe">
                    <div class="combo-first">
                        <input id="SIGNUP" type="hidden" name="SIGNUP" value="mobile">
                        <input id="news-email-mobile" type="text" name="news-email" placeholder="Email address..." class="email-field">
                    </div>
                    <div class="combo-last">
                        <input id="subscribe-news-mobile" type="submit" value="OK" class="email-submit">
                    </div>
                </form>
            </div>
        </div>-->
        <div class="social-media">
            <a href="http://www.facebook.com/cherryfashion.vn" class="icon icon-facebook"></a>
            <a href="http://twitter.com/urbanadventures" class="icon icon-twitter"></a>
            <a href="http://www.pinterest.com/UrbanAdventures" class="icon icon-pinterest"></a>
            <a href="http://instagram.com/urbanadventures" class="icon icon-instagram"></a>
            <a href="/subscribe" class="icon icon-newsletter"></a>
        </div>
    </div>
</div>