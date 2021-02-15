<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="styles.css">

</head>


<body>



<?php

require("inc/connection.php");

require("inc/navigacija.php");

require("inc/kdiva.php");

$objekat = new kdiva;
$objekat->kreiranje();

//require("inc/footer.php");

?>



</body>


</html>

























