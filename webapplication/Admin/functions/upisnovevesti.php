<?php

require("../inc/konekcija.php");


$object_connect = new konekcija;
$vkonekcija = $object_connect->kreirajkonekciju();

$uploadsdir = "../../Images/";


$ikateogrija = $_POST['kategorija'];
$preuzetnaslov = $_POST['naslov'];
$uvod = $_POST['uvod'];
$prvipasus = $_POST['prvipasus'];
$drugipasus = $_POST['drugipasus'];
$trecipasus = $_POST['trecipasus'];
$cetvrtipasus = $_POST['cetvrtipasus'];
$petipasus = $_POST['petipasus'];
$sestipasus = $_POST['sestipasus'];
$sedmipasus = $_POST['sedmipasus'];



move_uploaded_file($_FILES['slika']['tmp_name'], $uploadsdir . $_FILES['slika']['name']);



if($_FILES['slika']['size'] <= 0) {

echo "Slika nije uploadovana";	
$_FILES['slika']['name'] = "default";
	
} else {

echo "Slika je uploadovana";
	
}


$queryinsert = "INSERT INTO vesti.svevesti (kategorija_vesti,naslov_vesti,uvodni_text,prvi_pasus,drugi_pasus,treci_pasus,cetvrti_pasus,peti_pasus,sesti_pasus,sedmi_pasus,slika) VALUES ('{$ikateogrija}','{$preuzetnaslov}','{$uvod}','{$prvipasus}','{$drugipasus}','{$trecipasus}','{$cetvrtipasus}','{$petipasus}','{$sestipasus}','{$sedmipasus}','{$_FILES['slika']['name']}')";
$insert = mysqli_query($vkonekcija,$queryinsert);



?>


<script>

ocitajujs();

function ocitajujs() {

var kojakategorija=<?php echo json_encode($ikateogrija); ?>;
window.location = "../index.php?kategorija="+kojakategorija;

}

</script>
