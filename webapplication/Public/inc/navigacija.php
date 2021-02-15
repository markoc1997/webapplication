<!DOCTYPE HTML>

<html lang="en">

<head>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>

<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="inc/nav.css">

<!-- <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap centered menu, navbar, mega menu examples" />
<meta name="description" content="Bootstrap centered navbar examples for any type of project, Bootstrap 4" />  -->

<style type="text/css">







</style>






<link rel="stylesheet" href="nav.css">

</head>


<body style="padding-top:0px; margin:0px;">


<?php


session_start();


?>



<nav style="background-color:#07a1e2; border:0px solid red;" class="navbar navbar-expand-lg navbar-dark ">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
<span class="navbar-toggler-icon"></span>
</button>
  


<div id="navigacijaborder" style="margin-top:0px; margin-left:0 auto;" id="main_nav" class="container-sm">


<div id="main_nav" style="border:0px solid black; padding-bottom:0px; " class="collapse navbar-collapse">	



<ul style="font-size:20px;" class="navbar-nav ">


<li  id="item0"> <img src="../GUI/ikona.jpg" ></li>
<li  id="item1" style="font-size:20px; margin-left:30px;"  ><a style="color:white;"  href="index.php?kategorija=Politik">Politik </a> </li>
<li  id="item2" style="font-size:20px; margin-left:30px; " ><a style="color:white;"  href="index.php?kategorija=Wirtschaft">Wirtschaft </a></li>
<li  id="item3" style="font-size:20px; margin-left:30px; " ><a style="color:white;"  href="index.php?kategorija=Sport">Sport </a></li>
<li  id="item4" style="font-size:20px; margin-left:30px; " ><a style="color:white;"  href="index.php?kategorija=Digitales">Digitales </a></li>
<li  id="item5" style="font-size:20px; margin-left:30px; " ><a style="color:white;"  href="index.php?kategorija=Kultur">Kultur </a></li>
<li  id="item6" style="font-size:20px; margin-left:120px; visibility: hidden;" ><a style="color:white;"  href=""></a></li>


<?php
  
if(isset($_SESSION["username"])) {
	
echo "<li id='item7' style='font-size:16px; margin-left:30px; color:white;' >Eingeloggt: <a style='color:white; font-style: italic;'  href=''>{$_SESSION['username']}</a></li>";
echo "<li  id='item8' style='font-size:14px; margin-left:30px;' ><a style='color:black; font-weight:bold;' href='functions/functions.php?izloguj=1'>Logout </a></li>";

} else {
	
echo "<li id='registracija' style='font-size:15px; margin-left:20px;' ><img id='slikareg' src='../GUI/regs.png' > <a id='registrierung' style='color:white;  '  href='registration.php'> Registrierung </a></li>";
echo "<li id='anmslika' style='font-size:15px; margin-left:20px;' ><img id='slikaanm' src='../GUI/log.png' > <a style='color:white;'  href='login.php'> Anmeldung  </a> </li>";

}

?>



</ul>
	
		

</div>



</div>



</nav>





</body>



</html>