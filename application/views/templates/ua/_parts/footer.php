<?php $this->view('templates/ua/_parts/cart-content');?>
<div id="overlay-two" class="overlay"></div>
<!-- chat face -->
<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<style>#cfacebook{position:fixed;bottom:0px;right:20px;z-index:999999999999999;width:250px;height:auto;border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}#cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}#cfacebook .fchat .fb-page{margin-top:-130px;float:left;}#cfacebook a.chat_fb{float:left;padding:0 25px;width:250px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}#cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}</style>

<div id="cfacebook">
    <a href="javascript:;" class="chat_fb" onclick="return false;"><i class="fa fa-facebook-square"></i>Chat Facebook</a>
    <div class="fchat">
        <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/cherryfashion.vn" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
    </div>
</div>
--><!-- chat face -->
<br style="clear: both"/>
<div id="chat-box-message">
    <a class="button-toggle right" href="#">
        Inbox chúng tôi
        <span class="icon-support"></span>
    </a>
    <div class="chat-main" style="display: none;">
        <div class="fb-page"
             data-href="https://www.facebook.com/cherryfashion.vn/"
             data-tabs="messages"
             data-width="400"
             data-height="300"
             data-small-header="true">
            <div class="fb-xfbml-parse-ignore">
                <blockquote></blockquote>
            </div>
        </div>
    </div>
</div>
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
<!--
<div class="fb-page"
     data-href="https://www.facebook.com/nguyentrannhatrang1987/"
     data-tabs="messages"
     data-width="400"
     data-height="300"
     data-small-header="true">
    <div class="fb-xfbml-parse-ignore">
        <blockquote></blockquote>
    </div>
</div>
-->

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
</body>
</html>