<style type="text/css">

.div1 {

width:430px;
height:100px;
border:1px solid black;
float:left;
margin-left:5px;
margin-top:10px;

}

.div2 {

width:206px;
height:120px;
border:1px solid black;
float:left;
margin-left:5px;
margin-top:10px;

}


.div3 {

width:100px;
height:150px;
border:1px solid black;
float:left;
margin-left:5px;
margin-top:10px;

	
}





</style>



<?php

//require("connection.php");



//Kreiranje levog asaida sa svim pozicijama,sve je objedinjeno u formu
echo "<form id='myForm' action='functions/updatevesti.php' method='POST' >";

echo "<div style='height:600px; width:460px; border:1px solid black; margin-left:0px; float:left; ' >";



for($k=1; $k<10; $k++) {



if($k == 1) {

echo "<div class='div1' style='padding:5px; overflow:hidden; ' >";

echo "<div style='margin-left:40%;' >Position{$k}</div>";
echo "<hr>";

echo "<input type='hidden' id='prvevestid{$k}' name='prvevestid{$k}' value='{$this->defaularray[$k]['id_vesti']}' style='width:40%;'  ></input>";
echo "<a id='poz{$k}' data-id='{$this->defaularray[$k]['id_vesti']}' href='' style='font-size:15px; text-decoration:none ' >{$this->defaularray[$k]['naslov_vesti']}</a>";


echo "<select style='width:90%; margin-top:10px;' onchange='promeni(this)'  >";

echo "<option selected disabled >Change</option>";

for($o=0; $o<count($this->svevesti); $o++) {

echo "<option value='{$this->svevesti[$o]['id_vesti']}' >{$this->svevesti[$o]['naslov_vesti']}</option>";	

}


echo "</select> ";

echo "</div>";

}





if($k == 2 or $k == 3) {

echo "<div class='div2' style='padding:5px; overflow:hidden; ' >";

echo "<div style='margin-left:37%;' >Position{$k}</div>";
echo "<hr>";


echo "<input type='hidden' id='prvevestid{$k}'  name='prvevestid{$k}' value='{$this->defaularray[$k]['id_vesti']}' style='width:40%;'  ></input>";
echo "<a id='poz{$k}' data-id='{$this->defaularray[$k]['id_vesti']}' href='' style='font-size:15px; text-decoration:none ' >{$this->defaularray[$k]['naslov_vesti']}</a>";


echo "<select style='width:90%; margin-top:10px;' onchange='promeni(this)'   >";

echo "<option  selected disabled >Change</option>";

for($m=0; $m<9; $m++) {

echo "<option value='{$this->svevesti[$m]['id_vesti']}' >{$this->svevesti[$m]['naslov_vesti']}</option>";	

}

echo "</select> ";

echo "</div>";	
	
}

if($k == 4 or $k == 5) {

echo "<div class='div2' style='padding:5px; overflow:hidden; ' >";

echo "<div style='margin-left:37%;' >Position{$k}</div>";
echo "<hr>";


echo "<input type='hidden' id='prvevestid{$k}'  name='prvevestid{$k}' value='{$this->defaularray[$k]['id_vesti']}' style='width:40%;'  ></input>";
echo "<a id='poz{$k}' data-id='{$this->defaularray[$k]['id_vesti']}' href='' style='font-size:15px; text-decoration:none ' >{$this->defaularray[$k]['naslov_vesti']}</a>";


echo "<select style='width:90%; margin-top:10px;' onchange='promeni(this)'   >";

echo "<option  selected disabled >Change</option>";

for($m=0; $m<9; $m++) {

echo "<option value='{$this->svevesti[$m]['id_vesti']}' >{$this->svevesti[$m]['naslov_vesti']}</option>";	

}

echo "</select> ";

echo "</div>";	
	
}





if($k >= 6) {

echo "<div class='div3' style='padding:2px; overflow:hidden; ' >";

echo "<div style='margin-left:35%;' >Position{$k}</div>";
echo "<hr>";


echo "<input type='hidden' id='prvevestid{$k}'  name='prvevestid{$k}' value='{$this->defaularray[$k]['id_vesti']}' style='width:40%;'  ></input>";
echo "<a id='poz{$k}' data-id='{$this->defaularray[$k]['id_vesti']}' href='' style='font-size:12px; text-decoration:none ' >{$this->defaularray[$k]['naslov_vesti']}</a>";


echo "<select style='width:90%; margin-top:10px; ' onchange='promeni(this)'  >";

echo "<option selected disabled >Change</option>";

for($n=0; $n<9; $n++) {

echo "<option value='{$this->svevesti[$n]['id_vesti']}' >{$this->svevesti[$n]['naslov_vesti']}</option>";	

}

echo "</select> ";

echo "</div>";	
	
}




}






echo "</div>";

echo "<input value='Save changes' type='Button' onclick='proverapozicija()' ' style='margin-left:5px;'  ></input>";

echo "<span id='obavestenje' style='color:red; margin-left:10px;' ></span>";

echo "<input type='hidden' name='odabranakat' input value='{$this->ikateogrija}' ></input>";

echo "</form>";





?>



<script>


function promeni(objekat) {


//Selektuj <a> tag iznad
var iznadtekst = objekat.previousElementSibling;

//Sekejtuj text i id od odabranog <option>
var izabranavesttext = objekat.options[objekat.selectedIndex].innerHTML  ;
var izabranavestid = objekat.value;

//Dodeli gornjem <a> linku sadrzaj izabranog <option taga>
//iznadtekst.innerHTML = izabranavesttext;

//Varijabla u kojoj je vrednost id-a koju nosi <a> naslov
var selektovanid = iznadtekst.value;

//Dodeli varijabli iznad vrednost izabranog id-a iz <option> tj value of select
iznadtekst.value = izabranavestid;



var x = document.getElementById(iznadtekst.id).previousElementSibling;

x.value = izabranavestid;

iznadtekst.innerHTML = izabranavesttext;



}


function proverapozicija() {

var prvavest = document.getElementById('prvevestid1').value;
var drugavest = document.getElementById('prvevestid2').value;
var trecavest = document.getElementById('prvevestid3').value;
var cetvrtavest = document.getElementById('prvevestid4').value;
var petavest = document.getElementById('prvevestid5').value;
var sestavest = document.getElementById('prvevestid6').value;
var sedmavest = document.getElementById('prvevestid7').value;
var osmavest = document.getElementById('prvevestid8').value;
var devetavest = document.getElementById('prvevestid9').value;


var niz = [];

if(prvavest != 50) {
niz.push(prvavest);
}
if(drugavest != 50) {
niz.push(drugavest);
}
if(trecavest != 50) {
niz.push(trecavest);
}
if(cetvrtavest != 50) {
niz.push(cetvrtavest);
}
if(petavest != 50) {
niz.push(petavest);
}
if(sestavest != 50) {
niz.push(sestavest);
}
if(sedmavest != 50) {
niz.push(sedmavest);
}
if(osmavest != 50) {
niz.push(osmavest);
}
if(devetavest != 50) {
niz.push(devetavest);
}



if (hasDuplicates(niz)) {

var obavestenje = document.getElementById('obavestenje'); 
obavestenje.innerHTML = "One position cannot be used more than once!";

} else {
	
document.getElementById("myForm").submit();

}


}


function hasDuplicates(niz) {

return new Set(niz).size !== niz.length; 

}











</script>