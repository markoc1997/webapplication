<?php

require("../inc/konekcija.php");


$object_connect = new konekcija;
$vkonekcija = $object_connect->kreirajkonekciju();

$id_vesti = $_GET['id_vesti'];

$queryobrisivest = "DELETE FROM svevesti WHERE id_vesti = {$id_vesti}";
mysqli_query($vkonekcija,$queryobrisivest);

header("Location: ../index.php");





?>