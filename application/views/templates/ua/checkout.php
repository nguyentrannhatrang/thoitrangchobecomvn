<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="booking-steps">
            <form id="frm-checkout" name="frm-checkout" method="POST" class="checkout" action="/checkout" enctype="multipart/form-data">
                <div id="booking-step-2" class="booking-step">
                    <div class="grid">
                        <div class="grid__item desk--eleven-twelfths">
                            <p id="uxLeadErrorInvalid" name="uxLeadErrorInvalid"></p>
                            <p id="uxLeadError"></p>
                            <h3 class="steps-heading spacer"><span class="step-number">1</span>Sản phẩm</h3>
                            <div class="booking-item large-spacer">
                                <?php foreach ($data_carts as $data_cart){ ?>
                                    <?php foreach ($data_cart as $sizeCode=>$item) {?>
                                        <div class="grid">
                                            <div class="grid__item three-tenths palm--one-whole">
                                                <div style="background-image: url('<?= base_url('/attachments/shop_images/'.$item['image'])?>');" class="booking-item-image"></div>
                                            </div>
                                            <div class="grid__item seven-tenths palm--one-whole">
                                                <div class="combo reversed">
                                                    <div class="combo-first">
                                                        <h5 class="item-product-name"><a href="<?= $item['link']?>"><?= $item['name']?></a></h5>
                                                        <div>Size: <?= $item['size']?></div>
                                                        <div>Đơn giá: <?= number_format($item['price'], 0, '', '.') ?> đồng</div>
                                                        <div>Số lượng: <?= $item['quantity']?> sản phẩm</div>
                                                    </div>
                                                    <div class="combo-last"><span class="price"><?= number_format($item['price'] * $item['quantity'], 0, '', '.') ?> đồng</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <a id="subtotal"></a>
                            <div class="booking-item large-spacer">
                                <div class="grid">
                                    <div class="grid__item one-quarter"></div>
                                    <div class="grid__item three-quarters">
                                        <div class="sub-total">
                                            <p class="title">Tổng tiền: <span class="price"><?= number_format($summary['total'], 0, '', '.') ?> đồng</span></p>
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
                                    <p id="uxLeadErrorInvalid"></p>
                                    <div class="form-item-group combo">
                                        <div class="combo-first">
                                            <label for="billing_name">(*) Họ và tên</label>
                                        </div>
                                        <div class="combo-last">
                                            <input value="" name="name" id="billing_name" class="spacer form-input require">
                                        </div>
                                    </div>
                                    <div class="form-item-group combo">
                                        <div class="combo-first">
                                            <label for="billing_address_1">(*) Địa chỉ</label>
                                        </div>
                                        <div class="combo-last">
                                            <input value="" name="address" id="billing_address_1" class="spacer form-input require">
                                        </div>
                                    </div>
                                    <div class="form-item-group combo">
                                        <div class="combo-first">
                                            <label for="billing_phone">(*) Điện thoại</label>
                                        </div>
                                        <div class="combo-last">
                                            <input  value="" name="phone" id="billing_phone"  class="spacer form-input require">
                                        </div>
                                    </div>
                                    <div class="form-item-group combo">
                                        <div class="combo-first">
                                            <label for="billing_email">(*) Email</label>
                                        </div>
                                        <div class="combo-last">
                                            <input name="email" id="billing_email" value="" class="spacer form-input require">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__item one-half palm--one-whole">
                                    <label for="uxBkRequest">Yêu cầu</label>
                                    <textarea id="uxBkRequest" rows="9" name="message" class="small-spacer form-textarea"></textarea><span class="required-fields-notice">(*) bắt buộc nhập</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="booking-step-4" class="booking-step">
                    <div class="grid--center">
                        <input id="btnBack" type="button" value="Về giỏ hàng">
                        <input id="place_order" type="submit" value="Đặt hàng">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>