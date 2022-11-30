// ********* OWL CAROUSEL *********

$(document).ready(function() {

    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        loop: true,
        dots: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: false,
        animateOut: 'fadeOut'
    });

    //top sale owl carousel
    $("#top-ponuda .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    //New Procut owl carousel
    $("#new-product .owl-carousel").owlCarousel({
        loop: false,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    //Brand owl carousel
    $("#brand .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    });


    let $qtyUp = $(".qty .qty-up");
    let $qtyDown = $(".qty .qty-down");
    //let $input = $(".qty .qty-input");

    // click event
    $qtyUp.click(function(e) {
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if ($input.val() >= 1 && $input.val() <= 9) {
            $input.val(function (i, oldval) {
                return ++oldval;
            });
        }
    });

    $qtyDown.click(function (e) {
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if ($input.val() > 1 && $input.val() <= 10) {
            $input.val(function (i, oldval) {
                return --oldval;
            });
        }
    });



})


// isotop filter

var $grid = $(".grid").isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
})

var filterKategorija;
var filterBrend;

$('select.kategorija-group').click(function() {
    filterKategorija = "";
    if ($(this).data('clicks') == 1) {
        console.log('Selected Option: ' + $(this).val());
        filterKategorija += $(this).val();
        $(this).data('clicks', 0);
    } else {
        console.log('first click');
        $(this).data('clicks', 1);
    }

    $grid.isotope({ filter: filterKategorija });

});

$('select.click_option').focusout(function() {
    $(this).data('clicks', 0);
});


// filter product on button clikc
$(".button-group").on("click", "input", function() {
    filterBrend = filterKategorija + $(this).attr("data-filter");
    console.log(filters);
    $grid.isotope({ filter: filterBrend });
})



// flatten object by concatting values
function concatValues(obj) {
    var value = '';
    for (var prop in obj) {
        value += obj[prop];
    }
    return value;
}


// Product qty section

