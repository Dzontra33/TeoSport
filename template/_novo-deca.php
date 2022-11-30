 <?php

    $product_shuffle = $product->newProductsForKids();


    ?>


 <section id="new-product-page">


     <div class="card text-center p-5 border-0">
         <img src="./assets/img/cover_new3.jpg" class=" img-fluid" alt="...">
     </div>
     <div class="container">
         <h1 class="font-signika text-uppercase text-center">Nova kolekcija za <a class="text-decoration-none color-primay" href="muskarci.php">decu</a></h3>
             <hr>

             <!--Produkti-->
             <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                 <div class="row">
                     <?php foreach ($product_shuffle as $item) { ?>
                         <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 pb-3">
                             <div class="item">
                                 <div class="product font-rale">
                                     <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image']; ?>" alt="product1" class="img-fluid"></a>
                                     <div class=" font-signika text-uppercase">
                                         <a href="#" class="text-decoration-none color-primary px-3">
                                             <h6><?php echo $item['item_name'] ?></h6>
                                         </a>
                                         <?php
                                            if ($item['item_price_new'] != NULL) :
                                            ?>
                                             <div class="price-old font-size-16 text-decoration-line-through text-danger">
                                                 <?php echo $item['item_price'] ?> DIN
                                             </div>

                                             <div class="price">
                                                 <h4><?php echo $item['item_price_new'] ?> DIN</h4>
                                             </div>

                                         <?php
                                            else :
                                            ?>

                                             <div class="price-old font-size-16 text-decoration-line-through color-trans">
                                                 &nbsp;
                                             </div>

                                             <div class="price">
                                                 <h4><?php echo $item['item_price'] ?> DIN</h4>
                                             </div>

                                         <?php
                                            endif;
                                            ?>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     <?php
                        }

                        ?>



                     <!-- !OwlCarousel -->
                 </div>
             </div>
             <br><br><br>
 </section>