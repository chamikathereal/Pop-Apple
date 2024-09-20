<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop Apple - Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="icon" href="img/images/favicon.png" />
</head>

<!-- IndexBody-2 -->
<body class="index-body">
    <?php include "navbar.php"; ?>
    <div class="container-fluid">

        <!-- Header and Carousel -->
        <div class="col-12">

            <!-- Shop Name -->
            <div class="col-12 mt-4 mb-4 d-flex justify-content-center">
                <div class="col-8">
                    <a href="index.php" class="shop-name-anchor headers-font bold-font">
                        <p>Pop Apple</p>
                    </a>
                    <p class="p-tags-font blockquote-footer">We Have Original Apple Product You Can Choose Anything You Want!</p>
                </div>
            </div>

            <!-- Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/images/iPhone_carousel_image.webp" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="text-dark bold-font ">Looking For iPhone 14?</h4>
                            <p class="text-dark p-tags-font">We have any product for you, Stay with us get in touch.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Body and Items -->
        <div class="col-12">
            <div class="row">

                <!-- HOT DEALS -->
                <div class="col-12 mt-4 d-flex justify-content-center">
                    <div class="col-8">
                        <a href="" class="shop-name-anchor headers-font ">
                            <h4>Are You Looking Some Hot Deals?</h4>
                        </a>
                        <p class="p-tags-font blockquote-footer">It’s Here!</p>
                    </div>
                </div>

                <div class="col-12 mt-5 mb-5 d-flex justify-content-center">
                    <div class="col-12 col-md-9">
                        <!-- Swiper -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>
                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="width: auto;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">Macbook Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/macbook-pro-item-prev.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="width: auto;">From $999 or $41.62/mo. per mo.</p>
                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="laptopSingleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 11</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/11-Purple.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="width: auto;">From $999 or $41.62/mo. per mo.</p>
                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="width: auto;">From $999 or $41.62/mo. per mo.</p>
                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="width: auto;">From $999 or $41.62/mo. per mo.</p>
                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="width: auto;">From $999 or $41.62/mo. per mo.</p>
                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="width: auto;">From $999 or $41.62/mo. per mo.</p>
                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <!-- NEW ARRIVALS -->
                <div class="col-12 mt-4 d-flex justify-content-center">
                    <div class="col-8">
                        <a href="" class="shop-name-anchor headers-font ">
                            <h4>Are You Looking Some New Arrivals?</h4>
                        </a>
                        <p class="p-tags-font blockquote-footer">It’s Here!</p>
                    </div>
                </div>

                <div class="col-12 mt-5 mb-5 d-flex justify-content-center">
                    <div class="col-12 col-md-9">
                        <!-- Swiper -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">Macbook Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/macbook-pro-item-prev.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 11</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/11-Purple.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <!-- IPHONES -->
                <div class="col-12 mt-4 d-flex justify-content-center">
                    <div class="col-8">
                        <a href="" class="shop-name-anchor headers-font">
                            <h4>Apple - iPhone</h4>
                        </a>
                        <p class="p-tags-font blockquote-footer">Get Anything You Want!</p>
                    </div>
                </div>

                <div class="col-12 mt-5 mb-5 d-flex justify-content-center">
                    <div class="col-12 col-md-9">
                        <!-- Swiper -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">Macbook Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/macbook-pro-item-prev.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 11</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/11-Purple.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <!-- MACBOOK PRO -->
                <div class="col-12 mt-4 d-flex justify-content-center">
                    <div class="col-8">
                        <a href="" class="shop-name-anchor headers-font ">
                            <h4>Apple - Macbook Pro</h4>
                        </a>
                        <p class="p-tags-font blockquote-footer">Get Anything You Want!</p>
                    </div>
                </div>

                <div class="col-12 mt-5 mb-5 d-flex justify-content-center">
                    <div class="col-12 col-md-9">
                        <!-- Swiper -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">Macbook Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/macbook-pro-item-prev.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 11</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/11-Purple.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card-style" style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="singleProductView.php" class="card-link">
                                                <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                                            </a>
                                        </div>
                                        <a href="singleProductView.php" class="card-link">
                                            <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                                            <p class="text-danger free-item p-tags-font-medium fw-bold">iPhone 7 Free</p>
                                        </a>

                                        <div class="card-body text-center mx-auto">
                                            <a href="singleProductView.php" class="card-link">
                                                <div class="mt-2 mb-3">
                                                    <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                                                    <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                                                </div>
                                                <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                                            </a>
                                            <div class="d-flex justify-content-center">
                                                <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>


            </div>


            <!-- <div class="card custom-card-style" style="width: 18rem;">
                <div class="card-body">
                    <a href="#" class="card-link">
                        <p class="card-title headers-font-medium">iPhone 14 Pro</p>
                    </a>
                </div>
                <a href="#" class="card-link">
                    <img class="card-img-top" src="img/product-images/iPhone-14.jpg" alt="Card image cap">
                </a>

                <div class="card-body text-center mx-auto">
                    <a href="#" class="card-link">
                        <div class="mt-2 mb-3">
                            <img class="mb-0" src="img/color-circle-images/circle.png" alt="Card image cap">
                            <img class="mb-0" src="img/color-circle-images/circle (1).png" alt="Card image cap">
                            <img class="mb-0" src="img/color-circle-images/circle (2).png" alt="Card image cap">
                            <img class="mb-0" src="img/color-circle-images/circle (3).png" alt="Card image cap">
                            <img class="mb-0" src="img/color-circle-images/circle (4).png" alt="Card image cap">
                            <img class="mb-0" src="img/color-circle-images/circle (5).png" alt="Card image cap">
                        </div>
                        <p class="card-text text-center p-tags-font-medium mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">From $999 or $41.62/mo. per mo.</p>

                    </a>
                    <div class="d-flex justify-content-center">
                        <a href="singleProductView.php" class="btn btn-primary btn-block product-item-button">Buy Now</a>
                    </div>
                </div>
            </div> -->




            <!-- 3 Images Set -->
            <div class="col-12 mt-4 mb-4">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-10">
                            <a href="" class="shop-name-anchor headers-font ">
                                <h4>That is what we have for you.</h4>
                            </a>
                            <p class="p-tags-font blockquote-footer">World Of Apple! </p>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-10">
                            <div class="row">

                                <div class="col-12 col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                                            <a href="link-to-page-1.html" class="image-anchor">
                                                <img class="img-fluid rounded-image" src="img/images/iPhones.jpg" alt="iPhones">
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <a href="link-to-page-2.html" class="image-anchor">
                                                <img class="img-fluid rounded-image" src="img/images/apple_watches.jpg" alt="Apple Watches">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-2 mb-5">
                                    <a href="link-to-page-3.html" class="image-anchor">
                                        <img class="img-fluid rounded-image" src="img/images/laptop.jpg" alt="Apple Laptop">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>

    <?php include "footer.php"; ?>

    <script src="script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            loop: true, // Enable infinite loop
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // When window width is less than 768px (mobile devices)
                576: {
                    slidesPerView: 1,
                },
                // When window width is between 768px and 1024px (tablets, small screens)
                768: {
                    slidesPerView: 2, // Show 2 slides on tablets
                },
                // Default for laptops and desktops
                993: {
                    slidesPerView: 3, // Show 3 slides on laptops and desktops
                },
            },

        });
    </script>


</body>

</html>
