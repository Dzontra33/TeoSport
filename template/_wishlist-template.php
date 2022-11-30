<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-cart-submit'])) {
        $deletedrecord = $Cart->deleteWishlist($_POST['item_id']);
    }

    if (isset($_POST['cart-submit'])) {
        $Cart->addToWishlist($_POST['item_id'], 'cart', 'wishlist');
    }
}

?>

<!-- Shopping Cart -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h3 class="font-rubik text-uppercase">Wishlist</h3>

        <!-- shopping cart items -->
        <div class="row">
            <!-- product list-->
            <div class="col-xl-12">
                <?php
                foreach ($product->getData('wishlist') as $item) :
                    $cart = $product->getProductById($item['item_id']);
                    $subTotal[] = array_map(function ($item) {
                ?>
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3 mb-2">
                            <div class="col-xl-2 col-lg-4 col-md-6">
                                <img src="<?php echo $item['item_image']; ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-8">
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
                                <div class="qty d-flex pt-2 text-center">
                                    <!-- !Product qty -->

                                    <form action=""></form>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn btn-outline-primary font-baloo me-1 rounded-0 text-decoration-none">
                                            Ukloni <i class="fa-solid fa-trash"></i></button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn btn-outline-primary font-baloo text-decoration-none ms-2 rounded-0">
                                            Dodaj u korpu <i class="fa-solid fa-cart-plus"></i></button>
                                    </form>


                                </div>

                            </div>
                            <div class="col-md-2">
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

                    }, $cart); // closing array_map function
                endforeach;
                ?>
            </div>
            <!-- !product list-->



        </div>

        <!-- !shopping cart items -->

    </div>



</section>
<!-- !Shopping Cart -->