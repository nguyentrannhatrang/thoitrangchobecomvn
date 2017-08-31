<?php $this->view('templates/ua/_parts/cart-content');?>
<div id="overlay-two" class="overlay"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '434363263629006',
            xfbml      : true,
            version    : 'v2.6'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<?php if(isset($page_name) && ($page_name == 'checkout' || $page_name == 'product')){ ?>
    <script defer type="text/javascript" src="<?= base_url('templatejs/'.$page_name.'.min.js') ?>"></script>
<?php }else {?>
    <script defer  type="text/javascript" src="<?= base_url('templatejs/home.min.js') ?>"></script>
<?php } ?>
<script>
    <?php if(isset($listProductName)){?>
    var availableTags = [
    <?= $listProductName ?>
    ];
    <?php } else {?>
    var availableTags = [];
    <?php } ?>
</script>
<script src="https://uhchat.net/code.php?f=7d04a7"></script>
</body>
</html>