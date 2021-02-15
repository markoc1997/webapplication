<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="styles.css">



</head>

<body>

<?php



require("inc/konekcija.php");
require("inc/navigacija.php");


class komentari {

var $idvesti = 50;
var $izabkateogrija = "Novo";
var $conn;

var $querynasloviuvod;
var $vest_rezultat;
var $izabranavest;


var $queryselektkomentara;
var $komentar_rezultat;
var $brojkomentara;

var $izabrankomentar;



function __construct() {


$object_connect = new konekcija;
$this->conn = $object_connect->kreirajkonekciju();

if(isset($_GET['vest'])) {
	
$this->idvesti = $_GET['vest'];

}


if(isset($_GET['kategorija'])) {
	
$this->izabkateogrija = $_GET['kategorija'];

}


$this->querynasloviuvod = "SELECT * FROM svevesti WHERE (kategorija_vesti='{$this->izabkateogrija}' AND id_vesti='{$this->idvesti} ORDER BY id ASC')";
$this->vest_rezultat = mysqli_query($this->conn,$this->querynasloviuvod);
$this->izabranavest = mysqli_fetch_assoc($this->vest_rezultat);



$this->queryselektkomentara = "SELECT * FROM komentari WHERE (vest_id='{$this->idvesti} ')";
$this->komentar_rezultat = mysqli_query($this->conn,$this->queryselektkomentara);
echo "<br>";
$this->brojkomentara = mysqli_num_rows($this->komentar_rezultat);


$this->kreiranje();

}










function kreiranje() {

echo "<div style='margin-top:50px; margin-left:0 auto; padding-bottom:100px; ' class='container-sm '>";

echo "<div class='row'>";

echo "<div class='col-1' ></div>";

echo "<div  style='border:0px solid black;' class='col-8'>";

echo "<div>";
echo "<h1>";
/*
<a onMouseOver="this.style.textDecoration = 'Underline'" onMouseOut="this.style.textDecoration = 'none'"  href="vest.php?<?php echo 'kategorija='.$izabkateogrija.'&vest='.$idvesti?>" style="color:black; text-decoration:none;" ><?php echo $izabranavest['naslov_vesti'] ?></a>
*/
echo "<a onMouseOver='this.style.textDecoration = 'Underline'' onMouseOut='this.style.textDecoration = 'none''  href='vest.php?kategorija={$this->izabkateogrija}&vest={$this->idvesti}' style='color:black; ' >{$this->izabranavest['naslov_vesti']}</a>";
echo "</h1>";
echo "<p id='uvodnitext' >{$this->izabranavest['uvodni_text']}</p>";

echo "</div>";
echo "</div>";
echo "</div>";



echo "<div class='row'>";

echo "<div class='col-1' ></div>";

echo "<div  style='border:0px solid black;' class='col-8'>";


echo "<div id='p_komentar'  >";





if(isset($_SESSION["username"])) {
	
echo "<div id='div_komentar'>";

echo "<button id='b_komentar' onclick='napravinovuliniju()'  >Write a comment</button>";

echo "</div>";

} else {

echo "<br>";
echo "<h2>You must be logged in to post a comment!</h2>";
	
}





echo "<br>";


echo "<div id='prostorzakomentar'></div>";



echo "<div id='komentar_div_icon'>";

echo "<img id='imgicon' src='../GUI/komentar.png' >";
echo "<br>";
echo "<a id='linkkomentar'>Comments ({$this->brojkomentara})</a>";

echo "</div>";

echo "<hr>";

echo "</div>";

echo "</div>";
echo "</div>";







//<!--Iscitavanje komentara-->

while($this->izabrankomentar = mysqli_fetch_assoc($this->komentar_rezultat)) {


echo "<div class='row'>";

echo "<div class='col-1' ></div>";

echo "<div  style='border:0px solid black;' class='col-8'>";


echo "<p id='p_sadrzajkomentara'>{$this->izabrankomentar['sadrzaj_komentara']}</p>";
echo "<br>";
echo "<p id='p_vremeupisakomentara'>({$this->izabrankomentar['username']}, {$this->izabrankomentar['vreme_upisa']})</p>";


if(isset($_SESSION["username"])) {

if($this->izabrankomentar['username'] == $_SESSION["username"] ) {

echo "<a href='functions/functions.php?komentarid={$this->izabrankomentar['id']}&kategorija={$this->izabkateogrija}&vest={$this->idvesti}'>Delete</a>";
echo "<hr id='href'>";

} else {

echo "<hr>";

}
} else {

echo "<hr>";

}




echo "</div>";
echo "</div>";


}

echo "</div>";

}





}





if(isset($_GET['vest'])) {


$obj = new komentari;


}


?>
















<!--Kreiranje forme za upis komentara-->
<script>



var objekat=<?php echo json_encode(get_object_vars($obj)); ?>;


var kreiraj = 0;

function napravinovuliniju() {

if(kreiraj == 0) {

var usernamesesija = <?php echo json_encode($_SESSION["username"]); ?>;
var kojavest = objekat.idvesti;
var kojakategorija = objekat.izabkateogrija;




var komentar = document.getElementById("prostorzakomentar");

komentar.style.width = "500px";
komentar.style.height = "300px";
komentar.style.border = "0px solid gray";
komentar.style.marginTop  = "50px";
komentar.style.padding  = "0px";

komentar.innerHTML +=

"<form action='functions/functions.php' method='post' >" +
"<div style='border:0px solid black' >"+
"<div><span>Username:"+"&nbsp"+"</span>"+
"<input maxlength='18' name='korisnik' value='"+ usernamesesija +"'>"+
"</input></div>"+

"<textarea id='textareakomentar' name='sadrzajkomentara' placeholder='Your comment' maxlength='600'    >Your comment</textarea>"+
"<br>"+
"<br>"+
"<input name='upiskomentara' style='cursor:pointer' type='Submit' value='Send' ></input>"+

"<input type='hidden' name='preuzetavest' value='"+ kojavest +"'>"+
"<input type='hidden' name='preuzetakategorija' value='"+ kojakategorija +"'>"+
"</div>"

"</form>"

kreiraj = 1;

}
}
	
	
</script>




</body>






</html>