<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- CSS -->

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- slick carousel-->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <!-- style.css -->
        <link rel="stylesheet" href="css/style.css" />



        <title>Baker's Dozen</title>


    </head>

    <body>

        <?php include("inc/header.php"); ?>

        <div class="header-wrapper">
            <div class="header-inner container">
                <div class="header-content">
                    <h2>
                        Header Title
                    </h2>
                    <p>
                        Header Paragraph
                    </p>
                    <a href="#" class="btn btn-header">
                        Order Now
                    </a>
                </div>
            </div>
            <div class="header-image">

            </div>
        </div>

        <div class="information-wrapper">
            <div class="information-tabs container">
                <div class="btn btn-information">
                    <a href="#" onClick="openTab('tab-1')">
                        <span class="fa-solid fa-bread-slice"></span>
                        Bread Baked 
                        <br>
                        Daily
                    </a>
                </div>
                <div class="btn btn-information">
                    <a href="#" onClick="openTab('tab-2')">
                        <span class="fa-solid fa-cookie-bite"></span>
                        Handmade Sweets <br>
                        and Pastries
                    </a>
                </div>
                <div class="btn btn-information">
                    <a href="#" onClick="openTab('tab-3')">
                        <span class="fa-solid fa-cake-candles"></span>
                        Specially Made 
                        <br>
                        for your event
                    </a>
                </div>
            </div>
            <div class="information-content">
                <div id="tab-1" class="information-content--block">
                    <div class="information-content--header">
                        <h2>
                            Established in 2011, Our Bread is hand-crafted using 
                            <br>
                            the finest local ingredients
                        </h2>
                    </div>
                    <div class="information-content--paragraph">
                        <img src="assets/images/placeholder.png">
                        <p>This is an example paragraph 01</p>
                    </div>
                </div>
                <div id="tab-2" class="information-content--block">
                    <div class="information-content--header">
                        <h2>
                            Established in 2011, Our Bread is hand-crafted using the 
                            <br>
                            finest local ingredients
                        </h2>
                    </div>
                    <div class="information-content--paragraph">
                        <img src="assets/images/placeholder.png">
                        <p>This is an example paragraph 02</p>
                    </div>
                </div>
                <div id="tab-3" class="information-content--block">
                    <div class="information-content--header">
                        <h2>
                            Established in 2011, Our Bread is hand-crafted using the 
                            <br>
                            finest local ingredients
                        </h2>
                    </div>
                    <div class="information-content--paragraph">
                        <img src="assets/images/placeholder.png">
                        <p>This is an example paragraph 03</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Products Section -->
        <section id="our-products">
            <div class="container">
                <h3>Our Products</h3>
                <div id="products-slider-container">
                    <button id="products-arrow-prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <button id="products-arrow-next"><i class="fa-solid fa-chevron-right"></i></button>
                    <div id="products-slider">
                        <div class="product-image-tile">
                            <div class="product-image"></div>
                            <h3>Product text</h3>
                        </div>
                        <div class="product-image-tile">
                            <div class="product-image"></div>
                            <h3>Product text</h3>
                        </div>
                        <div class="product-image-tile">
                            <div class="product-image"></div>
                            <h3>Product text</h3>
                        </div>
                        <div class="product-image-tile">
                            <div class="product-image"></div>
                            <h3>Product text</h3>
                        </div>
                        <div class="product-image-tile">
                            <div class="product-image"></div>
                            <h3>Product text</h3>
                        </div>
                    </div>
                </div>


                <a id="our-products-button">Find out more</a>
            </div>
        </section>

        <!-- Customer Reviews Section -->
        <section id="customer-reviews">
            <div class="container">
                <h3>What our customers are saying</h3>

                <!-- Customer Quotes Carousel-->
                <div id="quote-carousel">

                    <div class="quote-slide">
                        <blockquote><i class="fa fa-quote-left"></i><p>Pallas volume still as wished no from door before radiant be. Sorrowsorrow chamber there both at gloating lonely, once black flown have quaff, eagerly each flirt meant my name grew, whispered not sat soul liftednevermore human again. Maiden a muttered craven distinctly door, what lie wide meaninglittle than thy thy..</p><i class=" fa fa-quote-right"></i></blockquote>
                        <cite>Anna Davis</cite>
                    </div>

                    <div class="quote-slide">
                        <blockquote><i class="fa fa-quote-left"></i><p>Pallas volume still as wished no from door before radiant be. Sorrowsorrow chamber there both at gloating lonely, once black flown have quaff, eagerly each flirt meant my name grew, whispered not sat soul liftednevermore human again. Maiden a muttered craven distinctly door, what lie wide meaninglittle than thy thy..</p><i class=" fa fa-quote-right"></i></blockquote>
                        <cite>Eren Yaeger</cite>
                    </div>

                    <div class="quote-slide">
                        <blockquote><i class="fa fa-quote-left"></i><p>Pallas volume still as wished no from door before radiant be. Sorrowsorrow chamber there both at gloating lonely, once black flown have quaff, eagerly each flirt meant my name grew, whispered not sat soul liftednevermore human again. Maiden a muttered craven distinctly door, what lie wide meaninglittle than thy thy..</p><i class=" fa fa-quote-right"></i></blockquote>
                        <cite>Mikasa Ackerman</cite>
                    </div>

                    <div class="quote-slide">
                        <blockquote><i class="fa fa-quote-left"></i><p>Pallas volume still as wished no from door before radiant be. Sorrowsorrow chamber there both at gloating lonely, once black flown have quaff, eagerly each flirt meant my name grew, whispered not sat soul liftednevermore human again. Maiden a muttered craven distinctly door, what lie wide meaninglittle than thy thy..</p><i class=" fa fa-quote-right"></i></blockquote>
                        <cite>Armin Arlert</cite>
                    </div>
                </div>

                <div id="quote-carousel-dots"></div> <!-- Div accessed by slick plugin - do not remove -->

                <h3 class="tagline">Proudly baking for your party, your event, and your breakfast</h3>

                <a id="customer-reviews-button">Order now</a>
            </div>
        </section>

        <?php include("inc/footer.php"); ?>



        <!-- JS Links -->

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- slick carousel -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <!-- application.js-->
        <script src="js/application.js"></script>

        <script src="js/information-tabs.js"></script>

    </body>
</html>
