<style>

.divvest3 {

background-size: 240px 111px;
width:240px;	
height:111px;
border:1px solid none;
float:left;
margin-left:20px;
margin-top:20px;
<!-- border-radius: 5px; -->
	
}

.divnaslov3 {

height:55px;
margin-top:45px;
padding-top:10px;
width:228px;
margin-left:0px;
padding-left:10px;
border:1px solid none; 
	
}

.anaslov3 {
	
color:white;
font-family:Verdana;
text-shadow: 0px 4px 15px black;
font-weight:bold;
font-size:15px;
cursor:pointer;
	
	
	
}

</style>


<?php


//require("connection.php");

echo "<div style='float:left; border:0px solid black;' >";

for($o=0; $o<count($this->svevesti); $o++) {


echo "<div style='border:0px solid red; float:left; overflow:hidden; ' >";	
	
echo "<div style='background-image:url(../Images/{$this->svevesti[$o]['slika']})' class='divvest3'>";
echo "<div class='divnaslov3' >";
echo "<a class='anaslov3' href=''>";

echo $this->svevesti[$o]['naslov_vesti'];
echo "</a>";

echo "</div>";
echo "</div>";	


echo "<div style='clear:both' ></div>";

echo "<div style='margin-left:20px; margin-top:7px; ' >";
echo "<a href='vest.php?kategorija={$this->ikateogrija}&vest={$this->svevesti[$o]['id_vesti']}' style='margin-left:10px;' >Preview</a>";
echo "<a style='margin-left:40px;'  href='editvesti.php?kategorija={$this->ikateogrija}&vest={$this->svevesti[$o]['id_vesti']}' style='margin-left:10px;' >Edit</a>";
echo "<a href='functions/obrisivest.php?id_vesti={$this->svevesti[$o]['id_vesti']}' style='margin-left:50px;' >Delete</a>";
echo "</div>";

echo "</div>";	

	
}

echo "<div style='width:240px; height:111px; border:1px solid black; float:left; margin-left:20px; margin-top:20px; border-radius: 5px;'  >";

echo "<div style='margin-top:18%; margin-left:28%;' > <a style='font-size:20px; text-decoration:none; ' href='novavest.php?kategorija={$this->ikateogrija}' >Create New!</a>";

echo "</div>";

echo "</div>";



echo "</div>";








?>





