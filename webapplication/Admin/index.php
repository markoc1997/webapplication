<html>

<head>

<link rel="stylesheet" href="style.css">

</head>

<body>


<?php require("inc/konekcija.php"); ?>
<?php require("inc/navigacija.php"); ?>


<?php

class pocetna {


var $ikateogrija = 'Politik';
var $defaularray = array();
var $svevesti = array();
var $defaultvest;
var $resultdefault;
var $red;
var $vestukategoriji;
var $result;
var $conn;
var $row;




function __construct() {


$object_connect = new konekcija;
$this->conn = $object_connect->kreirajkonekciju();


if(isset($_GET['kategorija'])) {

$this->ikateogrija = $_GET['kategorija'];

}


$this->defaultvest = "SELECT * FROM svevesti WHERE id_vesti = 50";
$this->resultdefault = mysqli_query($this->conn,$this->defaultvest);

$this->red = mysqli_fetch_assoc($this->resultdefault);


for($i=0; $i<10; $i++) {
	
$this->defaularray[] = $this->red;

}


$this->vestukategoriji = "SELECT * FROM svevesti WHERE (kategorija_vesti = '{$this->ikateogrija}' AND pozicija_vesti >= 0) ORDER BY id_vesti";
$this->result = mysqli_query($this->conn,$this->vestukategoriji);


while($this->row = mysqli_fetch_assoc($this->result)){

$this->svevesti[] = $this->row;
$this->defaularray[$this->row['pozicija_vesti']] = array_replace($this->row);


}




$this->kreiranje();




}









function kreiranje() {


//<!-- Positions -->
echo "<div id='position_div'>";


echo "<h1 id='position_h1'>Positions </h1>";
echo "<hr>";

echo "<div id='position_include'>";

include_once("inc/pozicijevesti.php");

echo "</div>";


echo "</div>";
//<!-- Positions -->





//<!-- Site overview -->
echo "<div id='overwier_div'>";


echo "<h1 id='overwier_h1' >Site overview</h1>";
echo "<hr>";

echo "<div id='div_select'>";

echo "<span id='span_select'>Selected Category:</span>";
echo "<select id='select_select' onchange='myFunction(this.value)' >";

echo "<option value='' >Select</option>";
echo "<option value='Politik' >Politik</option>";
echo "<option value='Wirtschaft' >Wirtschaft</option>";
echo "<option value='Sport' >Sport</option>";
echo "<option value='Digitales' >Digitales</option>";
echo "<option value='Kultur' >Kultur</option>";

echo "</select>";

echo "</div>";

echo "<br>";
echo "<br>";


 

include_once("inc/kdiva.php");


echo "</div>";
//<!-- Site overview -->





//<!-- Editing -->
echo "<div id='div_edit'>";

echo "<h1 id='h1_edit'>Editing</h1>";
echo "<hr>";

echo "<div id='div_include'>";

require("inc/newseditting.php");

echo "</div>";


echo "</div>";
//<!-- Editing -->


echo "<div style='clear:both' ></div>";
echo "<div style='height:150px;' ></div>";


}



}



$obj = new pocetna;

?>







<script>

function myFunction(prosledjen) {
	

window.location = "?kategorija="+prosledjen;

}


</script>


</body>


</html>





