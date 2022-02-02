<?php include("includes/header.php"); ?>


<!-- Body Content -->

<div class="container body-start">
    <div id="bodyStart" class="row">
        <div class="col-md-5 ml-5 mr-5">

            <!-- mobile slideshow -->
            <div class="slideshow-container">
                <div class="myMSlides">
                    <img class="img-responsive hero-picture" src="images/image-product-1.jpg">
                </div>

                <div class="myMSlides">
                    <img class="img-responsive hero-picture" src="images/image-product-2.jpg">
                </div>

                <div class="myMSlides">
                    <img class="img-responsive hero-picture" src="images/image-product-3.jpg">
                </div>

                <div class="myMSlides">
                    <img class="img-responsive hero-picture" src="images/image-product-4.jpg">
                </div>

                <a class="prev circle" onclick="plusMSlides(-1)"><img src="images/icon-previous.svg" alt=""></a>
                <a class="next cirlce" onclick="plusMSlides(1)"><img src="images/icon-next.svg" alt=""></a>
            </div> <!-- end mobile slideshow -->


            <img class="img-responsive hero-picture cursor desktop-only" id="heroPicture" src="images/image-product-1.jpg" alt="image" width="100%" height="auto" onclick="openModal();currentSlide(1)">
            <div class="thumb-group">
                <img class="thumb-img thumb1 cursor" src="images/image-product-1-thumbnail.jpg" alt="" onclick="changeHero1();">
                <img class="thumb-img thumb2 cursor" src="images/image-product-2-thumbnail.jpg" alt="" onclick="changeHero2();">
                <img class="thumb-img thumb3 cursor" src="images/image-product-3-thumbnail.jpg" alt="" onclick="changeHero3();">
                <img class="thumb-img thumb4 cursor" src="images/image-product-4-thumbnail.jpg" alt="" onclick="changeHero4();">
            </div>


            <!-- lightbox modal -->
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()"><img src="images/icon-close.svg" alt=""></span>
                <div class="modal-content">

                    <div class="mySlides">
                        <img class="shadow-box-img" src="images/image-product-1.jpg">
                    </div>

                    <div class="mySlides">
                        <img class="shadow-box-img" src="images/image-product-2.jpg">
                    </div>

                    <div class="mySlides">
                        <img class="shadow-box-img" src="images/image-product-3.jpg">
                    </div>

                    <div class="mySlides">
                        <img class="shadow-box-img" src="images/image-product-4.jpg">
                    </div>

                    <a class="prev circle" onclick="plusSlides(-1)"><img src="images/icon-previous.svg" alt=""></a>
                    <a class="next cirlce" onclick="plusSlides(1)"><img src="images/icon-next.svg" alt=""></a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>


                    <!-- Images shown under -->

                    <div class="box-group">
                        <div class="column">
                            <img class="demo cursor line-imgs" src="images/image-product-1-thumbnail.jpg" style="display: inline-block; width: 70%; border-radius: 15px;" onclick="currentSlide(1)">
                        </div>

                        <div class="column">
                            <img class="demo cursor line-imgs" src="images/image-product-2-thumbnail.jpg" style="display: inline-block; width: 70%; border-radius: 15px;" onclick="currentSlide(2)">
                        </div>

                        <div class="column">
                            <img class="demo cursor line-imgs" src="images/image-product-3-thumbnail.jpg" style="display: inline-block; width: 70%; border-radius: 15px;" onclick="currentSlide(3)">
                        </div>

                        <div class="column">
                            <img class="demo cursor line-imgs" src="images/image-product-4-thumbnail.jpg" style="display: inline-block; width: 70%; border-radius: 15px;" onclick="currentSlide(4)">
                        </div>
                    </div>
                </div>
            </div> <!-- lightbox modal -->

        </div> <!--  col-md-5 -->



        <!-- Product info and price -->

        <div class="col-md-5 ml-5">

            <p class="company-name thicc">Sneaker Company</p>
            <h1 class="thicc mb-4 product">Fall Limited Edition Sneakers</h1>
            <p class="description">These low-profile sneakers are your perfect casual wear companion. Featuring a durable rubber outer sole, they'll withstand everything the weather can offer.</p>
            <p class="thicc price">$125.00</p>
            <p class="sale thicc">50%</p>
            <p class="discount">$250.00</p>

            <div class="center-count">
                <!-- counter -->
                <div class="counter">
                    <img class="minus" src="images/icon-minus.svg" alt="">
                    <input class="thicc count-bg" id="quantity" name="quantity" type="text" value="0">
                    <img class="plus" src="images/icon-plus.svg" alt="">
                </div>

                <button class="cart-btn">
                    <img class="mr-2 add-cart" height="15px" src="images/icon-cart-white.svg" alt="">
                    <p class="thicc add-cart">Add to cart</p>
                </button>
                <!-- end counter -->
            </div>
        </div> <!-- col-md-5 -->

    </div> <!-- End row -->
</div> <!-- End container -->

<!-- End Body Content -->

<?php include("includes/footer.php"); ?>