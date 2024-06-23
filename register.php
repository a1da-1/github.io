<?php
session_start();
include('config.php');
if(isset($_POST['signup']))
{
$fname=$_POST['fullname'];
$email=$_POST['email']; 
$phoneno=$_POST['phoneno'];
$password=md5($_POST['password']); 
$sql="INSERT INTO user(FullName,Email,PhoneNo,Password) VALUES(:fname,:email,:phoneno,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':phoneno',$phoneno,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successful. Now you can login');</script>";
echo "<script type='text/javascript'> document.location = '../signin.php'; </script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script type='text/javascript'> document.location = '../signup.php'; </script>";
}
}

?>
<script>
function checkAvailability() {

jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
},
error:function (){}
});
}
</script>




