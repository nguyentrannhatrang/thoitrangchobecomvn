<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" type="image/png" href="/assets/images/ua/favicon.png">
    <meta property="og:site_name" content="THỜI TRANG CHO BÉ" />
    <?php if(isset($page_name)){ ?>
        <?php $this->view('templates/ua/_parts/head-'.$page_name,array()); ?>
    <?php }else{ ?>
        <?php $this->view('templates/ua/_parts/head-home',array()); ?>
    <?php } ?>
    <?php if((isset($page_name) && $page_name !='product') || !isset($page_name)){ ?>
    <style type="text/css">
            <?php
            echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/application/views/templates/ua/assets/css/home.css');
            ?>
        </style>
    <?php } ?>
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <!-- End Visual Website Optimizer Asynchronous Code -->
</head>
<body>
<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-100017136-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- End Google Analytics -->