


(function($) {
    $(document).ready(function() {








    /* IF YOU WANT TO APPLY SOME BASIC JQUERY TO REMOVE THE VIDEO BACKGROUND ON A SPECIFIC VIEWPORT MANUALLY
     var is_mobile = false;
    if( $('.player').css('display')=='none') {
        is_mobile = true;
    }
    if (is_mobile == true) {
        //Conditional script here
        $('.big-background, .small-background-section').addClass('big-background-default-image');
    }else{
        $(".player").mb_YTPlayer();
    }
    });
*/
    /*  IF YOU WANT TO USE DEVICE.JS TO DETECT THE VIEWPORT AND MANIPULATE THE OUTPUT  */

        //Device.js will check if it is Tablet or Mobile - http://matthewhudson.me/projects/device.js/
        if (!device.tablet() && !device.mobile()) {
            $(".player").mb_YTPlayer();
        } else {
            //jQuery will add the default background to the preferred class
            $('.video-background').addClass(
                'video-background-default-image');
        }


    });
})(jQuery);





function initialize() {

    var coordenadas = new google.maps.LatLng( 	40.4234963,  	-3.7002515);

    var colores = [
        {
          featureType: "all",
          elementType: "all",
          stylers: [
            { saturation: -100 }
          ]
        }
    ];

    var opciones = {
        zoom: 16,
        center: coordenadas,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var mapa = new google.maps.Map(document.getElementById('mi-mapa'), opciones);

    var estilo = new google.maps.StyledMapType(colores);
    mapa.mapTypes.set('mapa-bn', estilo);
    mapa.setMapTypeId('mapa-bn');


    var marcador = new google.maps.Marker({
        position: coordenadas,
        map: mapa,
        icon: 'img/icono.ico'
    });


}

google.maps.event.addDomListener(window, 'load', initialize);

function changeAkanicula(){
   location.assign("./knicula.html");
}
