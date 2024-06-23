<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>
<script> 
function seePassword(){
    var x = document.getElementById("pswrd");
    if (x.type === "password"){
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/usersignin.css">
    <title>Login Page</title>
</head>

<body>

        <div class="container">
            <form action="includes/login.php" method="post">
                <h1>Sign In Account</h1></br></br>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" id="pswrd" required>
                <input type="checkbox" onclick="seePassword()">
                <a href="includes/forgotpassword.php">Forgot Your Password?</a>
                <button type="submit" name="login" class="btn">Log In</button></br>
                <p>Don't have an account? <a href="signup.php">Register Here</a></p>
                <a href="index.php">Back to Website</a>
               
            </form>
        </div>
        
    </body>
</html>
