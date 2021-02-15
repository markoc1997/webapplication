<link rel="stylesheet" href="../styles.css">
<?php

require("konekcija.php");

class kdiva {


var $conn;
var $result;
var $velikiarray = array();
var $ikateogrija = 'Novo';
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


echo "<div id='divzasve_kdiva'>";


$i = 1;

while($this->velikiarray = mysqli_fetch_assoc($this->result)) {


if($i == 1) {

echo "<div style='background-image:url(../Images/{$this->velikiarray['slika']})' class='divvest1'>";
echo "<div class='divnaslov1'>";
echo "<a class='anaslov1' href='vest.php?kategorija={$this->ikateogrija}&vest={$this->velikiarray['id_vesti']}'>";

} 

if($i == 2 or $i == 3) {

echo "<div style=' background-image:url(../Images/{$this->velikiarray['slika']})' class='divvest2'>";
echo "<div class='divnaslov2' >";
echo "<a class='anaslov2' href='vest.php?kategorija={$this->ikateogrija}&vest={$this->velikiarray['id_vesti']}'>";

}

if($i >= 4) {
	
echo "<div style='background-image:url(../Images/{$this->velikiarray['slika']})' class='divvest3'>";
echo "<div class='divnaslov3' >";
echo "<a class='anaslov3' href='vest.php?kategorija={$this->ikateogrija}&vest={$this->velikiarray['id_vesti']}'>";

} 



echo $this->velikiarray['naslov_vesti'];
echo "</a>";

echo "</div>";

echo "</div>";	

$i++;

}

echo "</div>";



}


}




?>

