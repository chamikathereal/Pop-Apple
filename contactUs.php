<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop Apple - Contact Us</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="icon" href="img/images/favicon.png" />
</head>

<body class="index-body">

    <?php include "navbar.php"; ?>

    <div class="container-fluid">
        <!-- Header and Carousel -->
        <div class="col-12 mb-5">

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
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/images/iPhone_carousel_image_2.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="text-dark bold-font ">Looking For iPhone 14?</h4>
                            <p class="text-dark p-tags-font">We have any product for you, Stay with us get in touch.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/images/iPhone_carousel_image_3.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="text-dark bold-font ">Looking For iPhone 14?</h4>
                            <p class="text-dark p-tags-font">We have any product for you, Stay with us get in touch.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </a>


            </div>

        </div>

        <!-- Social Media To Contact US -->
        <div class="col-12 mt-5 mb-5 d-flex justify-content-center">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="" class="shop-name-anchor headers-font">
                        <h4>Contact Us Through Social Media!</h4>
                    </a>
                </div>
                <div class="col-12 mt-5 text-center">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <a href="#" class="footer-social-media-link">
                                <img class="footer-social-media-icons" src="img/social-media-images/facebook.png" alt="Facebook">
                            </a>
                            <a href="#" class="footer-social-media-link">
                                <img class="footer-social-media-icons" src="img/social-media-images/instagram.png" alt="Instagram">
                            </a>
                            <a href="#" class="footer-social-media-link">
                                <img class="footer-social-media-icons" src="img/social-media-images/whatsapp.png" alt="WhatsApp">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Send Message To Contact US -->
        <div class="col-12 col-md-12 mb-5 mt-5">
            <div class="col-12 col-md-8 mx-auto">
                <div>
                    <a href="" class="shop-name-anchor headers-font ">
                        <h4>Send Mail To Contact Us!</h4>
                    </a>
                    <p class="p-tags-font blockquote-footer">Shop Name!</p>
                </div>

                <div class="mt-5">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Enter Your Name</label>
                            <input type="text" class="form-control apple-form-input" id="formGroupExampleInput" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email Address</label>
                            <input type="email" class="form-control apple-form-input" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Enter Your Message</label>
                            <textarea class="form-control apple-form-input" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div>
                    <div class="col-7 mx-auto mt-4 mt-md-5 d-flex justify-content-center">
                        <button type="button" class="btn btn-primary btn-block product-item-button">Send Message.</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Arrivals Head -->
        <div class="col-12 col-md-12 d-flex justify-content-center mt-md-5 mb-md-3">
            <div class="col-8">
                <a href="" class="shop-name-anchor headers-font ">
                    <h4 class="mt-5">Are You Looking Some New Arrivals?</h4>
                </a>
                <p class="p-tags-font blockquote-footer">It’s Here!</p>
            </div>
        </div>

        <!-- New Arrivals Items -->
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
                768: {
                    slidesPerView: 1,

                },
                // When window width is between 768px and 1024px (tablets, small screens)
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>

</html>