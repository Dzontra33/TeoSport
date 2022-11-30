<!-- Shopping Cart -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h3 class="font-rubik text-uppercase">Vaša korpa</h3>

        <!-- shopping cart items -->
        <div class="row">
            <!-- product list-->
            <div class="col-xl-9 col-lg-12 text-center py-2">
                <!-- Not found cart-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12">
                        <img src="./assets/img/empty_cart.png" alt="Empty Cart" class="img-fluid " style="height:200px;">
                        <p class="font-baloo font-size-16 text-black-50">Empty Cart</p>
                    </div>
                </div>

            </div>
            <!-- !product list-->

            <!-- subtotal section -->
            <div class="col-xl-3 col-lg-12">
                <div class="sub-total border mt-2 text-center">
                    <h4 class="font-baloo py-3 px-3 text-start">Pregled narudžbine:</h6>

                        <div class="d-flex bd-highlight mb-2 px-3">
                            <h5 class="me-auto bd-highligh font-baloo font-size-20">Cena:</h5>
                            <h5 class="bd-highlight text-dark" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0 ?></h5>
                            <h5 class="bd-highlight text-dark">&nbsp;RSD</h5>
                        </div>
                        <div class="d-flex justify-content-between px-3">
                            <h5 class="font-baloo font-size-20">+ Cena dostave:&nbsp;<span class="text-danger"></h5>
                            <h5 class="text-success"> FREE</span> </h5>
                        </div>
                        <hr>
                        <div class="d-flex bd-highlight mb-3 px-3">
                            <h5 class="me-auto bd-highligh font-baloo font-size-20">Ukupna cena:</h5>
                            <h5 class="bd-highlight text-dark" id="deal-price-final"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0 ?></h5>
                            <h5 class="bd-highlight text-dark">&nbsp;RSD</h5>
                        </div>
                        <div class="pb-4">
                            <button type="submit" class="btn btn-danger text-uppercase mt-2 rounded-0">Potvrdi narudžbinu</button>

                        </div>
                </div>
            </div>
            <!-- !subtotal section -->


        </div>

        <!-- !shopping cart items -->

    </div>



</section>
<!-- !Shopping Cart -->