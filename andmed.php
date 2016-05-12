<?php
mb_internal_encoding("UTF-8");
$yks=array("A"=>"sA.png", "B"=>"sB.png", "C"=>"sC.png", "D"=>"sD.png", "E"=>"sE.png", "F"=>"sF.png",
"G"=>"sG.png", "H"=>"sH.png");
$kaks=array("A"=>"sA.png", "B"=>"sB.png", "C"=>"sC.png", "D"=>"sD.png", "E"=>"sE.png", "F"=>"sF.png",
"G"=>"sG.png", "H"=>"sH.png","I"=>"sI.png","J"=>"sJ.png","K"=>"sK.png","L"=>"sL.png","M"=>"sM.png","N"=>"sN.png",
"O"=>"sO.png","P"=>"sP.png");
$kolm=array ("A"=>"sA.png", "B"=>"sB.png", "C"=>"sC.png", "D"=>"sD.png", "E"=>"sE.png", "F"=>"sF.png",
"G"=>"sG.png", "H"=>"sH.png","I"=>"sI.png","J"=>"sJ.png","K"=>"sK.png","L"=>"sL.png","M"=>"sM.png","N"=>"sN.png",
"O"=>"sO.png","P"=>"sP.png","Q"=>"sQ.png","R"=>"sR.png","S"=>"sS.png","Š"=>"s138.png","Z"=>"sZ.png","Ž"=>"s142.png",
"T"=>"sT.png","U"=>"sU.png");
$neli=array("A"=>"sA.png", "B"=>"sB.png", "C"=>"sC.png", "D"=>"sD.png", "E"=>"sE.png", "F"=>"sF.png",
"G"=>"sG.png", "H"=>"sH.png", "I"=>"sI.png","J"=>"sJ.png","K"=>"sK.png","L"=>"sL.png","M"=>"sM.png","N"=>"sN.png",
"O"=>"sO.png","P"=>"sP.png","Q"=>"sQ.png","R"=>"sR.png","S"=>"sS.png","Š"=>"s138.png","Z"=>"sZ.png","Ž"=>"s142.png",
"T"=>"sT.png","U"=>"sU.png","V"=>"sV.png","W"=>"sW.png","Õ"=>"sOtilde.png","Ä"=>"sAuml.png","Ö"=>"sOuml.png","Ü"=>"sUuml.png","X"=>"sX.png","Y"=>"sY.png"); 
$sormendid = array("A"=>"sA.png", "B"=>"sB.png", "C"=>"sC.png", "D"=>"sD.png", "E"=>"sE.png", "F"=>"sF.png",
"G"=>"sG.png", "H"=>"sH.png", "I"=>"sI.png","J"=>"sJ.png","K"=>"sK.png","L"=>"sL.png","M"=>"sM.png","N"=>"sN.png",
"O"=>"sO.png","P"=>"sP.png","Q"=>"sQ.png","R"=>"sR.png","S"=>"sS.png","Š"=>"s138.png","Z"=>"sZ.png","Ž"=>"s142.png",
"T"=>"sT.png","U"=>"sU.png","V"=>"sV.png","W"=>"sW.png","Õ"=>"sOtilde.png","Ä"=>"sAuml.png","Ö"=>"sOuml.png","Ü"=>"sUuml.png","X"=>"sX.png","Y"=>"sY.png"); 

$tutvumine=array("VIIPLEMA", "VIIPEKEEL", "MEES", "NAINE", "TÜDRUK", "POISS", "KES", "KUS","KUIDAS","MINA","SINA","TEMA","MEIE","TEIE","NEMAD", "HÜVASTI","NÄGEMIST","PALUN","TÄNAMA","HOMMIK","ÕHTU","PÄEV","TUTVUMA","NIMI","PEREKONNANIMI", "KUULJA","KURT", "VAEGKUULJA","RÄÄKIMA",
"SÕRMENDAMA", "KORDAMA","UUESTI", "HÄSTI","NATUKE", "ÕPPIMA","TÖÖ","ELAMA","KOHTUMA","OSKAMA","KIRJUTAMA","ARMASTAMA");
$emotsioonid=array("RAHULIK","RÕÕMUS","KURB","ÕNNELIK","ÕNNETU","VIHANE","LAHKE","SOLVUMA","ÜKSKÕIKNE","VÄSINUD","AKTIIVNE");
$komplimendid=array("ILUS","TARK", "VALDAMA","OSAV","MOODNE","RIIETUS","SOENG","NÄGU","NOOR","INIMENE","TORE","SÕBER","HEA","VIISAKAS",
"SUUREPÄRANE");
$viisakus=array("TERE","AITÄH","PALUN","VABANDUS","MAITSEV","KAHJU","HILINEMA","PÄEV","HOMMIK","ÕHTU","ÕNN","SÜNNIPÄEV","PALJU");
$perekond=array('PEREKOND', 'MEES', 'NAINE', 'EMA', 'ISA', 'LAPS', 'ÕDE','VEND', 'IMIK','BEEBI', 'POEG', 'TÜTAR', 'POISS', 'TÜDRUK', 'ABIKAASA',
 'PARTNER', 'VANAEMA', 'VANAISA', 'ABIELU', 'ARMASTAMA', 'PULMAD', 'LAULATUS', 'PEIGMEES', 'PRUUT', 'ARMUKE', 'VABAABIELU', 'LAHUTATUD', 
  'LESK', 'ÕNNELIK', 'INIMENE', 'SUGULANE', 'TÄDI', 'ONU', 'NOOR', 'VANA', 'VÄIKE', 'SUUR', 'TÄISKASVANU', 
 'LAPSEVANEM', 'SÜNNITAMA', 'KAKSIKUD', 'LAPSELAPS', 'ELAMA', 'ÕPPIMA', 'TÖÖTAMA', 'PETMA', 'RIIDLEMA', 'TÜLI', 'SUREMA', 'SURM');
$omadus=array('PIKK', 'LÜHIKE', 'VÄIKE', 'SUUR', 'PAKS', 'PEENIKE', 'SALE', 'RIKAS', 'VAENE', 'ILUS', 'INETU', 'NOOR', 'VANA', 
'ÕNNELIK', 'ÕNNETU', 'KURB', 'TARK', 'RUMAL', 'UHKE', 'TAGASIHOIDLIK', 'KURI', 'TIGE','ÜKSKÕIKNE', 'SÕBRALIK', 
'LAHKE', 'KADE', 'HELE', 'TUME', 'BLOND', 'BRÜNETT', 'HABE', 'VUNTSID',  'PUNANE', 'SININE', 'KOLLANE', 'PRUUN', 'ROHELINE', 'MUST', 'VALGE', 'HALL', 'BEEŽ', 'ORANŽ', 'LILLA', 'ROOSA', 'RUUDULINE',
 'KIRJU', 'TRIIBULINE');
 $riietus=array('PÜKSID', 'SEELIK', 'KLEIT', 'PLUUS', 'JAKK', 'ÜLIKOND', 'VEST', 'KAMPSUN', 'DRESSID', 'PESU', 'VÖÖ', 'TASKURÄTIK',
 'SOKK', 'SUKAD', 'KINDAD', 'TEKSAD', 'MANTEL', 'JOPE', 'LUKK',  'RÄTIK', 'LIPS', 'MÜTS', 'KÜBAR', 'SAABAS', 'KINGSEPP', 
 'KING', 'SÕRMUS', 'KÕRVARÕNGAS', 'KÄEVÕRU', 'KAELAKEE');
$kodu=array('KODU', 'MAJA', 'KORTER', 'TÄNAV', 'ÕU', 'AADRESS', 'MAAL', 'LINN', 'ERAMAJA', 'RIDAELAMU', 'ÜHISELAMU', 'GARAAŽ', 
'AED', 'ESIK', 'KORIDOR', 'ELUTUBA', 'MAGAMISTUBA', 'KÖÖK', 'VANNITUBA', 'UKS', 'AKEN', 'PÕRAND', 'LAGI', 'LAUD',
 'TOOL', 'KAPP', 'RIIUL', 'VOODI', 'TELEKAS', 'VAIP', 'KARDIN', 'LAMP', 'PEEGEL', 'AHI', 'WC', 'DUŠŠ', 'SAUN', 'TREPP', 'KIVI',
 'PUU', 'LILL');
$toit=array('VESI', 'TEE', 'KOHV', 'PIIM', 'ALKOHOL', 'MAHL', 'JÄÄTIS', 'LEIB', 'SAI', 'VÕI', 'VÕILEIB', 'SUHKUR', 'SOOL', 'PIPAR', 
'LIHA', 'KALA', 'KARTUL', 'KAPSAS', 'PORGAND', 'JUUST', 'VORST', 'VIINER', 'SUPP', 'PUDER', 'PRAAD','SALAT', 'MAGUSTOIT', 'KÜPSIS', 'KOMM', 'ŠOKOLAAD',
 'TORT', 'KOOK', 'ÕUN', 'BANAAN', 'APELSIN', 'VIINAMARI', 'KURK', 'TOMAT', 'KOOR', 'SOOVIMA', 'SÖÖMA','KEETMA', 'KEEMA',  'KÜPSETAMA',
 'VALAMA', 'MAIASMOKK', 'MAITSEV', 'MITU', 'KLAAS','KAHVEL', 'LUSIKAS', 'TALDRIK', 'NUGA', 'KANN', 'POTT', 'PANN', 'SOOLANE', 'MAGUS', 'HAPU', 'MÕRU', 
 'PEHME', 'KÕVA', 'VÄRSKE', 'SOE', 'KÜLM', 'KUUM', 'VALMIS');
 $ametid=array('TÖÖ', 'TÖÖTAMA', 'PALK', 'RAHA', 'HARIDUS', 'TEENINDAMA', 'KULTUUR','KOOL', 'ÜLIKOOL', 'LASTEAED', 'ÕPETAJA', 
'KASVATAJA', 'ÕPPEJÕUD', 'DIREKTOR', 'REKTOR', 'PROFESSOR', 'SEKRETÄR', 'LEKTOR', 'RESTORAN', 'SÖÖKLA', 'KOHVIK', 'POOD', 'JUUKSUR', 'KOSMEETIK',
 'KELNER', 'KOKK', 'PAGAR', 'MÜÜJA', 'FOTOGRAAF', 'TEATER', 'KINO', 'TELEVISIOON', 'KIRIK', 'NÄITLEJA', 'KUNSTNIK', 'MUUSIK', 
 'KIRJANIK', 'PASTOR', 'POLITSEI', 'POLIITIK', 'HAIGLA', 'ARST', 'KIRURG', 'HAMBAARST', 'VIIPEKEELETÕLK', 'MAJANDUS', 
 'TÖÖSTUS', 'EHITUS','TRANSPORT', 'ÄRIMEES', 'RAAMATUPIDAJA', 'JUHATAJA', 'RAHA', 'KALLIS', 'ODAV', 'KROON', 'RUBLA', 'EURO', 'SENT', 'DOLLAR',
 'NAEL', 'JUHTKOND', 'DIREKTOR', 'PUUSEPP', 'KINGSEPP', 'ÕMBLEMA', 'SPETSIALIST', 'AMETNIK', 'AUTO', 'BUSS', 'TRAMM', 'TROLL', 
 'TAKSO', 'RONG', 'JUHT', 'EHITAJA', 'FIRMA', 'ETTEVÕTMINE', 'SOODNE', 'AVAMA', 'SULGEMA', 'PALUMA', 'VABANDAMA', 'PUHASTAMA',
 'OST', 'MÜÜMA', 'TEENINDUS', 'MAKSMA', 'TASUMA', 'TÄNAMA');

 ?>
 