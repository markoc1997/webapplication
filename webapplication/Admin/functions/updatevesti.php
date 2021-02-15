<?php

require("../inc/konekcija.php");



$object_connect = new konekcija;
$vkonekcija = $object_connect->kreirajkonekciju();

$nizsvihpreuzetihvesti = array(1);

$preuzeta1 = $_POST['prvevestid1'];
$nizsvihpreuzetihvesti[] = $preuzeta1;

$preuzeta2 = $_POST['prvevestid2'];
$nizsvihpreuzetihvesti[] = $preuzeta2;

$preuzeta3 = $_POST['prvevestid3'];
$nizsvihpreuzetihvesti[] = $preuzeta3;

$preuzeta4 = $_POST['prvevestid4'];
$nizsvihpreuzetihvesti[] = $preuzeta4;

$preuzeta5 = $_POST['prvevestid5'];
$nizsvihpreuzetihvesti[] = $preuzeta5;

$preuzeta6 = $_POST['prvevestid6'];
$nizsvihpreuzetihvesti[] = $preuzeta6;

$preuzeta7 = $_POST['prvevestid7'];
$nizsvihpreuzetihvesti[] = $preuzeta7;

$preuzeta8 = $_POST['prvevestid8'];
$nizsvihpreuzetihvesti[] = $preuzeta8;

$preuzeta9 = $_POST['prvevestid9'];
$nizsvihpreuzetihvesti[] = $preuzeta9;

$kat = $_POST['odabranakat'];





$query2 = "UPDATE vesti.svevesti SET pozicija_vesti = ' ' WHERE (kategorija_vesti = '{$kat}') ";

$rezultatusername2 = mysqli_query($vkonekcija,$query2);

for($i = 1; $i<10; $i++) {


$query = "UPDATE vesti.svevesti SET pozicija_vesti = '{$i}' WHERE id_vesti = '{$nizsvihpreuzetihvesti[$i]}'";
$rezultatusername = mysqli_query($vkonekcija,$query);


}





?>

<script>

ocitajujs();

function ocitajujs() {

var kojakategorija=<?php echo json_encode($kat); ?>;
window.location = "../index.php?kategorija="+kojakategorija;

}

</script>
