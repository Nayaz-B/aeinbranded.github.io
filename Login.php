<?php 
session_start();

include("DB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$firstname=$_POST['fname'];
$gmail=$_POST['mail'];
$password=$_POST['pass'];
if(!empty($gmail) && !empty($password)&& !is_numeric($gmail))
{
    $sql ="select * from form where email='$gmail' or fname='$firstname' and pass='$password'";
    $result = mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count>0){
        header("location: index.php");
    }
   else{
    echo "<script type='text/javascript'> alert('wrong email or password')</script>";
   }
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
    <div class="login">
        <h1>Login</h1>
        <form  action="Login.php" method="POST" >
            <label>Email</label>
            <input type="text" name="mail" id="mail" required>
            <label>Password</label>
            <input type="password" name="pass" id="pass" required>
            <input type="submit" name="" value="submit">
            <p>Not have an account? <a href="Signup.php">Sign Up Here</a> </p>
        </form>
    </body>
    </html>