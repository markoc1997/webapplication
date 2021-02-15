<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
<title>Login</title>
<link rel="stylesheet" href="styles.css"/>




</head>

<body style="margin:0px; padding:0px;" >

<?php

require('inc/navigacija.php');
require('inc/connection.php');

$krajnjaporuka = "";


$korisnik = "";
$sifra = "";

?>


<div style="margin-top:50px; margin-left:0 auto; padding-bottom:100px; padding-bottom:0px; " class="container-sm border-bottom ">


<div class="row">

<div class="col-1" ></div>

<div  style="border:0px solid black;" class="col-8">

<form name="login" method="post" >

  <div class="form-group">
  
    <h1 style="text-align:center;" class="login-title">Login</h1>
	<input name="username" placeholder="Username" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
	<br>
	<input name="password" placeholder="Password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
	<br>
	<input name="submit" style="background-color:#07a1e2; color:white;" value="Login" placeholder="Password" type="submit" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
	
</div>

</form>

</div>
</div>
</div>



<?php


if($_SERVER["REQUEST_METHOD"] == "POST") {


$korisnik = clean($_POST["username"]);
$sifra = clean($_POST["password"]);
clean($korisnik);
clean($korisnik);

proveriubazi($korisnik,$sifra,$conn,$krajnjaporuka);

}
	
	

function clean($string) {

$string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.

return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.


}





function proveriubazi($korisnik,$sifra,$conn,$krajnjaporuka) {

$sifra = md5($sifra);

$querykorisnik = "SELECT * FROM korisnici WHERE username = '{$korisnik}' AND password = '{$sifra}'";
$pronadjenkorisnik = mysqli_query($conn,$querykorisnik);
$brojredova = mysqli_num_rows($pronadjenkorisnik);



if($brojredova >= 1) {

$krajnjaporuka = "You Have Successfully Logged in!";
//session_start();
$_SESSION["username"] = $korisnik;


header("Refresh:1; url=index.php");
	
} else {
	
$krajnjaporuka = "Try again!";

}


echo "<p style='color:red; margin-left:40%; ' >{$krajnjaporuka}</p>";

if(isset($_SESSION["username"])) {


}

}
	









?>

</body>
</html>
