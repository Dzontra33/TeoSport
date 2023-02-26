<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="TeoSport je vaša destinacija za najnovije modele modernih patika i sportske opreme. Pronađite najbolje proizvode za trčanje, fitnes, košarku, fudbal i druge sportove po povoljnim cenama. Sa brzom i sigurnom dostavom, kupovina naših proizvoda je laka i udobna. Posetite nas danas i pripremite se da osvojite teren u stilu sa najnovijom sportskom opremom!">
    <meta name="keywords" content="sportska oprema, sport, patike, patike za trčanje,patike za muškarce, patike za žene, patike za decu">
    <meta name="author" content="Nikola Teovanović">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeoSport</title>
    <link rel="icon" type="image/x-icon" href="./assets/logo/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-query.css">

    <?php
    //require function.php file
    require('function.php');
    ob_start();
    ?>

    <!-- Boostrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- OwlCarousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FontAwesom CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!--  Start #header -->

    <head id="header">

        <!-- Top navigation menu -->
        <div class="navtop bg-light p-4 text-center navbar-expand-lg">
            <div class="container-fluid px-5">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-xl-4 col-12">
                        <a href="index.php"><img src="./assets/logo/logo-head.png" class="w-75" alt=""></a>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-xl-4 col-12">
                        <form class=" row">
                            <div class="col p-3 d-flex">
                                <input class="form-control rounded-0" type="search" placeholder="Pretraži prema nazivu proizvoda, kategoriji.." aria-label="Search">
                                <button class="btn rounded-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-xl-4 col-12">
                        <div class="row">
                            <div class="p-4">
                                <div class="d-xl-inline d-l-inline d-md-inline">
                                    <span><a href="brendovi.php" class="border-start font-rale font-size-18 border-end text-dark text-decoration-none px-3"><span><i class="fas fa-user"></i>
                                                Profil</a></span>
                                </div>

                                <div class="d-xl-inline d-l-inline d-md-inline">
                                    <span><a href="cart.php" class=" border-end font-rale font-size-18  text-dark text-decoration-none px-3"><span><i class="fas fa-cart-shopping"></i>
                                                Korpa (<span class="font-signika font-size-20 color-primary"><?php echo count($product->getData('cart')); ?></span>)</a>
                                </div>

                                <div class="d-xl-inline d-l-inline d-md-inline">
                                    <span><a href="wishlist.php" class=" border-end font-rale font-size-18  text-dark text-decoration-none px-3"><span><i class="fas fa-star"></i>
                                                Whishlist (<span class="font-signika font-size-20 color-primary"><?php echo count($product->getData('wishlist')); ?></span>)</a></span>
                                </div>

                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
        <!--Bottom navigation menu -->
        <nav class="navbar my-navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-signika font-size-20 text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link" href="novo.php">Novo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="muskarci.php">Muškarci</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="zene.php">Žene</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="deca.php">Deca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="brendovi.php">Brendovi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontakt.php">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    </head>
    <!--  End #header -->

    <!--  Start #main-site -->
    <main id="main-site">