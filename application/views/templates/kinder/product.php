
<!-- breadcrumb start -->
<div class="breadcrumb-area" style="background: #f6f6f6 url('http://cdn.shopify.com/s/files/1/1010/9088/files/blogbanner.jpg?v=1504932528') no-repeat scroll center center / cover !important">
    <div class="container-fluid text-center">
        <div class="breadcrumb-stye gray-bg ptb-100">
            <h2 class="page-title"><?= $current_categorie->getName() ?></h2>
            <nav class="" role="navigation" aria-label="breadcrumbs">
                <ul class="breadcrumb-list">
                    <li>
                        <a href="/" title="Quay lại trang chủ">Trang Chủ</a>
                    </li>
                    <li>
                        <a href="/category-<?= $current_categorie->getUrlName() ?>" title="<?= $current_categorie->getName() ?>"><?= $current_categorie->getName() ?></a>
                    </li>
                    <li>
                        <span><?= $product->getName() ?></span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- breadcrumb end -->
<main role="main">

    <div id="product-detail" class="shopify-section"><!-- PAGE SECTION START -->
        <div class="page-section section pt-120 pb-120">
            <div class="container-fluid">
                <div class="row mb-40">
                    <!-- Single Product Images -->
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img">

                                <img class="" id="ProductPhotoImg" src="<?= base_url('/attachments/shop_images/'.$product->image)?>" alt="Đầm bé gái - <?= $product->getName()?>">
                            </div>
                        </div>
                        <!-- Single Product Thumbnail Slider -->
                        <div class="pro-thumb-img-slider" id="ProductThumbs">
                            <?php foreach ($others_image as $index=>$other) {?>
                                <div>
                                    <a class="product-single__thumbnail" href="<?= $other ?>" alt="Đầm bé gái - <?= $product->getName()?>" /></a>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <!-- Single Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">Fall Girls Cinnamon Avalon Dress</h1>
                            <div class='judgeme-preview-badge' data-id='1679117380'><div style="display:none;" id="judgeme_badge_settings"
                                                                                         data-badge-no-review-text-setting="" data-badge-n-reviews-text-setting="" data-badge-star-color-setting="#fff50f" data-hide-badge-preview-if-no-reviews-setting="" data-badge-hide-text-setting="" data-enforce-center-preview-badge-setting=""  >
                                </div>
                                <div style='display:none' class='jdgm-prev-badge' data-average-rating='0.00' data-number-of-reviews='0' data-number-of-questions='0'> <span class='jdgm-prev-badge__stars' data-score='0.00'> <span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span> </span> <span class='jdgm-prev-badge__text'> No reviews </span> </div></div>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left">
              <span class="new" id="ProductPrice">$ 68.00</span>
              <span class="old"></span>
            </span>
                                <!-- Ratting -->
                                <span class="ratting float-right">
              <span class="shopify-product-reviews-badge" data-id="1679117380"></span>
            </span>
                            </div>
                            <!-- Short Description -->
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Details</h5>
                            </div>
                            <form  action="/cart/add" method="post" enctype="multipart/form-data" id="add-item-form">
                                <div class="product-size section fix">
                                    <select name="id" id="productSelect" class="product-single__variants email s-email s-wid" style="display:none;">

                                        <option  selected="selected"  data-sku="" value="5918416580">12mos - $ 68.00 USD</option>
                                        <option  data-sku="" value="5918480004">2T - $ 68.00 USD</option>
                                        <option  data-sku="" value="5918480068">3T - $ 68.00 USD</option>
                                    </select>
                                    <style>
                                        label[for="product-select-option-0"] { display: none; }
                                        #product-select-option-0 { display: none; }
                                        #product-select-option-0 + .custom-style-select-box { display: none !important; }
                                    </style>

                                    <div class="swatch clearfix Size" data-option-index="0">
                                        <div class="header">Size : </div>
                                        <div data-value="12mos" class="swatch-element 12mos available">
                                            <input id="swatch-0-12mos" type="radio" name="option-0" value="12mos" checked  />
                                            <label for="swatch-0-12mos">
                                                12mos
                                            </label>

                                        </div>
                                        <script>
                                            jQuery('.swatch[data-option-index="0"] .12mos').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                                        </script>
                                        <div data-value="2T" class="swatch-element 2t available">
                                            <input id="swatch-0-2t" type="radio" name="option-0" value="2T"  />
                                            <label for="swatch-0-2t">
                                                2T
                                            </label>
                                        </div>
                                        <script>
                                            jQuery('.swatch[data-option-index="0"] .2t').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                                        </script>
                                        <div data-value="3T" class="swatch-element 3t available">
                                            <input id="swatch-0-3t" type="radio" name="option-0" value="3T"  />
                                            <label for="swatch-0-3t">
                                                3T
                                            </label>
                                        </div>
                                        <script>
                                            jQuery('.swatch[data-option-index="0"] .3t').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                                        </script>
                                    </div>
                                    <!-- <script>
                                         jQuery(function() {
                                             jQuery('.swatch :radio').change(function() {
                                                 var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                                                 var optionValue = jQuery(this).val();
                                                 jQuery(this)
                                                     .closest('form')
                                                     .find('.single-option-selector')
                                                     .eq(optionIndex)
                                                     .val(optionValue)
                                                     .trigger('change');
                                             });
                                         });
                                     </script>-->
                                </div>
                                <!-- Quantity Cart -->
                                <div class="quantity-cart section fix">
                                    <div class="product-quantity2">
                                        <input type="text" value="01" name="quantity">
                                    </div>
                                    <button class="add-to-cart addtocart">Add to Cart</button>
                                </div>
                            </form>
                            <!-- Share -->
                            <div class="share-icons section fix">
                                <span>share :</span>
                                <a target="_blank" href="//www.facebook.com/sharer.php?u=http://thoitrangchobe.com.vn/category-<?= $current_categorie->getUrlName() ?>/<?= $product->getUrl() ?>" title="Chia sẻ trên Facebook" tabindex="0"><i class="fa fa-facebook"></i></a>

                            </div>

                            <p></p>

                            <div id="w3-product-accessories">
                                <div id="w3-money-format" style="display:none;">$ {{amount}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <style type='text/css'> #tabs, .custom-product-description-tabs { background: transparent !important; border: none !important; }  #judgeme_product_reviews { border: none !important; }  #tabs-app-accordion { overflow: hidden; margin-bottom: 10px; padding-bottom: 2px; }  #tabs > div, .custom-product-description-tabs > div, #tabs-app-accordion > div { background: #f7f7f7; margin-top: 0px; color: #333333; border: solid 0px #dddddd; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; -moz-border-radius-topleft: 0px; -webkit-border-top-left-radius: 0px; border-top-left-radius: 0; padding: 10px; display: none; overflow: hidden; clear: both; }  #tabs-app-accordion > div  { -moz-border-radius: 0px; -webkit-border-radius: 0px; border-radius: 0px; border-top: 0; border-bottom: 0; }  #tabs-app-accordion > div:last-child  { border-bottom: solid 0px #dddddd; -moz-border-radius-bottomleft: 3px; -webkit-border-bottom-left-radius: 3px; border-bottom-left-radius: 3px; -moz-border-radius-bottomright: 3px; -webkit-border-bottom-right-radius: 3px; border-bottom-right-radius: 3px; }  #tabs > div[aria-hidden='false'], .custom-product-description-tabs > div[aria-hidden='false'] { display: block; }  #tabs .spr-container, .custom-product-description-tabs > .spr-container { border: none; }  #tabs > div > span, .custom-product-description-tabs > div > span, #tabs-app-accordion > div > span { display: block; }  #tabs > div[aria-hidden='false'], .custom-product-description-tabs > div[aria-hidden='false'], #tabs > div:first-of-type, .custom-product-description-tabs > div:first-of-type { display: block; }  #tabs > ul, .custom-product-description-tabs > ul { display: block; margin: 0 0 10px 0; padding: 0; margin: 0 !important; border: 0 !important; border-bottom: solid 1px #ddd; border-radius: 0; height: 42px; background: transparent; color: #151212; }  #tabs > ul > li, #tabs-app-accordion > h3, .custom-product-description-tabs > ul > li { display: block; width: auto; height: 42px; line-height: 41px; padding: 0; float: left; border: 0; background: transparent; margin: 0 !important; }  #tabs-app-accordion > h3 { width: 100%; outline: 0 }  #tabs.ui-widget, .custom-product-description-tabs.ui-widget, #tabs-app-accordion.ui-widget {     font-family: inherit !important;     font-size: inherit !important;     clear:both; } #tabs.ui-widget > ul > li a, #tabs-app-accordion.ui-widget > h3 a, .custom-product-description-tabs.ui-widget > ul > li a {     font-family: inherit !important; }  #tabs > ul > li a, #tabs-app-accordion > h3 a, .custom-product-description-tabs > ul > li a {                     font-style: normal;                     font-weight: normal; border: 0; display: block; text-decoration: none; width: auto; height: 38px; padding: 0px 11px !important; line-height: 39px; background: #ffffff; color: #151212; font-size: 16px; outline:none; margin: 1px 0 0 0; -webkit-box-sizing: content-box !important; -moz-box-sizing: content-box !important; box-sizing: content-box !important; overflow: hidden; white-space: nowrap; }   #tabs-app-accordion > div { margin: 0 }  #tabs-app-accordion > h3 a { margin: 0; height: 39px; border: 3px #dddddd solid; border-bottom: 0; }  #tabs-app-accordion > h3 a { border-bottom: 3px #dddddd solid; }  #tabs-app-accordion > h3.ui-state-active a { border: 3px #dddddd solid; }  #tabs-app-accordion > h3:last-of-type a { height: 39px; -moz-border-radius-bottomleft: 3px; -webkit-border-bottom-left-radius: 3px; border-bottom-left-radius: 3px; -moz-border-radius-bottomright: 3px; -webkit-border-bottom-right-radius: 3px; border-bottom-right-radius: 3px; } #tabs-app-accordion > h3.ui-state-active a { -moz-border-radius-bottomleft: 0px; -webkit-border-bottom-left-radius: 0px; border-bottom-left-radius: 0px; -moz-border-radius-bottomright: 0px; -webkit-border-bottom-right-radius: 0px; border-bottom-right-radius: 0px; }  @media screen and (max-device-width: 480px) and (orientation: portrait){ #tabs ul li a, .custom-product-description-tabs ul li a { font-size: 16px; padding: 0px 10px !important; } }  #tabs > ul > li.ui-state-active a, .custom-product-description-tabs > ul > li.ui-state-active a {                     font-style: normal;                     font-weight: normal; border: 0; border-bottom: 3px #dddddd solid; background-color: #ffffff; height: 41px !important; position: relative; top: 1px; margin: 0; color: #000000; line-height: 39px !important; -webkit-box-sizing: initial !important; -moz-box-sizing: initial !important; box-sizing: initial !important; }  #tabs > ul > li:last-child a, .custom-product-description-tabs > ul > li:last-child a {                     font-style: normal;                     font-weight: normal; border: 0; -moz-border-radius-topright: 3px; -webkit-border-top-right-radius: 3px; border-top-right-radius: 3px; }  #tabs > ul > li.ui-state-active:last-child a, .custom-product-description-tabs > ul > li.ui-state-active:last-child a { border: 0; border-bottom: 3px #dddddd solid; }  #tabs-app-accordion > h3:first-child a { -moz-border-radius-topright: 3px; -webkit-border-top-right-radius: 3px; border-top-right-radius: 3px; -moz-border-radius-topleft: 3px; -webkit-border-top-left-radius: 3px; border-top-left-radius: 3px; }  #tabs > ul > li:first-child a, .custom-product-description-tabs > ul > li:first-child a { -moz-border-radius-topleft: 3px; -webkit-border-top-left-radius: 3px; border-top-left-radius: 3px; }  #tabs > #last-tab, .custom-product-description-tabs > .last-tab { display: block; background: transparent; border: none; color: inherit; }  #tabs > div *:last-child, .custom-product-description-tabs > div *:last-child, #tabs-app-accordion > div *:last-child {   margin-bottom: 0; } </style><link id="tabscss" rel="stylesheet" onError="jQuery191('#tabs > ul > li').hide();"><script type="text/javascript">function loadScript(url, callback) { var script = document.createElement("script"); script.type = "text/javascript"; script.async = true; if (script.readyState) { script.onreadystatechange = function () { if (script.readyState == "loaded" || script.readyState == "complete") { script.onreadystatechange = null; callback(); }; }; } else { script.onload = function () { callback(); }; };  script.src = url; document.getElementsByTagName("head")[0].appendChild(script); };  var jQuery191;  loadScript("//nexusmedia-ua.github.io/cdn/easyslide/jquery191.min.js", function(){ jQuery191 = jQuery.noConflict(true); jQuery191.getScript("//nexusmedia-ua.github.io/cdn/easyslide/jquery191-ui-1.10.4.min.js", function(){ jQuery191("#tabs").tabs(); jQuery191( window ).load(function() { jQuery191("#tabscss").attr("href", "/apps/tabs/newcss"); }); jQuery191(".custom-product-description-tabs").tabs();  if (navigator.userAgent.indexOf("Opera") != -1) { setTimeout(function(){ jQuery191("#tabs").tabs(); jQuery191(".custom-product-description-tabs").tabs(); }, 100); };  if (typeof($) != "undefined") { $("#tabs ul li a").unbind("click.smoothscroll"); setTimeout(function(){ $("#tabs ul li a").unbind("click.smoothscroll"); }, 1000); }; function tabsToAccordions(){ currentState = "accordion"; jQuery191("#tabs").each(function(){var e = jQuery191( document.createElement('div') ); e.attr('id', 'tabs-app-accordion');var t=new Array;jQuery191(this).find(">ul>li").each(function(){t.push("<h3>"+jQuery191(this).html()+"</h3>")});var n=new Array;jQuery191(this).find(">div").not("#last-tab").each(function(){n.push(this)});for(var r=0;r<t.length;r++){e.append(t[r]).append(n[r])}jQuery191(this).before(e);jQuery191(this).after(jQuery191("#last-tab"));jQuery191(this).remove();});jQuery191("#tabs-app-accordion").accordion( { heightStyle: "content", animate: 100 } );jQuery191(".ui-accordion-header").bind("click",function(){ theOffset = jQuery191("#tabs-app-accordion").offset().top;  jQuery191("html, body").animate({scrollTop: (theOffset-50)}, 100).finish(100);    });jQuery191(".ui-accordion-header").bind("click",function(){  window.dispatchEvent(new Event("resize"));  }); } function accordionsToTabs(){ currentState = "tabs"; jQuery191("#tabs-app-accordion").each(function(){var e = jQuery191( document.createElement('div') ); e.attr('id', 'tabs');var t=0;var n=jQuery191(document.createElement('ul'));jQuery191(this).find(">h3").each(function(){t++;n.append('<li><a href="#tabs-app-tabs-'+t+'">'+jQuery191(this).text()+"</a></li>")});var t=0;var r=jQuery191("");jQuery191(this).find(">div").not("#last-tab").each(function(){t++; var ell = jQuery191( document.createElement('div') ); ell.attr('id', 'tabs-app-tabs-'+t); ell.html(jQuery191(this).html()); r=r.add(ell)});e.append(n).append(r).append(jQuery191("#last-tab"));jQuery191(this).before(e);jQuery191(this).remove()});jQuery191("#tabs").tabs();jQuery191(".ui-tabs-anchor").bind("click",function(){  window.dispatchEvent(new Event("resize"));  }); }  var windowWidthToRotate = 0; var widthToRotate = 0; var currentState = "tabs";  function updateUI(){  if (currentState == "tabs" &&  ( jQuery191("#tabs").size() > 0 && jQuery191("#tabs").width() <= widthToRotate )  ||  ( jQuery191(window).width() <= windowWidthToRotate )  ){ if (typeof jQuery191(window).tabs != "function") { jQuery191.getScript("//nexusmedia-ua.github.io/cdn/easyslide/jquery191-ui-1.10.4.min.js", function(){ tabsToAccordions(); }); } else { tabsToAccordions(); } } else if (currentState == "accordion" && jQuery191("#tabs-app-accordion").size() > 0 && jQuery191("#tabs-app-accordion").width() > widthToRotate && jQuery191(window).width() > windowWidthToRotate){ if (typeof jQuery191(window).tabs != "function") { jQuery191.getScript("//nexusmedia-ua.github.io/cdn/easyslide/jquery191-ui-1.10.4.min.js", function(){ accordionsToTabs(); }); } else { accordionsToTabs(); } } }  jQuery191(function() { jQuery191("#tabs>ul>li").each(function(){ widthToRotate += jQuery191(this).width(); }); jQuery191(window).resize(function(e){ updateUI(); }); updateUI(); }); }); }); </script><div class="description" id="tabs" itemprop="description"><ul><li><a href="#tabs-1">Description</a></li><li><a href="#tabs-s0">Size Chart</a></li><li><a href="#tabs-s1">Delivery Times</a></li><li><a href="#tabs-s2">Reviews</a></li></ul><div id="tabs-1"><meta charset="utf-8">
                        <p><span>Girls Fall/Thanksgiving Cinnamon Avalon Dress with Flutter sleeves, sewn in sash, and lots of other lovely details.  It's the perfect boutique style Holiday dress for every little girl.</span></p>
                        <p>T-Shirt available <a href="http://kinderkoutureclothing.com/products/white-knit-t-shirt?variant=5950147908" target="_blank" rel="noopener noreferrer">here</a>.</p></div><div id="tabs-s0"><p><img style="width: 440px; height: 587px;" src="https://cdn.shopify.com/s/files/1/1010/9088/files/SizeChart_8de37b70-3b2b-4a74-a4f5-01f2927fee3a.jpg?5931893910038076711" alt="" /></p></div><div id="tabs-s1"></div><div id="tabs-s2"><div id="judgeme_product_reviews" data-product-title="Fall Girls Cinnamon Avalon Dress" data-id="1679117380"><script data-cfasync='false' class='jdgm-settings-script'>window.jdgmSettings={"pagination":5,"widget_star_color":"#f97ab3","verified_badge_bg_color":"#f97ab3","verified_badge_text_color":"#ffffff","verified_badge_placement":"left-of-reviewer-name","widget_review_max_height":1,"widget_hide_border":true,"widget_social_share":true,"widget_review_location_show":true,"widget_location_format":"country_iso_code","all_reviews_include_out_of_store_products":true,"enable_review_pictures":true,"enable_question_anwser":true,"widget_theme":"align","badge_star_color":"#fca3c3","hide_badge_preview_if_no_reviews":true,"badge_hide_text":true,"reply_name":"kinderkoutureclothing.com","footer":true,"autopublish":true,"review_dates":true,"enable_custom_form":false};</script> <style class='jdgm-settings-style'>:not(.jdgm-prev-badge__stars)>.jdgm-star{color:#f97ab3}.jdgm-preview-badge .jdgm-star.jdgm-star{color:#fca3c3}.jdgm-prev-badge[data-average-rating='0.00']{display:none !important}.jdgm-prev-badge__text{display:none !important}.jdgm-widget.jdgm-all-reviews-widget,.jdgm-widget .jdgm-rev-widg{border:none;padding:0}.jdgm-author-all-initials{display:none !important}.jdgm-author-last-initial{display:none !important}.jdgm-rev__replier:before{content:'kinderkoutureclothing.com'}.jdgm-rev__prod-link-prefix:before{content:'about'}.jdgm-rev__out-of-store-text:before{content:'(out of store)'}
                            </style> <link rel="stylesheet" type="text/css" media="all" href="https://cdn.judge.me/shopify_v2/align.css"><div class='jdgm-rev-widg' data-average-rating='0.00' data-number-of-reviews='0' data-number-of-questions='0'> <style class='jdgm-temp-hiding-style'>.jdgm-rev-widg{ display: none }</style> <div class='jdgm-rev-widg__header'> <h2 class='jdgm-rev-widg__title'>Customer Reviews</h2>  <div class='jdgm-rev-widg__summary'> <div class='jdgm-rev-widg__summary-stars'> <a class='jdgm-star jdgm--off'></a><a class='jdgm-star jdgm--off'></a><a class='jdgm-star jdgm--off'></a><a class='jdgm-star jdgm--off'></a><a class='jdgm-star jdgm--off'></a> </div> <div class='jdgm-rev-widg__summary-text'>No reviews yet</div> </div> <a style='display: none' href='#' class='jdgm-write-rev-link'>Write a review</a> <div class='jdgm-histogram jdgm-temp-hidden'>  <div class='jdgm-histogram__row' data-rating='5' data-frequency='0' data-percentage='0'> <div class='jdgm-histogram__star'><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a></div> <div class='jdgm-histogram__bar'> <div class='jdgm-histogram__bar-content' style='width: 0%;'> </div> </div> <div class='jdgm-histogram__percentage'>0%</div> <div class='jdgm-histogram__frequency'>(0)</div> </div>  <div class='jdgm-histogram__row' data-rating='4' data-frequency='0' data-percentage='0'> <div class='jdgm-histogram__star'><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--off'></a></div> <div class='jdgm-histogram__bar'> <div class='jdgm-histogram__bar-content' style='width: 0%;'> </div> </div> <div class='jdgm-histogram__percentage'>0%</div> <div class='jdgm-histogram__frequency'>(0)</div> </div>  <div class='jdgm-histogram__row' data-rating='3' data-frequency='0' data-percentage='0'> <div class='jdgm-histogram__star'><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--off'></a><a class='jdgm-star jdgm--off'></a></div> <div class='jdgm-histogram__bar'> <div class='jdgm-histogram__bar-content' style='width: 0%;'> </div> </div> <div class='jdgm-histogram__percentage'>0%</div> <div class='jdgm-histogram__frequency'>(0)</div> </div>  <div class='jdgm-histogram__row' data-rating='2' data-frequency='0' data-percentage='0'> <div class='jdgm-histogram__star'><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--off'></a><a class='jdgm-star jdgm--off'></a><a class='jdgm-star jdgm--off'></a></div> <div class='jdgm-histogram__bar'> <div class='jdgm-histogram__bar-content' style='width: 0%;'> </div> </div> <div class='jdgm-histogram__percentage'>0%</div> <div class='jdgm-histogram__frequency'>(0)</div> </div>  <div class='jdgm-histogram__row' data-rating='1' data-frequency='0' data-percentage='0'> <div class='jdgm-histogram__star'><a class='jdgm-star jdgm--on'></a><a class='jdgm-star jdgm--off'></a><a class='jdgm-star jdgm--off'></a><a class='jdgm-star jdgm--off'></a><a class='jdgm-star jdgm--off'></a></div> <div class='jdgm-histogram__bar'> <div class='jdgm-histogram__bar-content' style='width: 0%;'> </div> </div> <div class='jdgm-histogram__percentage'>0%</div> <div class='jdgm-histogram__frequency'>(0)</div> </div>  <div class='jdgm-histogram__row jdgm-histogram__clear-filter' data-rating=null></div> </div> <div class='jdgm-rev-widg__sort-wrapper'></div> </div> <div class='jdgm-rev-widg__body'> <div class='jdgm-rev-widg__reviews'></div> <div class='jdgm-paginate' data-per-page='5' data-url='https://judge.me/reviews/reviews_for_widget'></div> </div> <div class='jdgm-rev-widg__paginate-spinner-wrapper'> <div class='jdgm-spinner'></div> </div> </div></div></div></div>



            </div>
        </div>
        <!-- PAGE SECTION END -->
        <!-- PRODUCT SECTION START -->
        <!-- PRODUCT SECTION START -->
        <div class="shop-area pb-70">
            <div class="container-fluid">
                <div class="section-title text-center">
                    <h3>Related products</h3>
                    <p>You might also like</p>
                </div>
                <div class="row">
                    <div class="product-slider product-slider-4">
                        <div class="col-xs-3">
                            <div class="shop hover-style mb-30">
                                <div class="shop-img">
                                    <div class="shop-single-img">
                                        <a href="/products/sweet-bunny-dress">
                                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0020-Edit_1024x1024.jpg?v=1505013484" alt="" />
                                        </a>
                                        <div class="product-cart-3">

                                            <a href="javascript:void(0);" onclick="Shopify.addItem(6961993028, 1); return false;" title="Add to Cart"><i class="pe-7s-cart"></i></a>

                                            <a href="javascript:void(0);" onclick="quiqview('sweet-bunny-dress')" data-toggle="modal" title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                    <div class="title-style-3 text-center">
                                        <h3><a href="/collections/instabadge-best-selling/products/sweet-bunny-dress">Sweet Bunny Dress</a></h3>
                                        <span class="new-price">$ 70.00</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="shop hover-style mb-30">
                                <div class="shop-img">
                                    <div class="shop-single-img">
                                        <a href="/products/baby-rose-dress">
                                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/babypinkroseproductimage_1024x1024.jpg?v=1505569860" alt="" />
                                        </a>

                                    </div>
                                    <div class="title-style-3 text-center">
                                        <h3><a href="/collections/instabadge-best-selling/products/baby-rose-dress">Baby Rose Dress</a></h3>
                                        <span class="new-price">$ 72.00</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="shop hover-style mb-30">
                                <div class="shop-img">
                                    <div class="shop-single-img">
                                        <a href="/products/red-gingham-dress">
                                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/Redginghamproductimage_1024x1024.jpg?v=1504560827" alt="" />
                                        </a>

                                    </div>
                                    <div class="title-style-3 text-center">
                                        <h3><a href="/collections/instabadge-best-selling/products/red-gingham-dress">Red Gingham Dress</a></h3>
                                        <span class="new-price">$ 72.00</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="shop hover-style mb-30">
                                <div class="shop-img">
                                    <div class="shop-single-img">
                                        <a href="/products/celeste">
                                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/20160228-IMG_0038_1024x1024.jpg?v=1505570159" alt="" />
                                        </a>

                                    </div>
                                    <div class="title-style-3 text-center">
                                        <h3><a href="/collections/instabadge-best-selling/products/celeste">Celeste</a></h3>
                                        <span class="new-price">$ 68.00</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="shop hover-style mb-30">
                                <div class="shop-img">
                                    <div class="shop-single-img">
                                        <a href="/products/fox-and-friends-dress">
                                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/foxandfriendsproductimage_1024x1024.jpg?v=1505570722" alt="" />
                                        </a>

                                    </div>
                                    <div class="title-style-3 text-center">
                                        <h3><a href="/collections/instabadge-best-selling/products/fox-and-friends-dress">Fall Girls Fox and Friends Dress</a></h3>
                                        <span class="new-price">$ 72.00</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="shop hover-style mb-30">
                                <div class="shop-img">
                                    <div class="shop-single-img">
                                        <a href="/products/evelyn">
                                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/image_2b0336b4-fc32-4e62-8c6c-adccca438088_1024x1024.jpg?v=1505570662" alt="" />
                                        </a>

                                    </div>
                                    <div class="title-style-3 text-center">
                                        <h3><a href="/collections/instabadge-best-selling/products/evelyn">EVELYN</a></h3>
                                        <span class="new-price">$ 80.00</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="shop hover-style mb-30">
                                <div class="shop-img">
                                    <div class="shop-single-img">
                                        <a href="/products/lola-rose-headband">
                                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0013_1024x1024.jpg?v=1505011417" alt="" />
                                        </a>

                                    </div>
                                    <div class="title-style-3 text-center">
                                        <h3><a href="/collections/instabadge-best-selling/products/lola-rose-headband">Lola Rose Headband</a></h3>
                                        <span class="new-price">$ 15.00</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">

                            <div class="shop hover-style mb-30">
                                <div class="shop-img">
                                    <div class="shop-single-img">
                                        <a href="/products/lola-rose-headband-aqua">
                                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/20160303-IMG_0034_1024x1024.jpg?v=1505011384" alt="" />
                                        </a>

                                    </div>
                                    <div class="title-style-3 text-center">
                                        <h3><a href="/collections/instabadge-best-selling/products/lola-rose-headband-aqua">Lola Rose Headband (Aqua)</a></h3>
                                        <span class="new-price">$ 15.00</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-3">
                            <div class="shop hover-style mb-30">
                                <div class="shop-img">
                                    <div class="shop-single-img">
                                        <a href="/products/girls-classic-jingle-christmas-dress">
                                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0006_1024x1024.JPG?v=1505008467" alt="" />
                                        </a>

                                    </div>
                                    <div class="title-style-3 text-center">
                                        <h3><a href="/collections/instabadge-best-selling/products/girls-classic-jingle-christmas-dress">Girls Classic Jingle Christmas Dress</a></h3>
                                        <span class="new-price">$ 75.00</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT SECTION END -->
        <!-- PRODUCT SECTION END -->
        <script>

            $('.product-slider-4').owlCarousel({
                loop: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                items: 4,
                dots: false,
                nav: false,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })

        </script>

    </div>

    <style type="text/css">

        {
            display:none;
        }
        .sc-pdb-tab-list li
        {
            border-bottom: none !important;
        }
        .sc-pdb-tab-details.sc-pdb-accodrion
        {
            border: none !important;
            padding:0px !important;
        }
        .sc-pdb-tab-list li, .sc-pdb-tab-details .resp-accordion
        {
            border-radius:5px 5px 0px 0px;
            border-top: solid 1px #000000 !important;
            border-left: solid 1px #000000 !important;
            border-right: solid 1px #000000 !important;
            padding: 6px 10px !important;
            background-color: #FFFFFF;
            color:#000000;
        }
        .sc-pdb-tab-details h2.resp-accordion:last-of-type
        {
            border-bottom: solid 1px #000000 !important;
        }
        .resp-tab-content-active
        {
            border: #000000 !important;
            color:#000000 !important;
        }
        .sc-pdb-tab-details
        {
            background-color: #FFFFFF !important;
            color: #000000 !important;
            border: solid 1px #000000 !important;
            position: relative; top: -1px;
        }
        .resp-tab-active
        {
            background-color: #FFFFFF !important;
            color:#000000 !important;
            padding-bottom: 12px;
            position: relative;
            border-color:#000000 !important;
            z-index: 9;
        }

        .sc-pdb-tab-details.sc-pdb-accodrion .resp-tab-content
        {
            border-left: solid 1px #000000 !important;
            border-right: solid 1px #000000 !important;
        }
        .sc-pdb-tab-details.sc-pdb-accodrion .resp-tab-content:not(:last-of-type)
        {
            border-top: solid 1px #000000 !important;
            border-bottom: none !important;
        }
        .sc-pdb-tab-details.sc-pdb-accodrion div.resp-tab-content:last-of-type
        {
            border-top: none !important;
            border-bottom: solid 1px #000000 !important;
        }
        .sc-pdb-tab-details.sc-pdb-accodrion .resp-tab-content
        {
            margin:0px !important;
        }

        /*Here your can change the breakpoint to set the accordion, when screen resolution changed*/
        @media only screen and (max-width: 769px) {
            ul.sc-pdb-tab-list {
                display: none !important;
            }

            h2.resp-accordion {
                display: block !important;
            }

            .resp-vtabs .resp-tab-content {
                border: 1px solid #000000 !important;
            }

            .resp-vtabs .sc-pdb-tab-details {
                border: none !important;
                float: none !important;
                width: 100% !important;
                min-height: 100px !important;
                clear: none !important;
            }

            .resp-accordion-closed {
                display: none !important;
            }

            .resp-vtabs .resp-tab-content:last-child {
                border-bottom: 1px solid #000000 !important;
            }
            .resp-tab-content {
                padding: 15px !important;
            }
        }
    </style>
</main>