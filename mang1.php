<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="kujundus.css">
<title>Sõrmendtähestik</title>
<?php
//valitakse failis andmed.php oletavetes sõnastikest üks
mb_internal_encoding("UTF-8");
include 'andmed.php';
$tase = $_GET['tase'];
if ($tase == 'A-H') {
	$kysimused=$yks;
	$mang="Tähed A-H";
}
if ($tase == 'A-P') {
	$kysimused=$kaks;
	$mang="Tähed A-P";
}
if ($tase == 'A-U') {
	$kysimused=$kolm;
	$mang="Tähed A-U";
}
if ($tase == 'A-Y') {
	$kysimused=$neli; 
	$mang="Tähed A-Y";
}
if ($tase =='') {
	$kysimused=$neli;
	$mang="Tähed A-Y";
}

//moodustatakse sõnastike võtmetest eraldi järjend, et nende hulgast valida küsitav täht
$keys = array_keys($kysimused);
$arrlength = count($keys);
$leitud= False;
while ($leitud == False) {
	$proovi = rand(0,$arrlength-1);
	//kontrollitakse, et sama tähte pole enne küsimusena kasutatud
	if (strpos($_POST["kasutatud"], $keys[$proovi]) === False) {
		$voti = $keys[$proovi];
		$leitud = True;
	}	
}
//valitakse võtmete järjendist vastusevariandid
shuffle($keys);
$vastused = array();
array_push($vastused, $voti);
$i = 0;
while (count($vastused) < 4) {
	if ($keys[$i] !== $voti) {
		array_push($vastused, $keys[$i]);
		$i++;
	} else {
		$i++;
	}
}

$pilt = $kysimused[$voti];

$kuu = date("Y-m");
$punkt=0;
$koik=0;
$valed="";
$kasutatud = "";
$tekst1= "";
$tekst2="";
$tekst3="";
//kui on vastus esitatud siis salvestatakse andmed logifaili ja kontrollitakse vastuse õigsust ning uuendatakse punktiarvestust
   if( $_POST["vastus"] ) {
   $fail = fopen("logid/$kuu.txt", "a") or die("Ei suuda faili avada!");
   fwrite($fail,$_POST["vastus"] . "|" . $_POST["oigevastus"]. "|" .$_POST["variandid"]. "\n");
   fclose($fail);
   $punkt=$_POST["punktid"];
   $koik=$_POST["koikpunktid"];
   $koik++;
   $kasutatud =  substr($_POST["kasutatud"],-($arrlength/2));
   $valed = $_POST["valed"];
	  if ($_POST["vastus"] == $_POST["oigevastus"]) {
	  $tekst1 .= "<p> Õige vastus! </p>"  ;
	  $punkt++;
	  } else {
	  $tekst2 .= "<p> Vale vastus! </p>"  ;
	  $tekst3 .= "<p> Õige vastus oli ". $_POST['oigevastus']. "</p>" ;
	  $valed .= $_POST["oigevastus"];
	  $strlen= mb_strlen($_POST['valed']);
      }
  } 
$kasutatud .=  $voti;
?>
</head>
<body onload="keela()">
<div class="container">
<?php echo "<h1 class='vasak'>Sõrmendtähestik: ". $mang . "</h1>" ; ?>
<div class="menu">
<?php include 'menu.php';?>
</div>
<script>
function keela() {
    document.getElementById("kontroll").disabled = 'disabled';
}
</script>
<div class="keskel">
<?php
if ($koik < 10 ) {
?>
<h1>Milline täht vastab sõrmendile?<h1/>
<form action = "mang1.php?tase=<?=$tase?>" method = "POST">
<p><img src="sormendid/<?= $pilt ?>" alt="sormendA"/></p>
<p>
<?php
//säilitatakse mängija punktid, küsitud küsimuste arv, õige vastus ning kasutatud küsimused.
echo '<INPUT TYPE="hidden" NAME="punktid" VALUE="'.$punkt.'" >  ' ;
echo '<INPUT TYPE="hidden" NAME="koikpunktid" VALUE="'.$koik.'" >  ' ;
echo '<INPUT TYPE="hidden" NAME="oigevastus" VALUE="'.$vastused[0].'" >  ' ;
echo '<INPUT TYPE="hidden" NAME="kasutatud" VALUE="'.$kasutatud.'" >  ' ;

//kuvatakse ekraanile 4 vastusevarianti suvalises järjekorras
shuffle($vastused);
$variandid = "";
foreach ($vastused as $vastus) {
echo '<INPUT TYPE="radio" NAME="vastus" VALUE="'.$vastus.'" onclick="luba()">'.$vastus. ' ';
$variandid .= $vastus;
}
//säilitatakse kuvatud vastusevariandid ning kasutaja poolt valesti vastatud küsimused
echo '<INPUT TYPE="hidden" NAME="variandid" VALUE="'.$variandid.'" >  ' ;
echo '<INPUT TYPE="hidden" NAME="valed" VALUE="'.$valed.'" >  ' ;
?>
<script>
function luba() {
    document.getElementById("kontroll").disabled = false;
}
</script>

</p>
<p>
<input type = "submit" id="kontroll" value="Kontrolli" />
</form>
</p>
<p>
Küsimused: <?= $koik+1?> / 10
</p>
<p>
Skoor: <?= round(($punkt / $koik) * 100) ;?> %
</p>
<?php
} else {
?>
<?php
//peale 10-t küsimust ilmub küsimuste kasti kasutajale lõplik tagasiside
echo "<p>Mäng läbi! </p> <p> Sinu skoor: " .$punkt. "/" .$koik. "</p>" ;
//peale skoori näidatakse kasutajale ka valesti vastatus sõrmentide pilte
if ($strlen > 0) {
	echo "<p> Neid sõrmendeid ei tundnud Sa ära: </p>";
	for( $i = 0; $i < $strlen +1; $i++ ) {
		$char = mb_substr( $valed, $i, 1, "utf-8" );
		echo '<img src="sormendid2/' . $sormendid[$char]. '" alt="'.$char.' "/>' ;
	}
}
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