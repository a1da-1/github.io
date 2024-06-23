<?php
session_start();
include('config.php');
error_reporting(0);

if(isset($_POST['update']))
  {
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$newpassword=md5($_POST['newpassword']);
  $sql ="SELECT Email FROM user WHERE Email=:email and PhoneNo=:phoneno";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':phoneno', $phoneno, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update user set Password=:newpassword where Email=:email and PhoneNo=:phoneno";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':phoneno', $phoneno, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
echo "<script>alert('Your Password succesfully changed');</script>";
echo "<script type='text/javascript'> document.location = '../signin.php'; </script>";
}
else {
echo "<script>alert('Email or Phone Number is invalid');</script>"; 
}
}

?>
<script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match!!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}

function seePassword(){
    var x = document.getElementById("pswrd");
    if (x.type === "password"){
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function seecPassword(){
    var c = document.getElementById("cpswrd");
    if (c.type === "password"){
        c.type = "text";
    } else {
        c.type = "password";
    }
}
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/usersignin.css">
    <title>Login Page</title>
</head>

<body>

        <div class="container">
            <form method="post" name="update" onSubmit="return valid();">
                </br></br><h1>Password Recovery</h1></br></br>
                
                <input type="email" placeholder="Email*" name="email" id="email" onBlur="checkAvailability()" required>
                
                <input type="text" placeholder="Phone Number*" name="phoneno" maxlength="10" required>

                <input type="password" placeholder="Password*" name="newpassword" id="pswrd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase letter and lowercase letter, and at least 6 or more characters" required>
                <input type="checkbox" onclick="seePassword()">

                <input type="password" placeholder="Confirm Password*" id="cpswrd" name="confirmpassword" required>
                <input type="checkbox" onclick="seecPassword()">

                <button type="submit" value="Update" name="update" id="submit" class="btn">Update Password</button>
              
                <a href="../signin.php">Back to Login</a>
                </br>
            </form>
        </div>
        
    </body>
</html>
