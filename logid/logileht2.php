<html>
<head>
<h1 ALIGN=center>Valesti vastatud sõrmendite järjendid<h1/>
<?php
$valed = array();
$koik = array();
$protsent = array();
$kuu = date("Y-m");
$avafail = fopen("ssonad$kuu.txt", "r");
if ($avafail) {
    while (($rida = fgets($avafail)) !== false) {
        $rida = str_replace("\n", "", $rida);
		$vordle = explode("|", $rida);
		array_push($koik, $vordle[1]);
		if ($vordle[0] !== $vordle[1]) {
		  array_push($valed, $vordle[1]);
		}
    }

    fclose($avafail);
	$loe = array_count_values($koik);
	$loe_v = array_count_values($valed);
	arsort($loe_v);
	echo "Loe valed: ";
	print_r($loe_v);
} else {
    // error opening the file.
} 

?>
<head/>
<html/>