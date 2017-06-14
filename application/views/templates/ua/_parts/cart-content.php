<div id="popup_add_to_cart" style="display:none" class="">
    <h3>Giỏ hàng hiện có <span class="total-quantity"></span> sản phẩm:</h3>
    <div class="content">

    </div>
    <br style="clear: both"/>
    <div class="inform-total">
        <div class="label"><strong>Tổng tiền</strong></div>
        <div class="total price"><span class="price"></span></div>
    </div>
    <div class="inform-action">
        <div>
            <a href="/cart" class="go-to-cart">Giỏ hàng</a>
        </div>
        <div>
            <a href="/checkout" class="go-to-checkout">Đặt hàng</a>
        </div>

    </div>
    <!--<div style="display: none" id="row_in_cart">
        <div class="inform-content">
            <div class="product-name">
                <span class="product-detail-name">{{name-size}}</span>
                -  <span class="quantity">{{quantity}}</span> cái
            </div>
            <div class="product-price price">
                <span>{{price}}VND</span>
            </div>
        </div>
    </div>-->
    <div style="display: none" id="row_in_cart">
        <div class="inform-content">
            <div class="product-image">
                <img {{src}} />
            </div>
            <div class="product-price price">
                <h5>{{name-size}}</h5>
                <p>{{price-unit}} đồng x {{quantity}} cái</p>
                <strong>{{price}} đồng</strong>
            </div>
        </div>
    </div>
</div>