/**
 * @fileOverview  Js for home page
 *
 */
var home = {
    initialize: function(path, data) {
        this._path = path;
        this._data = data;
        this._img = $('#img-whathot');
        this._trips = $('#hot-trip');
        this._prices = $('#hot-trip-price');
        this._dest = $('#whats-hot-dest');
        //if (1 >= this._data.length) return;
        var images = this._preloadImages();
        if (images.length > 0) {
            this.run(images); // show hot trips of first destination
            if( this._data.length > 1) setInterval(this.run.bind(this, images), 5000);
        }
    },
    run: function(images) {
        var randImg = Whl.rand(this._data.length - 1);
        var dest = this._data[randImg], tripList = '', tripPrice = '';
        /*for (var key in dest.tours) {
         tripList += '<a href="' + dest.tours[key].url + '">' + dest.tours[key].name + '</a><br/>';
         var price = tourPrices[dest.tours[key].tourId];
         if( price.Price !== null ) tripPrice += currency + ' ' + CalculatePrice(price.Price,price.LocalCurrency) + '<br/>';
         }*/
        this._trips.html(tripList);
        this._prices.html(tripPrice);
        this._img.attr('src', images[randImg].src);
        this._img.attr('alt', images[randImg].alt);
        this._img.attr('title', images[randImg].title);
        this._dest.html(dest.destName);
    },
    _preloadImages: function() {
        var images = [];
        var rotator = this;
        $.each(this._data, function(i) {
            images[i] = new Image();
            if (Object.isObject(this)) {
                images[i].src = rotator._path + this.photoName;
                images[i].alt = this.photoAlt;
                images[i].title = this.photoAlt;
            }
        });
        return images;
    }
};
$(document).ready(function() {
    // Add data for search & register event
    Whl.UA.initData();
    // Rotate the hot image
    //new Whl.UA.ImageRotator(pathPrefix, hotImages, 'img-whathot');
    //home.initialize(pathPrefix, hotTrips );
    // show prices
    //ShowPrices();
    // Add events for getting more detail content
    Whl.getMore();
    $("#cont_right .menu_emb ul>li:first").css('background', 'none');
    $('.home-page .sections .tab').click(function () {
        var element = $(this).find('a').attr('href');
        if(element){
            $('.sections section.site-section').removeClass('active');
            $(element).addClass('active');
        }
    })
});

function ShowPrices(){
    $(".tour_currency").html(currency);
    $.each(tourPrices,function(tourId, price){
        if( price.Price !== null ){
            $("#trip_price_" + tourId).html(CalculatePrice(price.Price, price.LocalCurrency));
            $("#trip_price_" + tourId).closest('span.tour_price').show();
        }
    })
}

function CalculatePrice(price, localCurrency){
    price = price*(currencyRate/parseFloat(exchangeRates[localCurrency]));
    price = price.toFixed(2);
    price = AddCommas(price);
    return price;
}

function AddCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

