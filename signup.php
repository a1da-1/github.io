<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password field do not match!!");
document.signup.confirmpassword.focus();
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
    <link rel="stylesheet" href="css/usersignin.css">
    <title>Login Page</title>
</head>

<body>

        <div class="container">
            <form action="includes/register.php" method="post" name="signup" onSubmit="return valid();">
                </br></br><h1>Create Account</h1></br></br>
                <input type="text" placeholder="Full Name" name="fullname" required>

                <input type="text" placeholder="Phone Number*" name="phoneno" maxlength="10" required>

                <input type="email" placeholder="Email*" name="email" id="email" onBlur="checkAvailability()" required>
                
                <input type="password" placeholder="Password*" name="password" id="pswrd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase letter and lowercase letter, and at least 6 or more characters" required>
                <input type="checkbox" onclick="seePassword()">

                <input type="password" placeholder="Confirm Password*" id="cpswrd" name="confirmpassword" required>
                <input type="checkbox" onclick="seecPassword()">

                <button type="submit" value="Sign Up" name="signup" id="submit" class="btn">Sign Up</button>






                <p>Already have an account? <a href="signin.php">Log In Here</a></p>
                </br>
            </form>
        </div>
        
    </body>
</html>
