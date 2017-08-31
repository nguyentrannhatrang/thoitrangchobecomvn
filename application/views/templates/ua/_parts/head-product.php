<meta name="keywords" content="<?= isset($keywords) && $keywords ?$keywords:$product_name ?>">
<meta name="description" content="<?= isset($description) && $description ?$description:$product_name ?>">
<title><?= $product_name ?> | Thời Trang Cho Bé</title>
<meta property="og:title"              content="<?= $product_name ?>" />
<meta property="og:description"        content="<?= isset($description) && $description ?$description:$product_name ?>" />

<!--<link href="--><?//= base_url('templatecss/product.css') ?><!--" rel="stylesheet">-->
<style type="text/css">
    <?php
    echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/application/views/templates/ua/assets/css/product.css');
    ?>
</style>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//fonts.googleapis.com/css?family=Fjalla+One|Open+Sans:600,400,300" rel="stylesheet" type="text/css">
