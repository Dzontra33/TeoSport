<?php
$brand_snuffle = $brand->getData();
$product_shuffle = $product->getProductsBySex(2);

if (isset($_GET['btnFiltriraj'])) {
    if (isset($_GET['catID']) && !empty($_GET['catID']) && isset($_GET['brandID']) && !empty($_GET['brandID'])) {
        $niz = $_GET['brandID'];
        $in = implode(", ", $niz);
        $cat_id = $_GET['catID'];
        $product_shuffle = $product->getProductsByCatAndBrand(2, $cat_id, $in);
    } else if (isset($_GET['catID']) && !empty($_GET['catID'])) {
        $product_shuffle = $product->getProductsByCat(2, $_GET["catID"]);
    } else if (isset($_GET['brandID']) && !empty($_GET['brandID'])) {
        $niz = $_GET['brandID'];
        $in = implode(", ", $niz);
        $product_shuffle = $product->getProductsByBrand(2, $in);
    }
}




?>


<!-- woman products -->
<section id="product-section">
    <div class="card text-center mb-3 border-0">
        <img src="./assets/img/zene-banner.jpg" class=" img-fluid" alt="...">
    </div>
    <div class="container">
        <div class="row">

            <!--Kategorije-->
            <div class="col-lg-2">
                <div id="filters" class="button-group">

                    <h3 class=" font-signika mt-3">Filteri</h3>
                    <hr>
                    <form></form>
                    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <div class="kategorije font-signika font-size-18">
                            <h6 class="font-rubik fw-bold text-uppercase color-primary" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1">Kategorije</h3>
                                <div class="collapse.show cat-collapse" id="collapse1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="catID" id="flexRadioDefault1" value="1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Obuća
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="catID" id="flexRadioDefault2" value="2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Odeća
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="catID" id="flexRadioDefault3" value="3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Aksesoari
                                        </label>
                                    </div>
                                </div>
                        </div>

                        <hr>

                        <div class="brendovi">
                            <h6 class="font-rubik fw-bold text-uppercase color-primary" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Brendovi</h3>
                                <div class="collapse.show multi-collapse" id="collapse2">
                                    <div class="overflow-scroll font-signika font-size-18">
                                        <?php foreach ($brand_snuffle as $item) : ?>
                                            <div class="form-check py-1">
                                                <input class="form-check-input" type="checkbox" name="brandID[]" value="<?php echo $item['brand_id'] ?>" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    <?php echo $item['name'] ?>
                                                </label>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                        </div>

                        <div class="filter-btn w-100">
                            <input type="submit" name="btnFiltriraj" id="filterUp" value="filtriraj" class="btn btn-primary text-uppercase rounded-0 mb-2 mt-2 w-100">
                            <button class="btn btn-primary text-uppercase rounded-0 mb-2 mt-2 w-100" id="reloadFilters">Restartuj filtere</button>

                        </div>

                    </form>
                </div>
            </div>
            <!--Produkti-->
            <div class="col-lg-10 col-sm-12 col-md-12 col-xs-12">
                <div class="row">
                    <?php
                    if (empty($product_shuffle)) :
                        echo '<h1 class="text-uppercase font-signika">Nema rezultata!</h1>';
                    ?>

                        <?php else : foreach ($product_shuffle as $item) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 pb-3">
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
                    endif;
                    ?>

                </div>
            </div>
        </div>



</section>
<!-- #woman products -->

<span class="px-5"></span>