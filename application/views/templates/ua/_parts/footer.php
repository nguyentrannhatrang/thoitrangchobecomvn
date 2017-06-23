<?php $this->view('templates/ua/_parts/cart-content');?>
<div id="overlay-two" class="overlay"></div>
<!--<div id="log-in-modal" class="modal"><a href="#" class="close-modal close-action">X</a>
    <div class="modal-header align-center">
        <h2>Log In</h2>
    </div>
    <div class="modal-content">
        <form id="uxLoginForm" method="POST" action="/traveller_corner/?cmd=traveller_loggin">
            <div class="form-inputs"><span id="uxEmailLoginInvalid" class="flash-notice align-center"></span>
                <div class="grid">
                    <div class="grid__item one-third">
                        <label for="uxEmailLogin">Email address</label>
                    </div>
                    <div class="grid__item two-thirds spacer">
                        <input id="uxEmailLogin" name="uxEmail" value="" class="form-input">
                    </div>
                    <div class="grid__item one-third">
                        <label for="uxRefNoLogin">Booking number</label>
                    </div>
                    <div class="grid__item two-thirds spacer">
                        <input id="uxRefNoLogin" name="uxRefNo" value="" class="form-input">
                    </div>
                    <div class="grid__item one-third">
                        <label for="uxRememberMe">Remember me</label>
                    </div>
                    <div class="grid__item two-thirds spacer form-checkbox">
                        <input id="uxRememberMe" type="checkbox" name="uxRememberMe" value="1">
                        <label for="uxRememberMe"></label>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="grid__item one-whole">
                    <div class="align-center small-spacer">
                        <input type="hidden" value="Login" name="act">
                        <input id="uxLogin" type="submit" value="Log in">
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
<div id="sign-up-modal" class="modal"><a href="#" class="close-modal close-action">X</a>
    <div class="modal-header align-center">
        <h2>Sign up</h2>
    </div>
    <div class="modal-content">
        <div class="align-right"><a href="#" class="action-link top">Already a member</a></div>
        <form>
            <div class="form-inputs"><span class="flash-notice align-center">This email/password combination is invalid.</span>
                <div class="grid">
                    <div class="grid__item one-third">
                        <label for="email">Email address</label>
                    </div>
                    <div class="grid__item two-thirds spacer">
                        <input id="email" class="form-input">
                    </div>
                    <div class="grid__item one-third">
                        <label for="password">Password</label>
                    </div>
                    <div class="grid__item two-thirds spacer">
                        <input id="password" type="password" class="form-input">
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="grid__item one-whole">
                    <div class="align-center small-spacer">
                        <input type="submit" value="Back" class="close-modal">
                        <input type="submit" value="Sign Up">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="forgot-password-modal" class="modal"><a href="#" class="close-modal close-action">X</a>
    <div class="modal-header align-center">
        <h2>Forgot password</h2>
    </div>
    <div class="modal-content">
        <form>
            <div class="form-inputs padding-20"><span class="flash-notice align-center">An email with a link to reset your password has been sent.</span>
                <div class="grid">
                    <div class="grid__item one-third">
                        <label for="email">Email address</label>
                    </div>
                    <div class="grid__item two-thirds spacer">
                        <input id="email" class="form-input">
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="grid__item one-whole">
                    <div class="align-center small-spacer">
                        <input type="submit" value="Back" class="close-modal">
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="newsletter-sign-up-modal" class="modal"><a href="#" class="close-modal close-action">X</a>
    <div class="modal-header align-center">
        <h2>Newsletter sign up</h2>
    </div>
    <div class="modal-content">
        <div class="modal-note align-center padding-10">
            <p>Sign up for our newsletter & get $10 off your first tour</p>
        </div>
        <form>
            <div class="form-inputs"><span class="flash-notice align-center hidden">This email/password combination is invalid.</span>
                <div class="grid">
                    <div class="grid__item one-third">
                        <label for="newsletter-email">Email address</label>
                    </div>
                    <div class="grid__item two-thirds spacer">
                        <input id="newsletter-email" class="form-input">
                    </div>
                    <div class="grid__item one-third">
                        <label for="newsletter-name">Name</label>
                    </div>
                    <div class="grid__item two-thirds spacer">
                        <input id="newsletter-name" class="form-input">
                    </div>
                    <div class="grid__item one-third">
                        <label for="newsletter-wheredoyoulive">Where do you live?</label>
                    </div>
                    <div class="grid__item two-thirds spacer">
                        <select id="newsletter-wheredoyoulive" class="form-select full-width">
                            <option>Winterfell</option>
                            <option>The Wall</option>
                        </select>
                    </div>
                    <div class="grid__item one-third">
                        <label for="newsletter-hearaboutus">How did you hear about us?</label>
                    </div>
                    <div class="grid__item two-thirds spacer">
                        <select id="newsletter-hearaboutus" class="form-select full-width">
                            <option>Word of mouth</option>
                            <option>The Working Group</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="grid__item one-whole">
                    <div class="align-center small-spacer">
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="thanks-sign-up" class="modal"><a href="#" class="close-modal close-action">X</a>
    <div class="modal-header align-center">
        <h2>Thanks for signing up</h2>
    </div>
    <div class="modal-content">
        <div class="modal-note align-center padding-40">
            <p>Congratulations, you just signed up for the Urban Adventures newsletter!</p>
        </div>
        <div class="grid">
            <div class="grid__item one-whole">
                <div class="align-center small-spacer"><a href="#" class="button close-modal">Back to Homepage</a></div>
            </div>
        </div>
    </div>
</div>-->

<!-- chat face -->
<div id="fb-root"></div>

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
<!-- chat face -->
<?php if(isset($page_name)){ ?>
    <script defer type="text/javascript" src="<?= base_url('templatejs/'.$page_name.'.min.js') ?>"></script>
<?php }else {?>
    <script defer  type="text/javascript" src="<?= base_url('templatejs/home.min.js') ?>"></script>
<?php } ?>
</body>
</html>