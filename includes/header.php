<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

    <title>Ecommerce</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- JQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>

<body>
    <!-- Top Navbar -->

    <div class="container" id="topNav">
        <nav class="navbar navbar-expand-lg navbar-light border-bottom">

            <button class="navbar-toggler" onclick="openMenu()" type="button">
                <img src="images/icon-menu.svg" alt="">
            </button>

            <a class="navbar-brand mr-auto ml-3" href="#"><img id="logo" src="images/logo.svg" alt=""></a>

            <div class="navbar-collapse collapse" id="navbarSupportedContent">

                <ul class="nav navbar-nav mr-auto mt-1 ml-5">
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="#">Collections</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="#">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="#">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div id="rightNav" class="navbar">
                <ul class="navbar-nav ml-auto">


                    <li class="nav-item">
                        <a class="nav-link mt-2 mr-4" id="cartIcon" data-modal-target="#cart" href="#"><img src="images/icon-cart.svg" alt=""></a>
                    </li>
                    <!-- <input type="text" class="inCart thicc" value="1" readonly="readonly"> -->
                    <span class="inCart thicc" id="inCart" style="display: none;">1</span>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img id="profileThumb" style src="images/image-avatar.png" height="40" width="40" alt=""></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- cart item -->
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div id="cart" class="cart">
                    <div class="cart-header">
                        <p class="cart-name thicc">Cart</p>
                    </div>
                    <div class="border-cart"></div>
                    <div class="cart-items">
                        <div class="cart-row">
                            <div class="cart-item" id="cartItem" style="display: none;">

                                <div>
                                    <img class="cart-item-image" src="images/image-product-1-thumbnail.jpg" width="50" height="50" alt="">
                                </div>


                                <div class="cart-item-info">
                                    <span class="cart-item-title">Fall Limited Edition Sneakers</span><br>
                                    <span class="cart-item-price">$125.00</span>
                                    <span class="cart-item-quantity" id="cartQuantity">x 1</span>
                                    <!-- <span class="cart-item-quantity">x<input class="cart-item-quantity-input" type="number" value="1" readonly="readonly"></span> -->
                                    <span class="cart-total-price thicc" id="cartTotal">$125.00</span>
                                </div>

                                <button class="remove-from-cart" type="button"><img src="images/icon-delete.svg" alt=""></button>

                                <button class="checkout-btn">
                                    <p class="thicc add-cart">Checkout</p>
                                </button>

                            </div><!-- cart-item -->
                        </div>
                    </div> <!-- cart-items -->
                    <p class="empty-cart thicc" id="cartEmpty">Your cart is empty.</p>
                </div>
            </div>
        </div>
    </div> <!-- cart row -->

    <!-- mobile menu -->
    <div id="mobileMenu" class="thicc">
        <div class="menuWhite">

            <span class="close-mobile" onclick="closeMenu()" id="closeMenu">&#10005;</span>
            <!-- <span class="close-mobile"><img src="images/icon-close.svg" alt=""></span> -->

            <div class="m-menu-items">
                <li class="">
                    <a class="m-menu-item" href="#">Collections</a>
                </li>
                <li class="">
                    <a class="m-menu-item" href="#">Men</a>
                </li>
                <li class="">
                    <a class="m-menu-item" href="#">Women</a>
                </li>
                <li class="">
                    <a class="m-menu-item" href="#">About</a>
                </li>
                <li class="">
                    <a class="m-menu-item" href="#">Contact</a>
                </li>
            </div>

        </div>
    </div>
    <!-- End Top Navbar -->