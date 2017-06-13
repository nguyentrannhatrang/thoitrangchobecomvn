
<body>
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="booking-steps">
            <form id="frmCheckout" name="frmCheckout" action="" method="POST">
                <div id="booking-step-2" class="booking-step">
                    <div class="grid">
                        <div class="grid__item desk--eleven-twelfths">
                            <p id="uxLeadErrorInvalid" name="uxLeadErrorInvalid"></p>
                            <p id="uxLeadError"></p>
                            <h3 class="steps-heading spacer"><span class="step-number">1</span>Sản phẩm</h3>

                            <div class="booking-item large-spacer">
                                <div class="grid">
                                    <div class="grid__item three-tenths palm--one-whole">
                                        <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/xm-c-fakepath-12-lead.jpg');" class="booking-item-image"></div>
                                    </div>
                                    <div class="grid__item seven-tenths palm--one-whole">
                                        <div class="combo reversed">
                                            <div class="combo-first">
                                                <h5>This is Aperitivo!</h5>
                                            </div>
                                            <div class="combo-last"><span class="price">USD 88.46</span></div>
                                        </div><span class="location">Cinque Terre, Italy</span><span class="date small-spacer">15 Jun 2017</span><span class="pickup">Pick-up time: 5.30 PM</span><span class="duration">Duration: 2 hours</span><span class="group">1 Adult </span><a href="javascript:RemoveBkItem('0');">[Remove]</a>
                                    </div>
                                </div>
                            </div>
                            <a id="subtotal"></a>
                            <div class="booking-item large-spacer">
                                <div class="grid">
                                    <div class="grid__item one-quarter"></div>
                                    <div class="grid__item three-quarters">
                                        <div class="sub-total">
                                            <p class="title">Subtotal:<span class="price"> USD 88.46</span></p>
<!--                                            <p class="conditions">NOTE: Prices above include all applicable taxes and service charge</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="booking-step-3" class="booking-step">
                    <div class="grid">
                        <div class="grid__item eleven-twelfths palm--one-whole">
                            <h3 class="steps-heading spacer"><span class="step-number">2</span>Thông tin khách hàng</h3>
                            <div class="grid grid--wide">
                                <div class="grid__item one-half palm--one-whole">
                                    <p id="uxLeadError"></p>
                                    <p id="uxLeadErrorInvalid" name="uxLeadErrorInvalid"></p>
                                    <div class="form-item-group combo">
                                        <div class="combo-first">
                                            <label for="form-lastname">(*) Họ và tên</label>
                                        </div>
                                        <div class="combo-last">
                                            <input value="" name="name" id="billing_name" class="spacer form-input require">
                                        </div>
                                    </div>
                                    <div class="form-item-group combo">
                                        <div class="combo-first">
                                            <label for="form-lastname">(*) Địa chỉ</label>
                                        </div>
                                        <div class="combo-last">
                                            <input value="" name="address" id="billing_address_1" class="spacer form-input require">
                                        </div>
                                    </div>
                                    <div class="form-item-group combo">
                                        <div class="combo-first">
                                            <label for="form-mobile">(*) Điện thoại</label>
                                        </div>
                                        <div class="combo-last">
                                            <input  value="" name="phone" id="billing_phone"  class="spacer form-input require">
                                        </div>
                                    </div>
                                    <div class="form-item-group combo">
                                        <div class="combo-first">
                                            <label for="form-email">(*) Email</label>
                                        </div>
                                        <div class="combo-last">
                                            <input name="email" id="billing_email" value="" class="spacer form-input require">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__item one-half palm--one-whole">
                                    <label for="form-additionalrequest">Yêu cầu</label>
                                    <textarea id="uxBkRequest" rows="9" name="message" class="small-spacer form-textarea"></textarea><span class="required-fields-notice">(*) bắt buộc nhập</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="booking-step-4" class="booking-step">
                    <div class="grid">
                        <div class="grid__item eleven-twelfths palm--one-whole">
                            <h3 class="steps-heading spacer"><span class="step-number">3</span>Điều khoản và điều kiện</h3>
                            <div class="grid spacer">
                                <div class="grid__item one-whole">
                                    <div class="combo">
                                        <div class="combo-first">
                                            <div class="form-checkbox">
                                                <input id="uxTermCheck" type="checkbox" name="terms" value="accept">
                                                <label for="uxTermCheck"></label>
                                            </div>
                                        </div>
                                        <div class="combo-last"><a id="terms_conditions" href="javascript:void(0)" class="terms-and-conditions small-spacer">Terms & Conditions of Booking, Payment, and Cancellations</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid--center">
                        <input id="btnBack" type="button" value="Về giỏ hàng" rel="/shopping-cart">
                        <input id="btnSubmit" type="submit" value="Đặt hàng">
                        <input id="act" type="hidden" name="act" value="checkout">
                        <input id="idx" type="hidden" name="idx">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>