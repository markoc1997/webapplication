<?php

require("../inc/konekcija.php");


$object_connect = new konekcija;
$vkonekcija = $object_connect->kreirajkonekciju();

$upfolder = "../../Images/";

$idvesti = $_POST['idvesti'];
$ikat = $_POST['ikategorija'];

$preuzetnaslov = $_POST['naslov'];
$uvod = $_POST['uvod'];
$prvipasus = $_POST['prvipasus'];
$drugipasus = $_POST['drugipasus'];
$trecipasus = $_POST['trecipasus'];
$cetvrtipasus = $_POST['cetvrtipasus'];
$petipasus = $_POST['petipasus'];
$sestipasus = $_POST['sestipasus'];
$sedmipasus = $_POST['sedmipasus'];


move_uploaded_file($_FILES['slika']['tmp_name'], $upfolder . $_FILES['slika']['name']);


$updatevesti1 = "UPDATE vesti.svevesti SET naslov_vesti = '{$preuzetnaslov}' WHERE id_vesti = '{$idvesti}'";
$updatevesti2 = "UPDATE vesti.svevesti SET uvodni_text = '{$uvod}' WHERE id_vesti = '{$idvesti}'";
$updatevesti3 = "UPDATE vesti.svevesti SET prvi_pasus = '{$prvipasus}' WHERE id_vesti = '{$idvesti}'";
$updatevesti4 = "UPDATE vesti.svevesti SET drugi_pasus = '{$drugipasus}' WHERE id_vesti = '{$idvesti}'";
$updatevesti5 = "UPDATE vesti.svevesti SET treci_pasus = '{$trecipasus}' WHERE id_vesti = '{$idvesti}'";
$updatevesti6 = "UPDATE vesti.svevesti SET cetvrti_pasus = '{$cetvrtipasus}' WHERE id_vesti = '{$idvesti}'";
$updatevesti7 = "UPDATE vesti.svevesti SET peti_pasus = '{$petipasus}' WHERE id_vesti = '{$idvesti}'";
$updatevesti8 = "UPDATE vesti.svevesti SET sesti_pasus = '{$sestipasus}' WHERE id_vesti = '{$idvesti}'";
$updatevesti9 = "UPDATE vesti.svevesti SET sedmi_pasus = '{$sedmipasus}' WHERE id_vesti = '{$idvesti}'";


if($_FILES['slika']['size'] > 0) {

$updatevesti10 = "UPDATE vesti.svevesti SET slika = '{$_FILES['slika']['name']}' WHERE id_vesti = '{$idvesti}'";
$update10 = mysqli_query($vkonekcija,$updatevesti10);

}

$update1 = mysqli_query($vkonekcija,$updatevesti1);
$update2 = mysqli_query($vkonekcija,$updatevesti2);
$update3 = mysqli_query($vkonekcija,$updatevesti3);
$update4 = mysqli_query($vkonekcija,$updatevesti4);
$update5 = mysqli_query($vkonekcija,$updatevesti5);
$update6 = mysqli_query($vkonekcija,$updatevesti6);
$update7 = mysqli_query($vkonekcija,$updatevesti7);
$update8 = mysqli_query($vkonekcija,$updatevesti8);
$update9 = mysqli_query($vkonekcija,$updatevesti9);



?>


<script>

ocitajujs();

function ocitajujs() {

var kojakategorija=<?php echo json_encode($ikat); ?>;
window.location = "../index.php?kategorija="+kojakategorija;

}

</script>