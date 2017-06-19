<body>
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="contact-page">
            <div class="grid">
                <div class="grid__item one-whole">
                    <div class="column grid__item">
                        <strong>THÔNG TIN LIÊN HỆ</strong>
                        <ul>
                            <li><strong>Email:</strong><br/> thoitrangchobe.store@gmail.com</li>
                            <li><strong>Số điện thoại:</strong><br/> <a href="tel:0969188827">0969188827</a></li>
                            <li><strong>Địa chỉ:</strong><br/> 269/12B11 Bà Hom P.13 Q.6 TP.HCM</li>
                            <li><strong>Facebook:</strong><br/> <a target="_blank" href="https://facebook.com/cherryfashion.vn">facebook.com/cherryfashion.vn</a></li>
                        </ul>
                    </div>
                    <div class="map" id="map">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>
<script>
    function initMap() {
        var uluru = {lat: 10.7557431, lng: 106.6254287};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSOZFXJu7gd1yWU4nLxqWolbn6d__-n8Q&callback=initMap">
</script>