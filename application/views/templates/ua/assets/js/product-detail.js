/**
 * @fileOverview  Js for home page
 *
 */

$(document).ready(function() {
    // Add data for search & register event
    Whl.UA.initData();

    $("#hightlight_tour ul").addClass("unordered-list");

    /*$('#uxPhysicalRating').click(function(){
     arguments[0].preventDefault();
     window.open('/html/common/en/pop_physical_rating.htm', 'caf', 'width=400,height=600,toolbar=1,status=1,scrollbars=1,location=1');
     return false;
     });
     $('#uxCultureRating').click(function(){
     arguments[0].preventDefault();
     window.open('/html/common/en/pop_culture_rating.htm', 'caf', 'width=400,height=600,toolbar=1,status=1,scrollbars=1,location=1');
     return false;
     });*/
    $('#uxAdventureRating').click(function(){
        arguments[0].preventDefault();
        window.open(this.href, 'caf', 'width=400,height=600,toolbar=1,status=1,scrollbars=1,location=1');
        return false;
    });
    $('#cancel-policy-dlg').dialog({
        bgiframe: false,
        autoOpen: false,
        height: 'auto',
        width: 500,
        modal: false,
        buttons:{
            Close: function(){
                $(this).dialog('close');
            }
        }
    });
    $('#cancel-policy-lnk').click(function(){
        arguments[0].preventDefault();
        $('#cancel-policy-dlg').dialog('open');
        return false;
    });
    if (error!=0)
        Whl.Dialog.msg({title: Message.dlg.title5, msg: 'Message: '+Message[error], remove: true, callback:function(){}});
    //alert("Error code: "+error.toString()+"\r\nMessage: "+Message[error]);
    /*$('#popup').dialog({
     bgiframe: true,
     autoOpen: false,
     width: 292,
     height: 381,
     modal: true,
     open: function(){new Whl.UA.AlmPopup(alm.almUrl, alm.allotment, alm.childPolicy);},
     buttons: {
     "view cancellation policy" : function(){$('#cancel-policy-dlg').dialog('open');},
     "Book now": function(){$('#submitBooking-popup').click();}
     }
     });*/
    if(isPopup){
        //$('#popup').dialog('open');
        new Whl.UA.AlmPopup(alm.almUrl, alm.allotment, alm.childPolicy);
        $('#cancel-policy-lnk-popup').click(function(){
            arguments[0].preventDefault();
            $('#cancel-policy-dlg').dialog('open');
            return false;
        });

    }

    /**
     * Event when more feedback click
     */
    $('#show-feedback').click(function() {
        if($(this).hasClass('more-feedback')) {
            $('.show-more-feedback').css({'display': 'block'});
            $('#show-feedback').attr('title', 'show less feedbacks');
            $(this).removeClass('more-feedback').addClass('less-feedback').css({'margin-left': '400px'}).text('show less');
        } else if($(this).hasClass('less-feedback')) {
            $('.show-more-feedback').css({'display': 'none'});
            $('#show-feedback').attr('title', 'show more feedbacks');
            $(this).removeClass('less-feedback').addClass('more-feedback').css({'margin-left': '375px'}).text('more feedbacks');
        }
    });

    /**
     * new template
     */
    var popupCfg = "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600";

    $('a.fbshare').click(function () {
        window.open(this.href, '', popupCfg);
        arguments[0].preventDefault();
    });

    $('a.tweet').click(function () {
        window.open(this.href, '', popupCfg);
        arguments[0].preventDefault();
    });

    $('a.gplus').click(function () {
        window.open(this.href, '', popupCfg);
        arguments[0].preventDefault();
    });

    $('a.pinit').click(function () {
        var win = window.open('about:blank', '', popupCfg);

        var tpl = '<a href="https://www.pinterest.com/pin/create/button/'+
            '?url={link}&media=http:{media}&description=I%27m+putting+this+Urban+Adventures+tour+on+my+travel+wish+list.+Who%27s+in%3F%21+Let%27s+go+local.+%23UrbanAdventures">'+
            '<img src="{media}" width="47%" style="float:left;margin:3px;" />'+
            '</a>';

        $('.gallery-tile').each(function () {
            var rel = '//' + document.domain + jQuery(this).attr('rel');
            var t = tpl.replace(/\{media\}/g, rel);
            t = t.replace(/\{link\}/g, location);
            t = t.replace(/\{desc\}/g, '');
            win.document.write(t);
        });
        /*
         var s = '<script type="text/javascript" async defer  data-pin-color="red" data-pin-height="28"'+
         ' data-pin-hover="true" src="https://assets.pinterest.com/js/pinit.js"></script>';
         win.document.write(s);
         */
        arguments[0].preventDefault();
    });

    // Create Alm Object
    new Whl.UA.Alm(alm.almUrl, alm.allotment, alm.childPolicy, alm.startDate, tour_gmin, tour_gmax, tour_type);


    var priceAdultsDiscount = $("#price-adults-discount").html();
    var priceChildrenDiscount = $("#price-children-discount").html();
    $('#price-adults').bind("DOMSubtreeModified",function(){
        var a = parseInt($("#no-adults").val());
        $("#price-adults-discount").html((a*priceAdultsDiscount).toFixed(2));
    });
    $('#price-children').bind("DOMSubtreeModified",function(){
        var a = parseInt($("#no-children").val());
        $("#price-children-discount").html((a*priceChildrenDiscount).toFixed(2));
    });

    var a = parseInt($("#no-children").val());
    $("#price-children-discount").html((a*priceChildrenDiscount).toFixed(2));

    $("#ui-id-1").html('<img alt="logo" src="/images/en/UA-primary_no-tag_REV.png" />');
    $(".ui-dialog-titlebar").css({'background-color':"#c03"});
    $(".ui-dialog-titlebar-close").css({'outline':'0px'});
    $(".ui-icon-closethick").text('x');
    $(".ui-icon-closethick").css({'display':'block','line-height':'16px','background-color':"#c03"});
    $(".ui-icon-closethick").removeClass('ui-icon');
    $(".ui-button-text-only").addClass('button button-wide');

    if (parseInt(tour_type) == 1) {


    }
    if (parseInt(tour_type) != 0) {
        /*$("#no-adults").val(tour_gmin);
         $("#no-adults option").each(function(i){
         if (i+1 < parseInt(tour_gmin)) {
         $(this).hide();
         }
         });*/
        var minGroup = parseInt($("#no-adults option:first-child").val());
        if ( minGroup > 1 ) {
            $("#no-adults option:first-child").text('1 - ' + minGroup);
        }
        $(".adults p:first-child").text('Number of Travellers');
        $(".adults p:last-child").removeClass('align-center');
        $(".children").hide();

    }
    $("#departure-time").val($("#departure-time option:first").val());

    Photoswipe();

});

// function to zoom image mobile
function Photoswipe(){
    var $pswp = $('.pswp')[0];
    var image = [];

    $('.pictures').each( function() {
        var $pic     = $(this),
            getItems = function() {
                var items = [];
                $pic.find('a').each(function() {
                    var $href   = $(this).attr('href'),
                        $size   = $(this).data('size').split('x'),
                        $width  = $size[0],
                        $height = $size[1];

                    var item = {
                        src : $href,
                        w   : $width,
                        h   : $height
                    }

                    items.push(item);
                });
                return items;
            }
        var items = getItems();

        /* $.each(items, function(index, value) {
         image[index]     = new Image();
         image[index].src = value['src'];
         });*/

        $pic.on('click', 'li', function(event) {
            event.preventDefault();

            var $index = $(this).index();
            var options = {
                index: $index-3,
                bgOpacity: 0.7,
                showHideOpacity: true
            }

            var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
            lightBox.init();
        });

    });
}
//2679
function checkoutTour(){
    $totalprice = 0;
    if($('#Price').val() > 0){$totalprice += $('#ExPrice').val()*$('#no-adults').val();}
    if($('#ChildPrice').val() > 0 && $('#ChildPolicy').val() == 1){$totalprice += $('#ExChildPrice').val()*$('#no-children').val();}
    $totalprice = Math.round($totalprice* 100)/100;
    if ($totalprice <= 0){
        alert("Tour not avalible, please choose diffirent tour.");
        return;
    } else {
        var baseUrl = '/';
        window.location.href = baseUrl+"giftcert_checkout?tourid="+$('#tour-id').val()+"&no-adult="+$('#no-adults').val()+"&no-child="+$('#no-children').val();
    }

}

