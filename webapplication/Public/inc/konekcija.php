<?php

class konekcija {

var $imeServera = "localhost:3308";
var $username = "root";
var $pass = "";
var $baza = "vesti";

public $conn;

function kreirajkonekciju() {

$conn = mysqli_connect($this->imeServera,$this->username,$this->pass,$this->baza);
return $conn;


}

}

?>