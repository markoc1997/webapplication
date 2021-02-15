<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
<title>Registration</title>
<link rel="stylesheet" href="styles.css"/>

</head>
<body style="margin:0px; padding:0px;" >

<!--GUI-->
<?php

require('inc/navigacija.php');
require('inc/connection.php');

?>


<div style="margin-top:50px; margin-left:0 auto; padding-bottom:0px; " class="container-sm border-bottom ">

<div class="row">
<div class="col-1"></div>

<div  style="border:0px solid black;" class="col-8">

<form style="border:3px solid white; background-color:transparent;" action="" method="post">

<div class="form-group">

<h1 style="text-align:center;" class="login-title">Registration</h1>
<input class="form-control" id="exampleFormControlInput1" value="<?php if(isset($_REQUEST['username'])) { echo $_REQUEST['first_name']; } ?>"  type="text" name="first_name" placeholder="First name" required />
<br>
<input class="form-control" value="<?php if(isset($_REQUEST['username'])) { echo $_REQUEST['last_name']; } ?>" type="text" class="login-input" name="last_name" placeholder="Last name" required />
<br>
<input class="form-control" value="<?php if(isset($_REQUEST['username'])) { echo $_REQUEST['username']; } ?>" type="text" class="login-input" name="username" placeholder="Username" required />
<br>
<input class="form-control" value="<?php if(isset($_REQUEST['email'])) { echo $_REQUEST['email']; } ?>" type="email" class="login-input" name="email" placeholder="Email Adress" required>
<br>
<input class="form-control" type="password" class="login-input" name="password" placeholder="Password" required>
<br>
<input class="form-control" style="background-color:#07a1e2" type="submit" name="submit" value="Register" required>


</div>

</form>

</div>
</div>
</div>

<?php

// When form submitted, insert values into the database.
if($_SERVER["REQUEST_METHOD"] == "POST") {
// removes backslashes
$username = stripslashes($_REQUEST['username']);
//escapes special characters in a string
$username = mysqli_real_escape_string($conn, $username);
$email    = stripslashes($_REQUEST['email']);
$email    = mysqli_real_escape_string($conn, $email);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($conn, $password);

proveriubazi($username,$email,$conn,$password);

}
	

function proveriubazi($username,$email,$conn,$password) {


$queryusername = "SELECT * FROM korisnici WHERE username = '{$username}'";
$rezultatusername = mysqli_query($conn,$queryusername);
$brojredovausername = mysqli_num_rows($rezultatusername);

$queryemail = "SELECT * FROM korisnici WHERE email = '{$email}'";
$rezultatemail = mysqli_query($conn,$queryemail);
$brojredovaemail = mysqli_num_rows($rezultatemail);

if($brojredovausername >= 1) {

$krajnjaporuka = "This username is already in use. Please use another one!";

} else if($brojredovaemail >= 1) {

$krajnjaporuka = "This email is already in use.Please use another one!";


} else {

$krajnjaporuka = "You have successfully registered";
ubpisubazu($username,$email,$conn,$password);
	
}

echo "<p style='font-size:20px; color:red; margin-left:40%;' >";
echo $krajnjaporuka;
echo "</p>";



}
	
function ubpisubazu($username,$email,$conn,$password) {

$password = md5($password);
$queryupis = "INSERT INTO korisnici(username,email,password) VALUES ('{$username}','{$email}','{$password}')";
$upis = mysqli_query($conn,$queryupis);

//header("Refresh:1; url=login.php");
//echo "<script type='text/javascript'>window.top.location='login.php';</script>"; exit;
echo "<script type='text/javascript'> setTimeout(function(){ window.location = 'login.php'; },2000); </script>";

}




?>
</body>
</html>
