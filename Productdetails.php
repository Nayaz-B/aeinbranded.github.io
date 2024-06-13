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
            <li><a href="Shop">Shop</a></li>
            <li><a href="Cantactus">Cantactus</a></li>
        </ul>
    </nav>
    <a href="Cart.php" ><img src="photos/shopping-bag.png" width="30px" height="30px"></a>
    <img src="photos/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
</div>
<!-------single product details-->
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="photos/gallery-1.jpg" width="100%" id="Productimg">


            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="photos/gallery-1.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="photos/gallery-2.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="photos/gallery-3.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="photos/gallery-4.jpg" width="100%" class="small-img">
                </div>
            </div>
        </div>
        <div class="col-2">
            <p>Home / T shirt</p>
            <h1>White printed T shirt by Puma</h1>
            <h4>$500.00</h4>
            <select>
                <option>Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>L</option>
                <option>Medium</option>
                <option>Small</option>
            </select>
            <input type="number" value="1">
            <a href="Cart.php" class="btn">Add to Cart</a>
            <h3>Product Details  <i class="fa fa-indent"></i></h3>
            <br>
            <p>Give your Summer Wardrobe a style upgrade with Puma Mens Active T-Shirt. Team it with a Pair of shirt for your morning workouts or a denims for an evening out with the friends  </p>
        </div>
    </div>
</div>
<!----title------>
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
</div>
<!----products-->
<div class="small-container">

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
<!----js for product gallery-->
<script>
    var Productimg = document.getElementById("Productimg");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function()
    {
        Productimg.src = SmallImg[0].src
    }
    SmallImg[1].onclick = function()
    {
        Productimg.src = SmallImg[1].src
    }
    SmallImg[2].onclick = function()
    {
        Productimg.src = SmallImg[2].src
    }
    SmallImg[3].onclick = function()
    {
        Productimg.src = SmallImg[3].src
    }
</script>
</body>
</html>