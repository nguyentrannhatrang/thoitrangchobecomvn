<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="Food tours, beer tours, street art tours, bike tours, kayak tours, and more! Book your perfect day in one of more than 150 cities around the world.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index,follow">

    <title>Urban Adventures | City Tours | Best. Day. Ever.</title>
    <link href="<?= base_url('templatecss/vendor.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('templatecss/thoitrangchobe.css') ?>">

    <!-- s-detail-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('templatecss/photoswipe.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('templatecss/default-skin.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('templatecss/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('templatecss/jquery.modal.min.css') ?>">
    <!-- e-detail-->

    <!--[if IE]><link rel="stylesheet" type="text/css" href="http://www.urbanadventures.com/css/ieonly-urbanadventures.css"><![endif]-->
    <!--[if IE 8]><link rel="stylesheet" type="text/css" href="http://www.urbanadventures.com/css/ie8only-urbanadventures.css"><![endif]-->
    <link href="//fonts.googleapis.com/css?family=Fjalla+One|Open+Sans:600,400,300" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="http://www.urbanadventures.com/images/en/favicon.png">
    <script src="<?= base_url('templatejs/vendor.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('templatejs/thoitrangchobe.min.js') ?>" type="text/javascript"></script>
    <script src="http://www.urbanadventures.com/data/global.js" type="text/javascript"></script>
    <script src="http://www.urbanadventures.com/css-js/app.min.js" type="text/javascript"></script>
    <!-- s-detail-->
    <script src="<?= base_url('templatejs/photoswipe.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('templatejs/photoswipe-ui-default.min.js') ?>" type="text/javascript"></script>
    <!-- e-detail-->
    <script>
        (function(a,b,c,d){
            a='//tags.tiqcdn.com/utag/intrepid/urbanadventures/prod/utag.js';
            b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;d.async=true;
            a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a);
        })();
    </script>
    <meta property="og:image" content="http://www.urbanadventures.comhttps://media-cdn.urbanadventures.com/data/0/dest_0/c-fakepath-krakow-1-980x400.jpg">
    <meta itemprop="og:image" content="http://www.urbanadventures.comhttps://media-cdn.urbanadventures.com/data/0/dest_0/c-fakepath-krakow-1-980x400.jpg">
    <meta itemprop="image" content="http://www.urbanadventures.comhttps://media-cdn.urbanadventures.com/data/0/dest_0/c-fakepath-krakow-1-980x400.jpg">
    <script type="text/javascript" src="//cdn.optimizely.com/js/3837813493.js"></script>
    <script type="text/javascript" src="<?= base_url('templatejs/home.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('templatejs/cart.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('templatejs/jquery.modal.min.js') ?>"></script>
    <script src="<?= base_url('templatejs/function.js') ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#subscribe-news-home').click(function(event) {
                event.preventDefault();
                if (!$('#news-email-home').val().isEmail()) {
                    Whl.Dialog.msg({title: Message.dlg.title2, msg: Message.errEmail, remove: true, callback: function() {$('#news-email-home').focus();}});
                } else {
                    $('#frm-subscribe-home').submit();
                }
            });
        });
    </script>
    <script type="application/ld+json">
      "@context": "http://schema.org",
      "@type": "WebSite",
      "url": "http://www.urbanadventures.com/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "http://www.urbanadventures.com/search?q={q}",
        "query-input": "required name=q"
      }

    </script>
    <!-- Start Visual Website Optimizer Asynchronous Code -->
    <script type="text/javascript">
        var _vwo_code=(function(){
            var account_id=228284,
                settings_tolerance=2000,
                library_tolerance=2500,
                use_existing_jquery=false,
                // DO NOT EDIT BELOW THIS LINE
                f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
    </script>
    <!-- End Visual Website Optimizer Asynchronous Code -->
</head>