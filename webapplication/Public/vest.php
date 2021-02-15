<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="styles.css">

</head>

<body>




<?php

require("inc/konekcija.php");
require("inc/navigacija.php");


class vesti {

var $idvesti = 50;
var $izabkateogrija = "Novo";

var $conn;
var $result;

var $vest_rezultat;
var $queryselektuvest;
var $izabranavest;

var $queryselektkomentara;
var $komentar_rezultat;
var $brojkomentara;


function __construct() {


$object_connect = new konekcija;
$this->conn = $object_connect->kreirajkonekciju();

if(isset($_GET['vest'])) {

$this->idvesti = $_GET['vest'];

}


if(isset($_GET['kategorija'])) {

$this->izabkateogrija = $_GET['kategorija'];

}

$this->queryselektuvest = "SELECT * FROM svevesti WHERE (kategorija_vesti='{$this->izabkateogrija}' AND id_vesti='{$this->idvesti}')";
$this->vest_rezultat = mysqli_query($this->conn,$this->queryselektuvest);
$this->izabranavest = mysqli_fetch_assoc($this->vest_rezultat);


$this->queryselektkomentara = "SELECT * FROM komentari WHERE (vest_id='{$this->idvesti}')";
$this->komentar_rezultat = mysqli_query($this->conn,$this->queryselektkomentara);
$this->brojkomentara = mysqli_num_rows($this->komentar_rezultat);


}




function kreirajvest() {

echo "<div style='margin-top:50px; margin-left:0 auto;  padding-bottom:100px; border 0px solid red;' class='container-sm'>";

//Start_Row
echo "<div style='border:0px solid red;' class='row'>";

echo "<div class='col-1' ></div>";

echo "<div  style='border:0px solid black;' class='col-8'>";

echo "<h1>{$this->izabranavest['naslov_vesti']}</h1> ";

echo "<p class='p_text'>{$this->izabranavest['uvodni_text']}</p>";

echo "</div>";

echo "</div>";
//End_Row


//Start_Row
echo "<div style='border:0px solid red;' class='row'>";

echo "<div class='col-1' ></div>";

echo "<div  style='border:0px solid black;' class='col-8'>";

echo " <img class='img-fluid' id='slika_v' src='../Images/{$this->izabranavest['slika']}' > ";

echo "</div>";

echo "</div>";
//End_Row


//Start_Row
echo "<div style='border:0px solid red;' class='row'>";

echo "<div class='col-1' ></div>";

echo "<div  style='border:0px solid black;' class='col-8'>";

echo "<br>";

echo "<p class='p_text' >{$this->izabranavest['prvi_pasus']}</p>";
echo "<p class='p_text' >{$this->izabranavest['drugi_pasus']}</p>";
echo "<p class='p_text' >{$this->izabranavest['treci_pasus']}</p>";
echo "<p class='p_text' >{$this->izabranavest['cetvrti_pasus']}</p>";
echo "<p class='p_text' >{$this->izabranavest['peti_pasus']}</p>";
echo "<p class='p_text' >{$this->izabranavest['sesti_pasus']}</p>";
echo "<p class='p_text' >{$this->izabranavest['sedmi_pasus']}</p>";


echo " <div id='div_kom'>";
echo " <img id='img_kom' src='../GUI/komentar.png' > ";
echo " <a id='a_kom' href='comments.php?kategorija={$this->izabkateogrija}&vest={$this->idvesti}' >Kommentare({$this->brojkomentara})</a> ";
echo "</div>";

echo "</div>";

echo "</div>";
//End_Row










echo "</div>";

}

}




if(isset($_GET['kategorija'])) {

$objekat = new vesti;
$objekat->kreirajvest();

//require("inc/footer.php");

}




?>



</body>

</html>
