<?php

require("../inc/konekcija.php");



$object_connect = new konekcija;
$vkonekcija = $object_connect->kreirajkonekciju();

$id_komentar = $_GET['komentarid'];
$idvesti = $_GET['vest'];
$izabkateogrija = $_GET['kategorija'];


$queryobrisikomentar = "DELETE FROM komentari WHERE id = {$id_komentar}";

mysqli_query($vkonekcija,$queryobrisikomentar);

header("Location: ../comments.php?kategorija={$izabkateogrija}&vest={$idvesti}");


?>