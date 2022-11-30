 <?php

    $product_shuffle = $product->newProducts();

    ?>


 <section id="new-product">
     <div class="container">
         <div class="container py-5">
             <h3 class="font-rubik text-uppercase">Najnovije u ponudi</h3>
             <hr>

             <!-- OwlCarousel -->
             <div class="owl-carousel owl-theme h-25">
                 <!-- OwlCarousel Items -->
                 <?php foreach ($product_shuffle as $item) { ?>
                     <div class="item py-2">
                         <div class="product px-2 font-rale">
                             <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image']; ?>" alt="product1" class="img-fluid"></a>
                             <div class=" font-signika text-uppercase">
                                 <a href="#" class="text-decoration-none color-primary px-3">
                                     <h6><?php echo $item['item_name'] ?? "unknow" ?></h6>
                                 </a>
                                 <div class="price-old font-size-16 text-decoration-line-through text-danger"></div>
                                 <div class="price py-1">
                                     <h4><?php echo $item['item_price'] ?? "0" ?> RSD</h4>
                                 </div>
                             </div>
                         </div>

                     </div>
                 <?php } ?>



                 <!-- !OwlCarousel -->
             </div>

         </div>
 </section>