jQuery(document).ready(function () {
    "use strict";

    console.log('Welcome from wordpress');


    $(function() {
        $('.box').matchHeight({
            byRow: true,
            property: 'height',
            remove: false
        });
    });

    $(function() {
        $('.blue-block').matchHeight({
            byRow: true,
            property: 'height',
            remove: false
        });
    });

    $(function() {
        $('.single-service').matchHeight({
            byRow: true,
            property: 'height',
            remove: false
        });
    });

    $('.grid').isotope({
        itemSelector: '.box',
        percentPosition: true,

    })

    $(".owl-carousel.owl-thumbs").owlCarousel({
        items   : 3,
        margin  : 30,
        nav     : true,
        navText : ['', ''],
        dots    : false,
        loop    : false,
        responsive : {
            0: {
                items : 2
            },
            768: {
                items : 3
            },
            992: {
                items : 4
            }
        }
    });





});
