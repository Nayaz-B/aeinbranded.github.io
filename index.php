<?php

include ("Db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
    <div class="header">
    <div class="container">
        <div class="Navbar">
        <div class="logo">
            <img src="photos/clothinglogo.jpeg" width="200px" alt="">
        </div>
        <nav>
        <ul id="menuItems">
            <li><a href="index.php">Home</a></li>
            <li><a href="Product.php">Shop</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Aboutus">About us</a></li>
            <li><a href="Cantactus">Cantactus</a></li>
        </ul>
    </nav>
    <a href="Cart.php" ><img src="photos/shopping-bag.png" width="30px" height="30px"></a>
    <img src="photos/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
    <div class="row">
        <div class="col-2">
            <h1> Branded Cloths gives Attention from everywhere <br> A New style Aein shopping!</h1>
            <p>Success isn't always about Greatness.its about consistency. Consistent <br> hardwork gains Success.Greatness will come. </p>
            <a href="" class="btn"> Explore Now &#8594;</a>
        </div>
        <div  class="col-2">
            <img src="photos/homeimg.jpg">
        </div>
    </div>
</div>
</div>
<!---------- feature categaries---------->
<div class="categories">
    <div class="small-container">
    <div class="row">
        <div class="col-3">
            <img src="photos/h8.webp" height="300px" width="400px" >
        </div>
        <div class="col-3">
            <img src="photos/h3.webp" >
        </div>
        <div class="col-3">
            <img src="photos/shopping.jpg" >
        </div>
    </div>
</div>
</div>
<!------ feature product-------->
<div class="small-container">
    <h1 class="title">Feature Products</h1>
    <div class="row">
        <div class="col-4">
            <img src="photos/k3.webp" alt="">
            <h4> white printed T shirt</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="photos/h5.webp" alt="">
            <h4> Light green track shoot</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$1200.00</p>
        </div>
        <div class="col-4">
            <img src="photos/h7.jpeg" alt="">
            <h4> Formal shous</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="photos/h9.webp" alt="">
            <h4> Maroon  Formal shirt</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$1000.00</p>
        </div>
    </div>
    <h1 class="title">Latest Products</h1>
    <div class="row">
        <div class="col-4">
            <img src="photos/gc1.webp" alt="">
            <h4> white printed T shirt</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="photos/h5.webp" alt="">
            <h4> Light green track shoot</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$1200.00</p>
        </div>
        <div class="col-4">
            <img src="photos/img5.jpg" alt="">
            <h4> Nike T shirts</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="photos/k5.jpg" alt="">
            <h4> Gray fulaver</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$1000.00</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="photos/k8.jpg" alt="">
            <h4> white printed T shirt</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="photos/z2.png" alt="">
            <h4> Zara Printed shirt</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$1200.00</p>
        </div>
        <div class="col-4">
            <img src="photos/h8.webp" alt="">
            <h4> rado Watch</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="photos/gc7.jpg" alt="">
            <h4> Gucci printed shirt</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$1000.00</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="photos/pmg2.webp" alt="">
            <h4> formal shirt</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="photos/z8.webp" alt="">
            <h4> Zara printed shirt</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$1200.00</p>
        </div>
        <div class="col-4">
            <img src="photos/pmg6.jpg" alt="">
            <h4> Blue formal shirt</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="photos/img6.webp" alt="">
            <h4> Nike T shirt</h4>
            <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$1000.00</p>
        </div>
    </div>
</div>
<!------------offer-->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="photos/exclusive.png" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusively available on Aein shopping</p>
                <h1>Smart Band 4</h1>
                <small> The Mi Smart Band Features a 39.9% Larger (then mi Band 3) AMOLED color full touch display with adjustable brightness, so everything is clear as can be.</small>
                <a href="" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>
<!--------testimonal-->
<div class="testimonal">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-qoute-left"></i>
              <p>Lorem epsom is a dummy text of the printing and type setting industry. Lorem ipsom has been the industry's standard dummy text ever    </p>  
              <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <img src="photos/user-1.png" alt="">
            <h3>sean parker</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-qoute-left"></i>
              <p>Lorem epsom is a dummy text of the printing and type setting industry. Lorem ipsom has been the industry's standard dummy text ever    </p>  
              <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <img src="photos/user-2.png" alt="">
            <h3>myk tyson</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-qoute-left"></i>
              <p>Lorem epsom is a dummy text of the printing and type setting industry. Lorem ipsom has been the industry's standard dummy text ever    </p>  
              <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <img src="photos/user-3.png" alt="">
            <h3> jhonny</h3>
            </div>
        </div>
    </div>
</div>
<!----Brands-->
<div class="brands">
    <div class="small-container">
<div class="row">
    <div class="col-5">
        <img src="photos/peter1.png" alt="">
    </div>
    <div class="col-5">
        <img src="photos/zaralogo1.png" alt="">
    </div>
    <div class="col-5">
        <img src="photos/gucci1.png" alt="">
    </div>
    <div class="col-5">
        <img src="photos/pumalogo1.png" alt="">
    </div>
    <div class="col-5">
        <img src="photos/nikelogo1.png" alt="">
    </div>
</div>
<a href="Copoun.html" class="btn1">TAP USE COUPONS &#8594;</a>
    </div>
</div>
<!---------Footer-->
<div class="footer">
    <div class="small-container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our App</h3>
                <p>Download app for Android and Ois Mobile phone. </p>
            </div>
            <div class="footer-col-2">
                <img src="photos/clothinglogo.jpeg" alt="">
                <p>Our purpose Is to sustainably Make the pleasure and Benfits of Cloths accesiable  to Many.</p>
            </div>
            <div class="footer-col-3">
                <h3>Usefull Links</h3>
                <ul>
                    <li>Coupan</li>
                    <li>Blog post</li>
                    <li>Return Policy</li>
                    <li>Join affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us </h3>
                <ul>
                    <li> Facebook</li>
                    <li>Instagram</li>
                    <li>Twitter</li>
                    <li>youtube</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!------Js for toggle menu----->
<script>
var menuItems =document.getElementById("menuItems");
 menuItems.style.maxHeight = "0px";

 function menutoggle(){
    if(menuItems.style.maxHeight == "0px"){

        menuItems.style.maxHeight = "200px"
    }
    else{
        menuItems.style.maxHeight = "0px"
    }
 }
 

</script>
</body>
</html>
