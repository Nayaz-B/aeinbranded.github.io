<?php 
session_start();
include ("DB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$Gender=$_POST['gender'];
$num=$_POST['number'];
$address=$_POST['add'];
$gmail=$_POST['mail'];
$password=$_POST['pass'];
if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
{
$sql="insert into form (fname,lname, gender,cnum,address,email,pass) values ('$firstname','$lastname','$Gender','$num','$address','$gmail','$password')";
$result=mysqli_query ($con,$sql);
echo "<script type='text/javascript'> alert('Successfully Register')</script>";
}
else {
echo"<script type='text/javascript'> alert('Please Enter some Valid information')</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login and Register</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="signup">
        <h1>Sign UP</h1>
        <h4>Its free and only take a minute</h4>
        <form action="Signup.php" method="POST" onsubmit="return validate()">
            <label>First Name</label>
            <input type="text" name="fname" id="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" id="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" id="gender"  required>
            <label>Cantact Address</label>
            <input type="tel" name="number" id="numder" required>
            <label>Address</label>
            <input type="text" name="add"  id="add" required>
            <label>Email</label>
            <input type="email" name="mail" id="mail" required>
            <label for="pass" >Password</label>
            <input type="password" name="pass" id="pass"  required onkeyup="demo()">
            <input type="submit" name="email" value="Submit" >
            <ul>
            <li id="upper">Atleast one UpperCase</li>
            <li id="lower">Atleast one LowerCase</li>
            <li id="num">Atleast one number</li>
            <li id="special">Atleast one special charecter</li>
            <li id="length">minimum 8 charecters</li>
        </ul>
            <script>
                function demo(){
                    var pass=document.getElementById("pass");
                    
                    var upper=document.getElementById("upper");
                    var Lower=document.getElementById("lower");
                    var num=document.getElementById("num");
                    var special=document.getElementById("special");
                    var length=document.getElementById("length");
                    
                    if(pass.value.match(/[0-9]/)){
                        num.style.color="green";

                    }
                    else{
                        num.style.color="red";
                    }
                    if(pass.value.match(/[A-Z]/)){
                    upper.style.color="green";

                    }
                    else{
                        upper.style.color="red";
                    }
                    if(pass.value.match(/[a-z]/)){
                    Lower.style.color="green";

                    }
                    else{
                        Lower.style.color="red";
                    }
                   if(pass.value.match(/[!@#$%^&*_+]/)){
                        special.style.color="green";
                    }
                    else{
                        special.style.color="red";
                    }
                    if (pass.value.length>=8){
                       length.style.color="green";
                    }
                    else{
                        length.style.color="red";
                    }
                    }
              
            </script>
            <p>By clicking the sign Up button, you agree to our<br>
        <a href="">Terms and Condition</a> and<a href="#">Policy privacy</a> </p>
        <p>Already you an account? <a href="Login.php">Login Here</a> </p>
        </form>
        
    </div>
</body>
</html>