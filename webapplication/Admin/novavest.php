<html>

<head>

<style type="text/css">


#divzasve {
	
border:1px solid none;
width:760px;
margin-left:500px;
padding-top:20px;

}

textarea {
resize: none;
overflow: hidden;


}

</style>

</head>


<script>

function auto_grow(element) {
	
element.style.height = "5px";
element.style.height = (element.scrollHeight)+"px";

}



function prosiri() {


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



<body style="padding:0px; border:0px; margin:0px;  " onload="prosiri()" >

<?php

require("inc/konekcija.php");
require("inc/navigacija.php");

class novavest {


var $ikateogrija = "Novo";


function __construct() {
	


if(isset($_GET['kategorija'])) {

$this->ikateogrija = $_GET['kategorija'];

}


$this->kreiraj();


}








function kreiraj() {


echo "<div id='divzasve'  >";

echo "<br>";

echo "<div style='float:left; margin-top:50px;' >";

echo "<form action='functions/upisnovevesti.php' method='POST' enctype='multipart/form-data' >";

echo "<div>";
echo "<textarea name='naslov' id='naslov' onclick='auto_grow(this)' oninput='auto_grow(this)' type='text'  style='width:760px; font-size:2em; font-weight: bold; resize: none; font-family:arial;' placeholder='News`s headline' ></textarea>";
echo "</div>";

echo "<div style='margin-top:10px;' >";
echo "<textarea name='uvod' id='uvod' onclick='auto_grow(this)' oninput='auto_grow(this)' style='font-size:21px; width:100%; resize: none; font-family:arial' placeholder='Introductory text' ></textarea>";
echo "</div>";

echo "<br>";
echo "<div style='margin-top:10px;' >";
echo "<span>Recommended size(760x350)</span>";
echo "<input type='file' name='slika' value='default' >";
echo "</div>";
echo "<br>";

echo "<div style='margin-top:10px;' >";
echo "<textarea name='prvipasus' id='prvipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' style='width:100%; font-size:20px;' placeholder='First paragraph' ></textarea>";
echo "</div>";

echo "<div style='margin-top:10px;' >";
echo "<textarea name='drugipasus' id='drugipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' style='width:100%; font-size:20px;' placeholder='Second paragraph' ></textarea>";
echo "</div>";

echo "<div style='margin-top:10px;' >";
echo "<textarea name='trecipasus' id='trecipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' style='width:100%; font-size:20px;' placeholder='Third paragraph' ></textarea>";
echo "</div>";

echo "<div style='margin-top:10px;' >";
echo "<textarea name='cetvrtipasus' id='cetvrtipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' style='width:100%; font-size:20px;' placeholder='Fourth paragraph' ></textarea>";
echo "</div>";

echo "<div style='margin-top:10px;' >";
echo "<textarea name='petipasus' id='petipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' style='width:100%; font-size:20px;' placeholder='Fifth paragraph' ></textarea>";
echo "</div>";

echo "<div style='margin-top:10px;' >";
echo "<textarea name='sestipasus' id='sestipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' style='width:100%; font-size:20px;' placeholder='Sixth paragraph' ></textarea>";
echo "</div>";

echo "<div style='margin-top:10px;' >";
echo "<textarea name='sedmipasus' id='sedmipasus' onclick='auto_grow(this)' oninput='auto_grow(this)' style='width:100%; font-size:20px;' placeholder='Seventh paragraph'  ></textarea>";
echo "</div>";






echo "<br>";

echo "<input type='Submit' value='Save' ></input>";
echo "<input type='hidden' name='kategorija' value='{$this->ikateogrija}'></input>";



echo "</form>";

echo "</div>";

echo "</div>";


}



}


$obj = new novavest;


?>








</body>


</html>