<html>
<head>
<h1 ALIGN=center>Logileht<h1/>
<?php
$valed = array();
$avafail = fopen("2016-04.txt", "r");
if ($avafail) {
    while (($rida = fgets($avafail)) !== false) {
        $rida = str_replace("\n", "", $rida);
		$vordle = explode("|", $rida);
		if ($vordle[0] !== $vordle[1]) {
		  array_push($valed, $vordle[1]);
		  echo "Rida: " . $rida .  "</br>";
		}
    }

    fclose($avafail);
	print_r(array_count_values($valed));
} else {
    // error opening the file.
} 

?>
<head/>
<html/>