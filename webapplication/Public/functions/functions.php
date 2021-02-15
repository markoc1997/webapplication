<?php

require("../inc/konekcija.php");

class functions {


var $conn;
	

function __construct() {

$object_connect = new konekcija;
$this->conn = $object_connect->kreirajkonekciju();

if(isset($_POST['upiskomentara'])) {

$this->upisikomentar();

}

if(isset($_GET['komentarid'])) {
	
$this->obrisikomentar();	
	
}


if(isset($_GET['izloguj'])) {
	
$this->izlogujese();	
	
}



}




//Insert Comment
function upisikomentar() {

$preuzetkomentar = $_POST['sadrzajkomentara'];
$idvesti = $_POST['preuzetavest'];
$korisnik = $_POST['korisnik'];
$kateogorija = $_POST['preuzetakategorija'];

$queryupis = "INSERT INTO komentari(vest_id,username,sadrzaj_komentara) VALUES ('{$idvesti}','{$korisnik}','{$preuzetkomentar}')";
$upis = mysqli_query($this->conn,$queryupis);

header("Location: ../comments.php?kategorija={$kateogorija}&vest={$idvesti}");

}


//Delete Comment
function obrisikomentar() {

$id_komentar = $_GET['komentarid'];
$idvesti = $_GET['vest'];
$izabkateogrija = $_GET['kategorija'];

$queryobrisikomentar = "DELETE FROM komentari WHERE id = {$id_komentar}";

mysqli_query($this->conn,$queryobrisikomentar);

header("Location: ../comments.php?kategorija={$izabkateogrija}&vest={$idvesti}");
	
	
}


//Logout
function izlogujese() {

session_start();
session_unset();
header("Location: ../login.php");
	
}
	
	
	
	
	
}


$obj = new functions;






?>




