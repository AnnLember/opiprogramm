<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="kujundus.css">
<title>Kas tunned viipeid?</title>
<?php
//valitakse järjend, millest küsimusi esitama hakatakse
mb_internal_encoding("UTF-8");
$teema = $_GET['teema'];
include 'andmed.php';
if ($teema == 'tutvumine') {
	$sonad=$tutvumine;
	$mang="Tutvumine";
}
if ($teema == 'emotsioonid') {
	$sonad=$emotsioonid;
	$mang="Emotsioonid";
}
if ($teema == 'komplimendid') {
	$sonad=$komplimendid;
	$mang="Komplimendid";
}
if ($teema == 'viisakus') {
	$sonad=$viisakus;
	$mang="Viisakusväljendid";
}
if ($teema == 'perekond') {
	$sonad=$perekond;
	$mang="Perekond";
 }
 if ($teema == 'omadus') {
	$sonad=$omadus;
	$mang="Omadussõnad ja värvid";
 }
 if ($teema == 'riietus') {
	$sonad=$riietus;
	$mang="Riietus";
 }
 if ($teema == 'kodu') {
	$sonad=$kodu;
	$mang="Kodus";
 }
 if ($teema == 'toit') {
	$sonad=$toit;
	$mang="Toit";
 }
 if ($teema == 'ametid') {
	$sonad=$ametid;
	$mang="Ametid";
 }
 if ($teema == '') {
	$sonad=$tutvumine;
	$mang="Tutvumine";
 }
$tapid= array("Õ","Ä","Ö","Ü","Š","Ž");
$margid= array("6","2","8","y","3","4");
$vsonad=array();
foreach ($sonad as $uus) {
	$uuss = str_replace($tapid, $margid, $uus);
	array_push($vsonad, $uuss);
}
//otsitakse järjendi hulgast sõna, mida kasutajalt küsida. Tingimuseks on, et sõna pole enne küsitud.
$arrlength = count($sonad);
$leitud= False;
while ($leitud == False) {
	$proovi = rand(0,$arrlength-1);
	if (strpos($_POST["kasutatud"], "|".$sonad[$proovi]."|") === False) {
		$sona = $sonad[$proovi];
		$vsona =$vsonad[$proovi];
		$leitud = True;
	}	
}
$kuu = date("Y-m");
$punkt=0;
$koik=0;
$kasutatud = "";
$valed="";
$tekst1= "";
$tekst2="";
$tekst3="";
//kui on vastus esitatud siis salvestatakse andmed logifaili ja kontrollitakse vastuse õigsust ning uuendatakse punktiarvestust
   if( $_POST["vastus"] ) {
   $fail = fopen("logid/sonad$kuu.txt", "a") or die("Ei suuda faili avada!");
   fwrite($fail,$_POST["vastus"] . "|" . $_POST["oigevastus"].  "\n");
   fclose($fail);
   $punkt=$_POST["punktid"];
   $koik=$_POST["koikpunktid"];
   $koik++;
   $kasutatud = substr($_POST["kasutatud"],-($arrlength*4));
   $valed = $_POST["valed"];
   //kontrollitakse vastuse õigsust, seejuures muudetakse kasutaja vastus väiketähtedeks, et see ei mõjutaks kontrolli.
	  if (mb_strtolower($_POST["vastus"]) == mb_strtolower($_POST["oigevastus"])) {
	  $tekst1 .= "<p> Õige vastus! </p>"  ;
	  $punkt++;
	  } else {
	  $tekst2 .= "<p> Vale vastus! </p>"  ;
	  $tekst3 .= "<p> Õige vastus oli ". $_POST['oigevastus']. "</p>" ;
	  $valed .= "|" .$_POST["oigevastus"]."|";
      }
  } 
$kasutatud .= "|" .$sona. "|";
?>

</head>
<body>
<div class="container">
<?php echo "<h1 class='vasak'>Kas tunned viipeid? ". $mang . "</h1>" ; ?>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="keskel">
<?php
if ($koik < 10) {
?> 
<h1>Mis sõna on viibeldud?<h1/>
<form action = "mang3.php?teema=<?=$teema?>" method = "POST">
<p>
<video controls autoplay>
	<source src="videod/<?= mb_strtolower($vsona) ?>.webm" type="video/webm">
Your browser does not support the video tag.
</video>
<?php
//säilitatakse mängija punktid, küsitud küsimuste arv, õige vastus, kasutatud küsimused ning valesti vastatud küsimused
echo '<INPUT TYPE="hidden" NAME="punktid" VALUE="'.$punkt.'" >  ' ;
echo '<INPUT TYPE="hidden" NAME="koikpunktid" VALUE="'.$koik.'" >  ' ;
echo '<INPUT TYPE="hidden" NAME="oigevastus" VALUE="'.$sona.'" >  ' ;
echo '<INPUT TYPE="hidden" NAME="kasutatud" VALUE="'.$kasutatud.'" >  ' ;
echo '<INPUT TYPE="hidden" NAME="valed" VALUE="'.$valed.'" >  ' ;
?>

</p>
<p>
Vastus: <input type = "text" name = "vastus" required oninvalid="this.setCustomValidity('Siia pead kirjutama enda vastuse!')" oninput="setCustomValidity('')"/>
<input type = "submit" id="kontroll" value="Kontrolli" />
</form>
</p>
<p>
Küsimused: <?= $koik+1?> / 10
</p>
<p>
Skoor: <?= round(($punkt / $koik) * 100) ;?> % <br>
</p>
<?php 
} else {
//peale 10-t küsimust ilmub küsimuste kasti kasutajale lõplik tagasiside
echo "<p> Mäng läbi! </p> <p> Sinu skoor: " .$punkt. "/" .$koik. "</p>" ;
}
?>
</div>
<div class="tagasiside">
<?php
if ($tekst1 !== "") {
	echo $tekst1;
} 
if ($tekst2 !== "") {
	echo $tekst2;
} 
if ($tekst3 !== "") {
	echo $tekst3;
}
?>
</div>
</div>
</body>
</html> 