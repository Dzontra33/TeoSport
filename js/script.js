// ********* OWL CAROUSEL *********

$(document).ready(function () {

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
                items: 2,
                nav: false
            },
            600: {
                items: 3,
                nav: false

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
    let $deal_price = $("#deal-price");
    let $deal_price_final = $("#deal-price-final");
    //let $input = $(".qty .qty-input");

    // click event
    $qtyUp.click(function(e) {

        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        //change product price using ajax
        $.ajax({
            url: "template/ajax.php", type: 'post', data: { itemid: $(this).data("id") }, success: function (result) { 
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];
                let item_price_new = obj[0]['item_price_new'];

                if ($input.val() >= 1 && $input.val() <= 9) {
                    $input.val(function (i, oldval) {
                        return ++oldval;
                    });
                    // increase price of the product
                    if (item_price_new == null) {

                        $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    } else {
                        $price.text(parseInt(item_price_new * $input.val()).toFixed(2));
                    }
                    
                    // set subtotal price
                    if (item_price_new == null) {

                        let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                        $deal_price.text(subtotal.toFixed(2));
                        let subtotal_final = parseInt($deal_price_final.text()) + parseInt(item_price);
                        $deal_price_final.text(subtotal_final.toFixed(2));
                        
                    }else{
                        let subtotal = parseInt($deal_price.text()) + parseInt(item_price_new);
                        $deal_price.text(subtotal.toFixed(2));
                        let subtotal_final = parseInt($deal_price_final.text()) + parseInt(item_price_new);
                        $deal_price_final.text(subtotal_final.toFixed(2));
                    }
                    

                }
            }});// closing ajax    
    });// closing qty up button



    $qtyDown.click(function (e) {
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({
            url: "template/ajax.php", type: 'post', data: { itemid: $(this).data("id") }, success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];
                let item_price_new = obj[0]['item_price_new'];

                if ($input.val() > 1 && $input.val() <= 9) {
                    $input.val(function (i, oldval) {
                        return --oldval;
                    });


                    // increase price of the product
                    if (item_price_new == null) {

                        $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    } else {
                        $price.text(parseInt(item_price_new * $input.val()).toFixed(2));
                    }

                    // set subtotal price
                    if (item_price_new == null) {

                        let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                        $deal_price.text(subtotal.toFixed(2));
                        let subtotal_final = parseInt($deal_price_final.text()) - parseInt(item_price);
                        $deal_price_final.text(subtotal_final.toFixed(2));

    

                    } else {
                        let subtotal = parseInt($deal_price.text()) - parseInt(item_price_new);
                        $deal_price.text(subtotal.toFixed(2));
                        let subtotal_final = parseInt($deal_price_final.text()) - parseInt(item_price_new);
                        $deal_price_final.text(subtotal_final.toFixed(2));
                        
                    }
                }

            }
        }); // closing ajax request
    }); // closing qty down button





})





