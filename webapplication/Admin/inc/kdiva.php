<style type="text/css">


#divzasve {
	
border:0px solid black;
width:800px;

<!--margin:0 auto;-->
float:left;
margin-left:20px;
overflow:hidden;
padding-top:0px;
<!-- margin-right:50px; -->



}





.divvest1 {

background-size: 760px 350px;
width:760;	
height:350;
border:1px solid none;
float:left;
margin-left:20px;
<!-- border-radius: 5px; -->
 
}

.divnaslov1 {

height:88px;
width:748px;
margin-top:230px; padding-top:30px;
margin-left:0px;
padding-left:10px;
border:1px solid none; 
	
}

.anaslov1 {
	
color:white;
font-family:tahoma;
text-shadow: 0px 4px 15px black;
font-weight:bold;
font-size:30px;
text-decoration: none;
cursor:pointer;


	
	
}










.divvest2 {

background-size: 370px 170px;
width:370px;	
height:170px;
border:1px solid none;
float:left;
margin-left:20px;
margin-top:20px;
<!-- border-radius: 5px; -->
	
}

.divnaslov2 {

height:66px;
margin-top:85px;
padding-top:17px;
width:358px; margin-left:0px; padding-left:10px;
border:1px solid none;
	
}

.anaslov2 {
	
color:white; 
font-family:Verdana; 
text-shadow: 0px 4px 15px black;
font-weight:bold; font-size:18px;
text-decoration: none;
cursor:pointer;

	
	
	
}



.divvest3 {

background-size: 240px 111px;
width:240px;	
height:111px;
border:1px solid none;
float:left;
margin-left:20px;
margin-top:20px;
border:0px solid red;
<!-- border-radius: 5px; -->
	
}

.divnaslov3 {

height:55px;
margin-top:35px;
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
text-decoration: none;
cursor:pointer;
	
	
	
}

a:hover {
	

text-decoration:underline;

  
}








</style>



<?php


echo "<div id='divzasve' style='border:0px solid black;' >";

for($i=1; $i<10; $i++) {


if($i == 1) {

echo "<div style='background-image:url(../Images/{$this->defaularray[$i]['slika']})' class='divvest1'>";
echo "<div class='divnaslov1'>";
echo "<a class='anaslov1'";

if($this->defaularray[$i]['id_vesti'] != 50) {

  echo "href='vest.php?kategorija={$this->ikateogrija}&vest={$this->defaularray[$i]['id_vesti']}'>";
  
} else {
	
echo "href=''>";

}
  
} 

if($i == 2 or $i == 3) {

echo "<div style=' background-image:url(../Images/{$this->defaularray[$i]['slika']})' class='divvest2'>";
echo "<div class='divnaslov2' >";
echo "<a class='anaslov2'";

if($this->defaularray[$i]['id_vesti'] != 50) {

  echo "href='vest.php?kategorija={$this->ikateogrija}&vest={$this->defaularray[$i]['id_vesti']}'>";
  
} else {
	
echo "href=''>";

}

}

if($i == 4 or $i == 5) {

echo "<div style=' background-image:url(../Images/{$this->defaularray[$i]['slika']})' class='divvest2'>";
echo "<div class='divnaslov2' style='border:0px solid red;' >";
echo "<a class='anaslov2'";

if($this->defaularray[$i]['id_vesti'] != 50) {

  echo "href='vest.php?kategorija={$this->ikateogrija}&vest={$this->defaularray[$i]['id_vesti']}'>";
  
} else {
	
echo "href=''>";

}

}

if($i >= 6) {
	
echo "<div style='background-size: 173px 80px;   width:173px; height:80px;  background-image:url(../Images/{$this->defaularray[$i]['slika']})' class='divvest3'>";
echo "<div style='margin-top:25px; width:161px; border:0px solid black; float:left; overflow:hidden;' class='divnaslov3' >";
echo "<a style='font-size:10px; color:white; font-family:Verdana; text-shadow: 0px 4px 15px black; font-weight:bold; cursor:pointer;' class='anaslov3'";

if($this->defaularray[$i]['id_vesti'] != 50) {

  echo "href='vest.php?kategorija={$this->ikateogrija}&vest={$this->defaularray[$i]['id_vesti']}'>";
  
} else {
	
echo "href=''>";

}

} 





echo $this->defaularray[$i]['naslov_vesti'];
echo "</a>";

echo "</div>";

echo "</div>";	





}

echo "</div>";





?>