<meta name="keywords" content="<?= isset($keywords) && $keywords ?$keywords:$product_name ?>">
<meta name="description" content="<?= isset($description) && $description ?$description:$product_name ?>">
<title><?= $product_name ?> | Thời Trang Cho Bé</title>
<meta property="og:title"              content="<?= $product_name ?>" />
<meta property="og:description"        content="<?= isset($description) && $description ?$description:$product_name ?>" />
<link rel="canonical" href="http://thoitrangchobe.com.vn/<?= $url_product?>" />
<meta property="og:url" content="http://thoitrangchobe.com.vn/<?= $url_product?>" />
<meta property="og:image" content="http://thoitrangchobe.com.vn/<?= $image_product?>" />
<!--<link href="--><?//= base_url('templatecss/product.css') ?><!--" rel="stylesheet">-->
<style type="text/css">
    <?php
    echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/application/views/templates/ua/assets/css/product.css');
    ?>
</style>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//fonts.googleapis.com/css?family=Fjalla+One|Open+Sans:600,400,300" rel="stylesheet" type="text/css">
<script type="application/ld+json">
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "<?= $product_name ?>",
      "url": "http://thoitrangchobe.com.vn/<?= $url_product?>",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "http://thoitrangchobe.com.vn/search?q={q}",
        "query-input": "required name=q"
      },
      "description": "<?= isset($description) && $description ?$description:$product_name ?>"
</script>