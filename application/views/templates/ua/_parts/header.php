<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index,follow">
    <link rel="shortcut icon" type="image/png" href="/assets/images/ua/favicon.png">
    <meta property="og:image" content="http://www.urbanadventures.comhttps://media-cdn.urbanadventures.com/data/0/dest_0/c-fakepath-krakow-1-980x400.jpg">
    <meta itemprop="og:image" content="http://www.urbanadventures.comhttps://media-cdn.urbanadventures.com/data/0/dest_0/c-fakepath-krakow-1-980x400.jpg">
    <meta itemprop="image" content="http://www.urbanadventures.comhttps://media-cdn.urbanadventures.com/data/0/dest_0/c-fakepath-krakow-1-980x400.jpg">

    <?php if(isset($page_name)){ ?>
        <?php $this->view('templates/ua/_parts/head-'.$page_name,array()); ?>
    <?php }else{ ?>
        <?php $this->view('templates/ua/_parts/head-home',array()); ?>
    <?php } ?>
    <?php if(isset($page_name) && $page_name !=' product'){ ?>
    <style type="text/css">
            <?php
            echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/application/views/templates/ua/assets/css/home.css');
            ?>
        </style>
    <?php } ?>

    <!-- End Visual Website Optimizer Asynchronous Code -->
</head>
<body>