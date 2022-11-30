 <?php

    $product_shuffle = $product->topProducts();


    ?>



 <!-- Najprodavanije -->
 <section id="top-ponuda">
     <div class="container py-5">
         <h3 class="font-rubik text-uppercase">Top Ponuda</h3>
         <hr>
         <!-- OwlCarousel -->
         <div class="owl-carousel owl-theme">
             <!-- OwlCarousel Items -->
             <?php foreach ($product_shuffle as $item) { ?>
                 <div class="item py-2">
                     <div class="product px-2 font-rale">
                         <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image']; ?>" alt="product1" class="img-fluid"></a>
                         <div class=" font-signika text-uppercase">
                             <a href="#" class="text-decoration-none color-primary px-3">
                                 <h6><?php echo $item['item_name'] ?? "unknow" ?></h6>
                             </a>
                             <div class="price-old font-size-16 text-decoration-line-through text-danger"><?php echo $item['item_price'] ?> RSD</div>
                             <div class="price py-1">
                                 <h4><?php echo $item['item_price_new'] ?> RSD</h4>
                             </div>
                         </div>
                     </div>
                 </div>

             <?php } ?>

             <!-- !OwlCarousel -->
         </div>

 </section>
 <!-- !Najprodavanije -->


 <!-- 
                 <div class="item py-2">
                 <div class="product px-2 font-rale">
                     <a href=""><img src="./assets/products/top-ponuda/2.jpg" alt="product2" class="img-fluid"></a>
                     <div class=" font-signika text-uppercase">
                         <a href="#" class="text-decoration-none color-primary px-3">
                             <h6>Ženske patike adidas SOLAR GLIDE 5 W</h6>
                         </a>
                         <div class="price-old font-size-16 text-decoration-line-through text-danger">18.790 RSD</div>
                         <div class="price py-1">
                             <h4>16.790 RSD</h4>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="item py-2">
                 <div class="product px-2 font-rale">
                     <a href=""><img src="./assets/products/top-ponuda/3.jpg" alt="product3" class="img-fluid"></a>
                     <div class=" font-signika text-uppercase">
                         <a href="#" class="text-decoration-none color-primary px-3">
                             <h6>Muške patike adidas SOLAR GLIDE M</h6>
                         </a>
                         <div class="price-old font-size-16 text-decoration-line-through text-danger">18.790 RSD</div>
                         <div class="price py-1">
                             <h4>16.790 RSD</h4>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="item py-2">
                 <div class="product px-2 font-rale">
                     <a href=""><img src="./assets/products/top-ponuda/4.jpg" alt="product4" class="img-fluid"></a>
                     <div class=" font-signika text-uppercase">
                         <a href="#" class="text-decoration-none color-primary px-3">
                             <h6>Muške patike Solomon HYPLUSE GTX</h6>
                         </a>
                         <div class="price-old font-size-16 text-decoration-line-through text-danger">16.490 RSD</div>
                         <div class="price py-1">
                             <h4>14.490 RSD</h4>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="item py-2">
                 <div class="product px-2 font-rale">
                     <a href=""><img src="./assets/products/top-ponuda/5.jpg" alt="product5" class="img-fluid"></a>
                     <div class=" font-signika text-uppercase">
                         <a href="#" class="text-decoration-none color-primary px-3">
                             <h6>Ženske patike Diadora STEP P STARDUST</h6>
                         </a>
                         <div class="price-old font-size-16 text-decoration-line-through text-danger">8.690 RSD</div>
                         <div class="price py-1">
                             <h4>6.690 RSD</h4>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="item py-2">
                 <div class="product px-2 font-rale">
                     <a href=""><img src="./assets/products/top-ponuda/6.jpg" alt="product6" class="img-fluid"></a>
                     <div class=" font-signika text-uppercase">
                         <a href="#" class="text-decoration-none color-primary px-3">
                             <h6>Muške Patike Diadora N.92</h6>
                         </a>
                         <div class="price-old font-size-16 text-decoration-line-through text-danger">8.990 RSD</div>
                         <div class="price py-1">
                             <h4>6.990 RSD</h4>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="item py-2">
                 <div class="product px-2 font-rale">
                     <a href=""><img src="./assets/products/top-ponuda/7.jpg" alt="product7" class="img-fluid"></a>
                     <div class=" font-signika text-uppercase">
                         <a href="#" class="text-decoration-none color-primary px-3">
                             <h6>Muške patike Puma BMW MMS MACO SL</h6>
                         </a>
                         <div class="price-old font-size-16 text-decoration-line-through text-danger">16.290 RSD</div>
                         <div class="price py-1">
                             <h4>14.290 RSD</h4>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="item py-2">
                 <div class="product px-2 font-rale">
                     <a href=""><img src="./assets/products/top-ponuda/8.jpg" alt="product8" class="img-fluid"></a>
                     <div class=" font-signika text-uppercase">
                         <a href="#" class="text-decoration-none color-primary px-3">
                             <h6>Ženske patike Skechers SIERRA</h6>
                         </a>
                         <div class="price-old font-size-16 text-decoration-line-through text-danger">10.690 RSD</div>
                         <div class="price py-1">
                             <h4>8.690 RSD</h4>
                         </div>
                     </div>
                 </div>
             </div>
 -->