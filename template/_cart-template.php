<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-cart-submit'])) {
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }

    //add to wishlist
    if (isset($_POST['wishlist-submit'])) {
        $Cart->addToWishlist($_POST['item_id']);
    }
}

?>
<!--  ja sam peder arsen  -->
<!-- Shopping Cart -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h3 class="font-rubik text-uppercase">Vaša korpa</h3>

        <!-- shopping cart items -->
        <div class="row">
            <!-- product list-->
            <div class="col-xl-9 col-lg-12 col-sm-12">
                <?php
                foreach ($product->getData('cart') as $item) :
                    $cart = $product->getProductById($item['item_id']);
                    $subTotal[] = array_map(function ($item) {
                ?>
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3 mb-2">
                            <div class="col-xl-2 col-lg-4 col-md-6">
                                <img src="<?php echo $item['item_image']; ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                                <h5 class="font-baloo text-uppercase "><?php echo $item['item_name'] ?></h5>
                                <small class="text-uppercase color-pale">ŠIFRA PROIZVODA: CW4554-109</small>
                                <div class="d-flex">
                                    <!-- Product rating -->
                                    <div class="rating text-warning font-size-20">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <a href="" class="font-size-14 px-2">20.345 ratings</a>
                                    </div>
                                </div>
                                <!-- !Product rating -->

                                <!-- Product qty -->
                                <div class="qty d-flex pt-2 ">
                                    <div class="d-flex font-rale w-25 col-12 ">
                                        <button class="qty-up border bg-light p-1" data-id="<?php echo $item['item_id']; ?>" type="button"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="<?php echo $item['item_id']; ?>" value="1" placeholder="1" class="qty-input border px-2 w-100 bg-light text-center font-signika fw-bold font-size-18" disabled>
                                        <button class="qty-down border bg-light p-1" data-id="<?php echo $item['item_id']; ?>" type="button"><i class="fas fa-angle-down"></i></button>

                                    </div>
                                    <!-- Product buttons -->
                                    <form action=""></form>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0 ?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn btn-outline-primary font-baloo ms-2 me-1 rounded-0 text-decoration-none">
                                            Ukloni <i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    <form action=""></form>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?>" name="item_id">
                                        <button type="submit" name="wishlist-submit" class="btn btn-outline-primary font-baloo text-decoration-none ms-2 rounded-0">
                                            Dodaj u listu želja <i class="fa-solid fa-cart-plus"></i></button>
                                    </form>


                                </div>
                                <!-- !Product qty -->
                            </div>
                            <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12">
                                <div class="text-dark font-size-20 font-signika text-end">
                                    <?php
                                    if ($item['item_price_new'] == NULL) :
                                    ?>
                                        <span class="product_price" data-id="<?php echo $item['item_id']; ?>"><?php echo $item['item_price'] ?></span> RSD

                                    <?php
                                    else :
                                    ?>
                                        <span class="product_price" data-id="<?php echo $item['item_id']; ?>"><?php echo $item['item_price_new'] ?></span> RSD

                                    <?php
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- cart item -->
                <?php
                        if ($item['item_price_new'] == NULL) :
                            return $item['item_price'];
                        else :
                            return $item['item_price_new'];
                        endif;
                    }, $cart); // closing array_map function
                endforeach;
                ?>
            </div>
            <!-- !product list-->

            <!-- subtotal section -->
            <div class="col-xl-3 col-lg-12 col-sm-12 col-12">
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