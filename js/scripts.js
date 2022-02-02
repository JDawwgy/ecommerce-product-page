/* start of counter script */

$(document).ready(function () {
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count <= 0 ? 0 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});

/* end of counter script */





/* start of lightbox script */

// create lightbox
const lightbox = document.createElement("div");
lightbox.id = "lightbox";
document.body.appendChild(lightbox);

// open large image
function openModal() {
    document.getElementById("myModal").style.display = "block";
}
//close large image
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

// show correct image
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");

    if (n > slides.length) { slideIndex = 1 }

    if (n < 1) { slideIndex = slides.length }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}

/* end of lightbox script */





/* thumbnail image changer script */

function changeHero1() {
    document.getElementById("heroPicture").src = "images/image-product-1.jpg";
}

function changeHero2() {
    document.getElementById("heroPicture").src = "images/image-product-2.jpg";
}

function changeHero3() {
    document.getElementById("heroPicture").src = "images/image-product-3.jpg";
}

function changeHero4() {
    document.getElementById("heroPicture").src = "images/image-product-4.jpg";
}

/* end thumbnail image changer script */





/* mobile menu open and close */

function openMenu() {
    document.getElementById("mobileMenu").style.display = "block";
}

function closeMenu() {
    document.getElementById("mobileMenu").style.display = "none";
}

/* end mobile menu open and close */





/* mobile change img script */

var slideIndex = 1;
showMSlides(slideIndex);

function plusMSlides(n) {
    showMSlides(slideIndex += n);
}

function currentMSlide(n) {
    showMSlides(slideIndex = n);
}

function showMSlides(n) {
    var i;
    var slides = document.getElementsByClassName("myMSlides");

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}

/* end mobile change img script */





/* mobile menu */

$("#mobileMenu").click(function () {
    $("#mMenu").toggleClass("showMenu");
});

/* end mobile menu  */





/* start of cart script */

// show cart
$("#cartIcon").click(function () {
    $("#cart").toggleClass("active");
});

var removeCartItemButton = document.getElementsByClassName("remove-from-cart");

// remove from cart
for (var i = 0; i < removeCartItemButton.length; i++) {
    var button = removeCartItemButton[i];
    button.addEventListener("click", function (event) {
        var buttonClicked = event.target;
        buttonClicked.parentElement.parentElement.remove();

        var cartEmpty = document.getElementById("cartEmpty");
        var cartIcon = document.getElementById("inCart");
        cartEmpty.style.display = "block";
        cartIcon.style.display = "none";

    })
}

var addToCart = document.getElementsByClassName("cart-btn");

// click on add to cart
for (var i = 0; i < addToCart.length; i++) {
    var button = addToCart[i];
    button.addEventListener("click", function (event) {

        // gets number of things to add to cart
        var buttonClicked = event.target;
        var quantity = buttonClicked.parentElement.parentElement.querySelector('input[name="quantity"]').value;
        // console.log(quantity);

        var cartIcon = document.getElementById("inCart");
        var cartItem = document.getElementById("cartItem");
        var cartEmpty = document.getElementById("cartEmpty");
        var cartQuantity = document.getElementById("cartQuantity");
        var cartTotal = document.getElementById("cartTotal");

        // only show if more than 0
        if (quantity > 0) {
            cartIcon.style.display = "block";
            cartItem.style.display = "block";
            cartEmpty.style.display = "none";
        }

        var x = "x ";
        var total = "125" * quantity;

        // update cart info
        cartIcon.innerHTML = quantity;
        cartQuantity.innerHTML = x + quantity
        cartTotal.innerHTML = "$" + total;

    })
}

// function cartNumbers() {
//     localStorage.setItem("cartNumbers", 1)
// }

/* end of cart script */





