<?php 
$con=mysqli_connect("localhost","root","","register",4000);
if($con){
    echo"connected";
}
else{
    echo "not connected";
}
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$Gender=$_POST['gender'];
$num=$_POST['number'];
$address=$_POST['add'];
$gmail=$_POST['mail'];
$password=$_POST['pass'];
$sql="insert into form (fname,lname, gender,cnum,address,mail,pass) values ('$firstname','$lastname','$Gender','$num','$address','$gmail','$password')";
$result =mysqli_query($con,$sql);
if($result){
echo "<script type='text/javascript'> alert('Successfully Register')</script>";
}
else {
echo"<script type='text/javascript'> alert('Please Enter some Valid information')</script>";
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
        <form action="Registration.php" method="POST" onsubmit="return validate()">
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
            <label>Password</label>
            <input type="password" name="pass" id="pass" required>
            <input type="submit" name="email" value="Submit">
        </form>
        <p>By clicking the sign Up button, you agree to our<br>
        <a href="">Terms and Condition</a> and<a href="#">Policy privacy</a> </p>
        <p>Already you an account? <a href="Login.php">Login Here</a> </p>
    </div>
</body>
</html>