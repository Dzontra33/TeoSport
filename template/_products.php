<?php
$item_id = $_GET["item_id"];
foreach ($product->getData() as $item) :
    if ($item['item_id'] == $item_id) :
        // request method post
?>

        <?php
        // request method post
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
        ?>




        <!-- Product -->
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?>" alt="" class="img-fluid">
                        <!-- Korpa i lista zelja -->

                        <form method="post">
                        </form>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">

                            <div class="row pt-4 font-size-14 font-baloo">
                                <div class="col">
                                    <?php
                                    if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])) {
                                        echo '<button type="submit" disabled class="btn btn-success form-control text-uppercase rounded-0 p-2"><i class="fa-brands fa-opencart"></i></i>
                                        U korpi je</button>';
                                    } else {
                                        echo '<button type="submit" name="product_submit" class="btn btn-danger form-control text-uppercase rounded-0 p-2"><i class="fa-brands fa-opencart"></i></i>
                                        Dodaj u korpu</button>';
                                    }
                                    ?>

                                </div>
                            </div>
                        </form>
                        <form method="post">
                        </form>

                    </div>
                    <div class="col-sm-6 py-5">
                        <h1 class="font-baloo"><?php echo $item['item_name'] ?></h1>
                        <small>NAM113562-02</small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-20">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <a href="" class="font-size-14 px-2">20.345 ratings | 1000+ answered question</a>
                            </div>
                        </div>
                        <hr>
                        <!--- Product price -->
                        <div class="product-code my-3 ">
                            <p class="font-baloo font-size-18 text-uppercase color-pale">Šifra proizvoda: CW4554-109</p>

                            <?php
                            if ($item['item_price_new'] != NULL) :
                            ?>
                                <h5 class="oldPrice text-decoration-line-through color-pale fst-italic"><?php echo $item['item_price'] ?> RSD</h5>
                                <h1 class="headPrice"><?php echo $item['item_price_new'] ?> RSD</h1>

                            <?php
                            else : ?>
                                <h1 class="headPrice"><?php echo $item['item_price'] ?> RSD</h1>

                            <?php
                            endif;

                            ?>
                        </div>
                        <!--- !Product price -->


                        <!-- #policy -->
                        <div class="policy">
                            <div class="d-flex">
                                <div class="text-center mr-5">
                                    <div class="font-size-20 my-2 color-primary">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="" class="font-signika font-size-14 text-decoration-none">10 Dana <br> zamena</a>
                                </div>
                                <div class="text-center mr-5 px-5">
                                    <div class="font-size-20 my-2 color-primary">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="" class="font-signika font-size-14 text-decoration-none">3 Dana <br> isporuka</a>
                                </div>

                                <div class="text-center mr-5">
                                    <div class="font-size-20 my-2 color-primary">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="" class="font-signika font-size-14 text-decoration-none">2 Godine <br> garancija</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- !policy -->

                        <!-- #Veličine -->
                        <div class="velicina">
                            <h6 class="font-signika text-uppercase fw-bold">Veličina:</h6>
                            <div class="d-flex">
                                <div class="text-center mr-5">
                                    <div class="font-size-20 my-2 color-primary sizeBtn">
                                        <button class="btns border p-3 font-size-16 font-signika">41</button>
                                        <button class="btns border p-3 font-size-16 font-signika">41.5</button>
                                        <button class="btns border p-3 font-size-16 font-signika">42</button>
                                        <button class="btns border p-3 font-size-16 font-signika">43</button>
                                        <button class="btns border p-3 font-size-16 font-signika">44</button>
                                        <button class="btns border p-3 font-size-16 font-signika">45</button>
                                        <button class="btns border p-3 font-size-16 font-signika">46</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- !Veličine -->

                        <!-- #Kolicina -->

                        <h6 class="font-signika text-uppercase my-3 fw-bold">Količina:</h6>
                        <div class="qty d-flex">
                            <div class="px-4 d-flex font-rale">
                                <button data-id="pro" class="qty-up border bg-light p-3" type="button"><i class="fas fa-angle-up"></i></button>
                                <input data-id="pro" type="text" value="1" placeholder="1" class="qty-input border px-2 w-50 bg-light text-center font-signika fw-bold font-size-18" disabled>
                                <button data-id="pro" class="qty-down border bg-light p-3" type="button"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- !Kolicina -->

                    <div class="col-12 pt-5">
                        <h6>Opis proizvoda</h3>
                            <hr>
                            <div class="opis font-rubik font-size-14 color-pale">
                                <p>Nike odražava sportsku eleganciju. Bilo da patike koristite za posao ili pri svakodnevnim aktivnostima, uz ovaj model
                                    izgledaćete bolje i imaćete više samopouzdanja. Nike muške patike inspirišu svojim dizajnom.</p>
                                <h5 class="">Dizajn i karakteristike muških patika Nike REAX 8 TR MESH</h3>
                                    <p>Nike Reax 8 TR su muške patike za svaki dan. U osnovu su crne boje sa crnim detaljima. Na sebi imaju nesvakidašnji
                                        dizajn đona, beli Nike znak sa bočne strane i ime porodice Reax. Plitkog su profila i mogu se nositi u različitim
                                        odevnim kombinacijama, ali najbolje u sportskim. Ovog proleća i leta budite moderni uz Nike i N Sport. N sport muške
                                        patike su pravi izbor za vas. Čvrstina i dugotrajnost muških patika prosto će vas iznenaditi. Ukoliko pored
                                        izdržljivosti želite još i udobnost, onda su ove patike idealno rešenje za vas.Nike predstavlja američku multinacionalnu
                                        korporaciju koja se bavi proizvodnjom, dizajniranjem i razvojem obuće, odeće, sportske opreme i pružanjem usluga. Nike
                                        brend teži da doprinosi inspiraciji i inovaciji svakog atlete u svetu. Na taj način se postižu maksimalni ljudski
                                        potencijali. Sa sedištem u Beavertonu, Oregonu, Nike korporacija obuhvata Nike, Converse, Hurley i Jordan brend.</p>
                            </div>
                    </div>


                </div>
            </div>


        </section>

<?php
    endif;
endforeach;

?>

<?php

?>
<!-- !Product -->