<?php 
session_start();

include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$gmail=$_POST['mail'];
$password=$_POST['password'];
if(!empty($gmail) && !empty($password)&& !is_numeric($gmail))
{
    $query =" select * into from  login where mail = '$gmail' limit 1";
    $result = mysqli_query($con,$query);
    if($result)
    {
        if($result && mysqli_num_rows($result)> 0)
        {
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['password']== $password)
            {
                header("location : index.php");
                die;
            }
        }
    }
    echo "<script type='text/javascript'> alert('wrong username or password')</script>";
}
else{
    echo "<script type='text/javascript'> alert('wrong username or password')</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginForm.css">
    <title>Login Form</title>
</head>
<body>
    <body>
        <div class="wrapper">
            <form action="LoginForm1.php" method="POST">
                <h1>Login</h1>
                <div class="input-box">
                <input type="text" placeholder="Email" id="gmail"  required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" id="password"  required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Dont have an account? <a href="Signup.php">Register</a></p>
            </div>
    
            </form>
        </div>
    </body>
    
</body>
</html>