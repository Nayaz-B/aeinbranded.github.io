<?php

include ("Db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Aein</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
    
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
</div>
<div class="small-container">
    <div class="row row-2">
        <h2>All Products</h2>
        <select>
            <option>Default Shorting</option>
            <option>Short by price</option>
            <option>Short by Papularity</option>
            <option>short by  ratings</option>
            <option>Short by Sale</option>
        </select>
    </div>

    <div class="row"><h2></h2>
        <div class="col-4">
            <a href="Productdetails.php"><img src="photos/buy-1.jpg" alt=""></a>
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
            <img src="photos/k5.jpg" alt="">
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
            <img src="photos/h8.webp" alt="">
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
            <img src="photos/gc7.jpg" alt="">
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
    <div class="row">
        <div class="col-4">
            <img src="photos/pmg2.webp" alt="">
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
            <img src="photos/z8.webp" alt="">
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
            <img src="photos/pmg6.jpg" alt="">
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
            <img src="photos/img6.webp" alt="">
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
    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594;</span>
    </div>
</div>

<!--------Brands----------->
<div class="brands">
    <div class="small-container">
        <h1 class="title"> New  Brands and collections</h1>
<div class="row">
    <div class="col-5">
       <a href="PeterEngland.html"><img src="photos/peter1.png" alt="">
        <h2>Peter England</h2></a>
    </div>
    <div class="col-5">
       <a href="Zara.html"> <img src="photos/zaralogo1.png" alt="">
        <h2>ZARA</h2></a>
    </div>
    <div class="col-5">
       <a href="Gucci.html" ><img src="photos/gucci1.png" alt="">
        <h2>GUCCi</h2></a>
    </div>
    <div class="col-5">
        <a href="CalvinKlein.html"><img src="photos/pumalogo1.png" alt="">
        <h2>PUMA</h2></a>
    </div>
    <div class="col-5">
      <a href="Nike.html"><img src="photos/nikelogo1.png" alt="">
        <h2>NIKE</h2></a>
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