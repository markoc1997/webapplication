<link rel="stylesheet" href="../styles.css">

<style>



@media screen and (max-width: 1920px) {

#naslov {

font-size:30px;
left:0%;

}

#naslov2 {

left:0%;
font-size:20px;

}

#naslov3 {

left:0%;
font-size:20px;

}

#naslov6 {

left:0%;
font-size:12px;

}

}




@media screen and (max-width: 1199px) {

#naslov6 {

left:0%;
font-size:10px;

}




}


@media screen and (max-width: 991px) {

#naslov {

font-size:20px;
left:0%;

}

#naslov2 {

left:0%;
font-size:12px;

}

#naslov3 {

left:0%;
font-size:12px;

}

#naslov6 {

left:0%;
font-size:10px;

}
}


@media screen and (max-width: 768px) {

#naslov {

font-size:15px;

}

#naslov2 {

left:0%;
font-size:7px;

}

#naslov3 {

left:0%;
font-size:7px;

}

#naslov6 {

left:0%;
font-size:4px;

}


}



</style>

<?php

require("konekcija.php");

class kdiva {


var $conn;
var $result;
var $velikiarray = array();
var $ikateogrija = 'Politik';
var $vestukategoriji;



function __construct() {


$object_connect = new konekcija;
$this->conn = $object_connect->kreirajkonekciju();

if(isset($_GET['kategorija'])) {
	
$this->ikateogrija = $_GET['kategorija'];


}


$this->vestukategoriji = "SELECT id_vesti, naslov_vesti, kategorija_vesti, pozicija_vesti, slika FROM svevesti WHERE (kategorija_vesti='{$this->ikateogrija}' AND pozicija_vesti > 0) ORDER BY pozicija_vesti";
$this->result = mysqli_query($this->conn,$this->vestukategoriji);



}





function kreiranje() {


echo "<div style='margin-top:30px; padding-bottom:100px; margin-left:0 auto;' class='container-sm'>";

$i = 1;

while($this->velikiarray = mysqli_fetch_assoc($this->result)) {


if($i == 1) {

echo "<div class='row' style='border:0px solid red;'>";

echo "<div class='col-1' ></div>";

echo "<div  style='border:0px solid red; padding:10px;' class='col-8'>";

echo "<img class='img-fluid' src='../Images/{$this->velikiarray['slika']}'>";

echo "<div  style='border:0px solid black;' class='col-12'>";

echo "<a id='naslov'  style='color:white; background-color:#00000088; width:100%; padding:0; padding-left:10px;  margin-left:0px; bottom:0%; border:0px solid red; font-weight:bold;  text-align:left;' href='vest.php?kategorija={$this->ikateogrija}&vest={$this->velikiarray['id_vesti']}' class='carousel-caption'>
{$this->velikiarray['naslov_vesti']}
</a>";

echo "</div>";
echo "</div>";
echo "</div>";



}

if($i == 2 or $i == 3) {

if($i == 2) {

echo "<div class='row' style='border:0px solid red;'>";

echo "<div class='col-1' ></div>";

}
//1
echo "<div  style='border:0px solid red; padding:10px;' class='col-4'>";

echo "<img class='img-fluid' src='../Images/{$this->velikiarray['slika']}'>";

//2
echo "<div  style='border:0px solid black;' class='col-12'>";

echo "<a id='naslov2'  style='color:white; background-color:#00000088; width:100%; padding:0; padding-left:10px;  margin-left:0px; bottom:0%; border:0px solid red; font-weight:bold;  text-align:left;' href='vest.php?kategorija={$this->ikateogrija}&vest={$this->velikiarray['id_vesti']}' class='carousel-caption'>
{$this->velikiarray['naslov_vesti']}
</a>";

//1
echo "</div>";
//2
echo "</div>";


if($i == 3) {

echo "</div>";

}

}



if($i == 4 or $i == 5) {

if($i == 4) {

echo "<div class='row' style='border:0px solid red;'>";

echo "<div class='col-1' ></div>";

}
//1
echo "<div  style='border:0px solid red; padding:10px;' class='col-4'>";

echo "<img class='img-fluid' src='../Images/{$this->velikiarray['slika']}'>";

//2
echo "<div  style='border:0px solid black;' class='col-12'>";

echo "<a id='naslov2'  style='color:white; background-color:#00000088; width:100%; padding:0; padding-left:10px;  margin-left:0px; bottom:0%; border:0px solid red; font-weight:bold;  text-align:left;' href='vest.php?kategorija={$this->ikateogrija}&vest={$this->velikiarray['id_vesti']}' class='carousel-caption'>
{$this->velikiarray['naslov_vesti']}
</a>";

//1
echo "</div>";
//2
echo "</div>";


if($i == 5) {

echo "</div>";

}

}

if($i == 6 or $i == 7 or $i == 8 or $i == 9) {

if($i == 6) {

echo "<div class='row' style='border:0px solid red;'>";

echo "<div class='col-1' ></div>";

}
//1
echo "<div  style='border:0px solid red; padding:10px;' class='col-2'>";

echo "<img class='img-fluid' src='../Images/{$this->velikiarray['slika']}'>";

//2
echo "<div  style='border:0px solid black;' class='col-12'>";

echo "<a id='naslov6'  style='color:white; background-color:#00000088; width:100%; padding:0; padding-left:10px;  margin-left:0px; bottom:0%; border:0px solid red; font-weight:bold;  text-align:left;' href='vest.php?kategorija={$this->ikateogrija}&vest={$this->velikiarray['id_vesti']}' class='carousel-caption'>
{$this->velikiarray['naslov_vesti']}
</a>";

//1
echo "</div>";
//2
echo "</div>";


if($i == 9) {

echo "</div>";

}

}

	












$i++;


}


echo "</div>";

}
}




?>

