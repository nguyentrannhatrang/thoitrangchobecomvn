<body class="page-template-default page page-id-6 woocommerce-checkout woocommerce-page apwidget_title ">
<div id="page" class="hfeed site">

    <header id="mastheads" class="site-header headertwo" role="banner">

        <div class="before-top-header">
            <div class="ak-container clearfix">
            </div>
        </div>
        <div class="top-header clearfix">
            <div class="ak-container clearfix">

                <div id="site-branding" class="clearfix">
                    <a class="site-logo" href="http://thoitrangchobe.com.vn/">
                        <img src="http://jenscornershop.com.au/wp-content/uploads/2016/11/logo.png" alt=""/>
                    </a>
                    <a class="site-text" href="http://thoitrangchobe.com.vn/">
                        <h1 class="site-title"></h1>
                        <h2 class="site-description"></h2>
                    </a>
                </div><!-- .site-branding -->
                <div class="headertwo-wrap">
                    <!-- Cart Link -->
                    <?php $this->view('templates/corner/_parts/cart');?>
                    <!-- if enabled from customizer -->
                    <div class="search-form">
                        <form method="get" class="searchform" action="#" role="search">
                            <input type="text" name="s" value="" class="search-field" placeholder="Tìm kiếm" />
                            <input type="hidden" name="post_type" value="product">
                            <button type="submit" class="searchsubmit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
        <?php $this->view('templates/corner/_parts/menu',array('categories'=>$menu,'current_menu'=>$current_menu)); ?>
    </header><!-- #masthead -->

    <div id="content" class="site-content"><div class="page_header_wrap clearfix" style="background:url('http://jenscornershop.com.au/wp-content/themes/accesspress-store/images/about-us-bg.jpg') no-repeat center; background-size: cover;">
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="message error" style="display:block">
                    <p><?= $this->session->flashdata('error') ?></p>
                </div>
            <?php } ?>
            <div class="ak-container">
                <header class="entry-header">
                    <h2 class="entry-title">Liên hệ</h2>
                </header><!-- .entry-header -->
                <div id="accesspress-breadcrumb">
                    <a href="http://thoitrangchobe.com.vn">Trang chủ</a>  <span class="current">Liên hệ</span>
                </div>
            </div>
        </div>
        <div class="inner">
            <main id="main" class="site-main clearfix no-sidebar">
                <p class="text-5-desc"><strong>Email:</strong> info@jenscornershop.com.au</p>
                <p class="text-5-desc"><strong>Email:</strong> info@jenscornershop.com.au</p>
                <p class="text-5-desc"><strong>Email:</strong> info@jenscornershop.com.au</p>
                <p class="text-5-desc"><strong>Email:</strong> info@jenscornershop.com.au</p>
                <div class="map" id="map">

                </div>
            </main>
        </div>
    </div><!-- #content -->
    <script>
        function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSOZFXJu7gd1yWU4nLxqWolbn6d__-n8Q&callback=initMap">
    </script>