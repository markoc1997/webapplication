<?php

require("../inc/konekcija.php");



$object_connect = new konekcija;
$vkonekcija = $object_connect->kreirajkonekciju();

$preuzetkomentar = $_POST['sadrzajkomentara'];
$idvesti = $_POST['preuzetavest'];
$korisnik = $_POST['korisnik'];
$kateogorija = $_POST['preuzetakategorija'];


$queryupis = "INSERT INTO komentari(vest_id,username,sadrzaj_komentara) VALUES ('{$idvesti}','{$korisnik}','{$preuzetkomentar}')";
$upis = mysqli_query($vkonekcija,$queryupis);

header("Location: ../comments.php?kategorija={$kateogorija}&vest={$idvesti}");


?>