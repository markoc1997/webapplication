<html>

<head>

<link rel="stylesheet" href="style.css">

</head>


<script>

function auto_grow(element) {
	
element.style.height = "5px";
element.style.height = (element.scrollHeight)+"px";

}



function prosiri() {

//var drugi = document.getElementById("prviprosledjen");

naslov.style.height = "5px";
naslov.style.height = (naslov.scrollHeight)+"px";

uvod.style.height = "5px";
uvod.style.height = (uvod.scrollHeight)+"px";

prvipasus.style.height = "5px";
prvipasus.style.height = (prvipasus.scrollHeight)+"px";

drugipasus.style.height = "5px";
drugipasus.style.height = (drugipasus.scrollHeight)+"px";

trecipasus.style.height = "5px";
trecipasus.style.height = (trecipasus.scrollHeight)+"px";

cetvrtipasus.style.height = "5px";
cetvrtipasus.style.height = (cetvrtipasus.scrollHeight)+"px";

petipasus.style.height = "5px";
petipasus.style.height = (petipasus.scrollHeight)+"px";

sestipasus.style.height = "5px";
sestipasus.style.height = (sestipasus.scrollHeight)+"px";

sedmipasus.style.height = "5px";
sedmipasus.style.height = (sedmipasus.scrollHeight)+"px";






}

</script>



<body onload="prosiri()" >

<?php

require("inc/konekcija.php");
require("inc/navigacija.php");

class editvesti {

var $izabkateogrija;
var $idvesti;

var $queryselektuvest;
var $vest_rezultat;
var $izabranavest;

var $queryselektkomentara;
var $komentar_rezultat;
var $brojkomentara;

var $conn;







function __construct() {


$object_connect = new konekcija;
$this->conn = $object_connect->kreirajkonekciju();

$this->izabkateogrija = $_GET['kategorija'];
$this->idvesti = $_GET['vest'];

$this->queryselektuvest = "SELECT * FROM svevesti WHERE (kategorija_vesti='{$this->izabkateogrija}' AND id_vesti='{$this->idvesti}')";
$this->vest_rezultat = mysqli_query($this->conn,$this->queryselektuvest);
$this->izabranavest = mysqli_fetch_assoc($this->vest_rezultat);



$this->queryselektkomentara = "SELECT * FROM komentari WHERE (vest_id='{$this->idvesti}')";
$this->komentar_rezultat = mysqli_query($this->conn,$this->queryselektkomentara);
$this->brojkomentara = mysqli_num_rows($this->komentar_rezultat);

$this->kreiranje();


}



function kreiranje() {


echo "<div id='divzasve'>";

echo "<br>";

echo "<form id='editvesti_form' action='functions/izmenavesti.php' method='POST' enctype='multipart/form-data' >";

echo "<div>";
echo "<textarea name='naslov' id='editvesti_textarea' onclick='auto_grow(this)' oninput='auto_grow(this)' type='text' >{$this->izabranavest['naslov_vesti']}</textarea>";
echo "</div>";

echo "<div class='div_paragraf'>";
echo "<textarea name='uvod' onclick='auto_grow(this)' oninput='auto_grow(this)' id='div_uvod'>{$this->izabranavest['uvodni_text']}</textarea>";
echo "</div>";

echo "<div class='div_paragraf' >";
echo "<img id='editvesti_img' src='../Images/{$this->izabranavest['slika']}'>";
echo "</div>";
echo "<br>";
echo "<div class='div_paragraf' >";
echo "<span>New Image(760x350)</span>";
echo "<input type='file' name='slika'>";
echo "</div>";
echo "<br>";
echo "<div class='div_paragraf' >";
echo "<textarea name='prvipasus' id='prvipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' class='editvesti_pasus' >{$this->izabranavest['prvi_pasus']}</textarea>";
echo "</div>";

echo "<div class='div_paragraf' >";
echo "<textarea name='drugipasus' id='drugipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' class='editvesti_pasus' >{$this->izabranavest['drugi_pasus']}</textarea>";
echo "</div>";

echo "<div class='div_paragraf' >";
echo "<textarea name='trecipasus' id='trecipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' class='editvesti_pasus' >{$this->izabranavest['treci_pasus']}</textarea>";
echo "</div>";

echo "<div class='div_paragraf' >";
echo "<textarea name='cetvrtipasus' id='cetvrtipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' class='editvesti_pasus' >{$this->izabranavest['cetvrti_pasus']}</textarea>";
echo "</div>";

echo "<div class='div_paragraf' >";
echo "<textarea name='petipasus' id='petipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' class='editvesti_pasus' >{$this->izabranavest['peti_pasus']}</textarea>";
echo "</div>";

echo "<div class='div_paragraf' >";
echo "<textarea name='sestipasus' id='sestipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' class='editvesti_pasus' >{$this->izabranavest['sesti_pasus']}</textarea>";
echo "</div>";

echo "<div class='div_paragraf' >";
echo "<textarea name='sedmipasus' id='sedmipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' class='editvesti_pasus' >{$this->izabranavest['sedmi_pasus']}</textarea>";
echo "</div>";






echo "<br>";

echo "<input type='Submit' value='Save Changes' ></input>";
echo "<input type='hidden' name='idvesti' value='{$this->idvesti}' ></input>";
echo "<input type='hidden' name='ikategorija' value='{$this->izabkateogrija}' ></input>";


echo "</form>";


echo "</div>";

}

}




if(isset($_GET['kategorija'])) {

$obj = new editvesti;

echo "<div style='margin-top:200px' ></div>";

require("inc/footer.php");

echo "</div>";


}



?>




</body>


</html>