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
    <img src="photos/shopping-bag.png" width="30px" height="30px">
    <img src="photos/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
</div>
<!-------Cart items details-->
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="photos/buy-1.jpg" alt="">
                        <div>
                            <p>Red Printed T shirt</p>
                            <small>$50.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="photos/buy-2.jpg" alt="">
                        <div>
                            <p>Black sparks shous</p>
                            <small>$75.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$75.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="photos/buy-3.jpg" alt="">
                        <div>
                            <p>Track shoot pant</p>
                            <small>$75.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$75.00</td>
            </tr>
        </tr>
    </table>
    <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>$200</td>
          </tr>  
          <tr>
            <td>Tax</td>
            <td>$35</td>
          </tr>  
          <tr>
            <td>Total</td>
            <td>$235</td>
          </tr>  
        </table>
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