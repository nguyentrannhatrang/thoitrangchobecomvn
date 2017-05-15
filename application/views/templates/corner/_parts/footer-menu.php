<div id="top-footer" class="clearfix columns-4">
    <div class="ak-container">
        <div class="top-footer-wrap clearfix">
            <div class="top-footer-block">
                <aside id="accesspress_cta_simple-2" class="widget widget_accesspress_cta_simple">
                    <div class="cta-banner clearfix">
                        <div class="banner-text wow fadeInLeft" data-wow-delay="0.5s">
                            <h1 class="widget-title">Thông tin liên hệ</h1>
                            <div class="cta-desc_simple">
                                <p class="text-5-desc"><strong>Email:</strong> info@jenscornershop.com.au</p>
                            </div>
                        </div>
                        <div class="banner-btn wow fadeInRight" data-wow-delay="0.5s">
                            <a class="btn" href=""><i class="fa "></i></a>
                        </div>
                    </div>
                </aside>
            </div>

            <!-- <div class="top-footer-block">
                 <aside id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget">
                     <h1 class="widget-title">Sign up to newsletter</h1>
                     <script type="text/javascript">(function() {
                             if (!window.mc4wp) {
                                 window.mc4wp = {
                                     listeners: [],
                                     forms    : {
                                         on: function (event, callback) {
                                             window.mc4wp.listeners.push({
                                                 event   : event,
                                                 callback: callback
                                             });
                                         }
                                     }
                                 }
                             }
                         })();
                     </script>
                     <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-12" method="post" data-id="12" data-name="Newsletter Signup" ><div class="mc4wp-form-fields"><p>
                                 To keep up to date with specials new products and my handmade items
                             </p>
                             <p>
                                 <label>Email address: </label>
                             </p>
                             <p>
                                 <input type="email" name="EMAIL" placeholder="Your email address" required />
                             </p>
                             <p>
                                 <input type="submit" value="Sign up" />
                             </p>
                             <div style="display: none;">
                                 <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
                             </div>
                             <input type="hidden" name="_mc4wp_timestamp" value="1491925876" />
                             <input type="hidden" name="_mc4wp_form_id" value="12" />
                             <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                         </div>
                         <div class="mc4wp-response">

                         </div>
                     </form>
                 </aside>
             </div>-->

            <div class="top-footer-block">
                <aside id="apsi_widget-2" class="widget widget_apsi_widget">
                    <h1 class="widget-title">Mạng xã hội</h1>
                    <div class="aps-social-icon-wrapper">
                        <div class="aps-group-horizontal">
                            <div class="aps-each-icon icon-1-1" style='margin:px;' data-aps-tooltip='Facebook' data-aps-tooltip-enabled="1" data-aps-tooltip-bg="#000" data-aps-tooltip-color="#fff">
                                <a href="http://fb.com/jenscornershop" target="_blank" class="aps-icon-link animated aps-tooltip" data-animation-class="">
                                    <img src="http://jenscornershop.com.au/wp-content/plugins/accesspress-social-icons/icon-sets/png/set5/facebook.png" alt="Facebook"/>
                                </a>
                                <span class="aps-icon-tooltip aps-icon-tooltip-bottom" style="display: none;"></span>
                                <style class="aps-icon-front-style">.icon-1-1 img{height:px;width:px;opacity:1;-moz-box-shadow:0px 0px 0px 0 ;-webkit-box-shadow:0px 0px 0px 0 ;box-shadow:0px 0px 0px 0 ;padding:0px;}.icon-1-1 .aps-icon-tooltip:before{border-color:#000}</style>
                            </div>

                            <div class="aps-each-icon icon-1-2" style='margin:px;' data-aps-tooltip='Instagram' data-aps-tooltip-enabled="1" data-aps-tooltip-bg="#000" data-aps-tooltip-color="#fff">
                                <a href="http://www.instagram.com/jenscornershop/" target="_blank" class="aps-icon-link animated aps-tooltip" data-animation-class="">
                                    <img src="http://jenscornershop.com.au/wp-content/plugins/accesspress-social-icons/icon-sets/png/set5/instagram.png" alt="Instagram"/>
                                </a>
                                <span class="aps-icon-tooltip aps-icon-tooltip-bottom" style="display: none;"></span>
                                <style class="aps-icon-front-style">.icon-1-2 img{height:px;width:px;opacity:1;-moz-box-shadow:0px 0px 0px 0 ;-webkit-box-shadow:0px 0px 0px 0 ;box-shadow:0px 0px 0px 0 ;padding:0px;}.icon-1-2 .aps-icon-tooltip:before{border-color:#000}</style>
                            </div>
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