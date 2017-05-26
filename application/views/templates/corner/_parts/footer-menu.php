<div id="top-footer" class="clearfix columns-4">
    <div class="ak-container">
        <div class="top-footer-wrap clearfix">
            <div class="top-footer-block">
                <aside id="accesspress_cta_simple-2" class="widget widget_accesspress_cta_simple">
                    <div class="cta-banner clearfix">
                        <div class="banner-text wow">
                            <h1 class="widget-title">Thông tin liên hệ</h1>
                            <div class="cta-desc_simple">
                                <p class="text-5-desc"><strong>Email:</strong> thoitrangchobe.store@gmail.com</p>
                            </div>
                        </div>
                        <div class="banner-btn wow fadeInRight" data-wow-delay="0.5s">
                            <a class="btn" href=""><i class="fa "></i></a>
                        </div>
                    </div>
                </aside>
            </div>

            <div class="top-footer-block">
                <aside id="apsi_widget-2" class="widget widget_apsi_widget">
                    <h1 class="widget-title">Mạng xã hội</h1>
                    <div class="aps-social-icon-wrapper">
                        <div class="aps-group-horizontal">
                            <div class="fb-follow" data-href="https://www.facebook.com/cherryfashion.vn/" data-layout="standard" data-size="small" data-show-faces="true"></div>
<!--                            <div class="fb-like" data-href="https://www.facebook.com/cherryfashion.vn/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>-->
                            <div class="fb-page" data-href="https://www.facebook.com/cherryfashion.vn/" data-tabs="timeline" data-width="320" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cherryfashion.vn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cherryfashion.vn/">Cherry fashion - Thời trang thiết kế cho bé</a></blockquote></div>
                        </div>


                    </div>
                </aside>
            </div>
            <div class="top-footer-block">
                <aside id="text-2" class="widget widget_text">
                    <h1 class="widget-title">Pages</h1>
                    <div class="textwidget">
                        <ul>
                            <li
                                class="page_item <?php if(isset($current_menu['home'])) echo 'current_page_item';?>"><a href="/">Trang chủ</a></li>
                            <?php foreach ($categories as $categoty){?>
                                <li id="categorie-<?= $categoty->id?>"
                                    class="page_item <?php if(isset($current_menu['categorie-'.$categoty->id])) echo 'current_page_item';?>"><a href="/category-<?=$categoty->urlName?>"><?=$categoty->name ?></a></li>
                            <?php }?>
                            <li class="page_item <?php if(isset($current_menu['faqs'])) echo 'current_page_item';?>"><a href="#">Tin tức</a></li>
                            <li class="page_item <?php if(isset($current_menu['aboutus'])) echo 'current_page_item';?>"><a href="/about/">Giới thiệu</a></li>
                            <li class="page_item <?php if(isset($current_menu['contacts'])) echo 'current_page_item';?>"><a href="/contact/">Liên hệ</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div> 