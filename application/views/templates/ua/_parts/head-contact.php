<meta name="keywords" content="Thời trang cho bé, thoi trang cho be, Đầm cho bé gái, Dam cho be gai">
<meta name="description" content="Thời trang cho bé, thoi trang cho be, Đầm bé gái, Dam be gai">
<title><?php echo isset($title_page)?$title_page:'Thời Trang Cho Bé' ?> | Cherryfashion</title>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCSOZFXJu7gd1yWU4nLxqWolbn6d__-n8Q"></script>
<script type="text/javascript">
    var gmap = new google.maps.LatLng(10.7551939,106.625311);
    var marker;
    function initialize()
    {
        var mapProp = {
            center:new google.maps.LatLng(10.7551939,106.623231),
            zoom:16,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map=new google.maps.Map(document.getElementById("googleMap")
            ,mapProp);

        var styles = [
            {
                featureType: 'road.arterial',
                elementType: 'all',
                stylers: [
                    { hue: '#fff' },
                    { saturation: 100 },
                    { lightness: -48 },
                    { visibility: 'on' }
                ]
            },{
                featureType: 'road',
                elementType: 'all',
                stylers: [

                ]
            },
            {
                featureType: 'water',
                elementType: 'geometry.fill',
                stylers: [
                    { color: '#adc9b8' }
                ]
            },{
                featureType: 'landscape.natural',
                elementType: 'all',
                stylers: [
                    { hue: '#809f80' },
                    { lightness: -35 }
                ]
            }
        ];

        var styledMapType = new google.maps.StyledMapType(styles);
        map.mapTypes.set('Styled', styledMapType);

        marker = new google.maps.Marker({
            map:map,
            draggable:true,
            animation: google.maps.Animation.DROP,
            position: gmap
        });
        google.maps.event.addListener(marker, 'click', toggleBounce);
    }

    function toggleBounce() {

        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
