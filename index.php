
<Link rel="stylesheet" href="style.css">

<?php

$nimi = "Janek Vassin";
$n = 32; // täisarv e integer
$n1 = 2.4423; // kümnendmur e float e ujukomaarv
$t = true; // tõeväärtus e boolean

$m = array (8, "Tere", $n, 3.14, $nimi, false);

array (1, "Janek", "Vassin");

$n2 = 112;
$n3 = "112";
$nn = $n2 + $n;
$nm = $n2.$n1;


echo "<h1>Tere! $nimi</h1>";

echo "<p>See ei ole pealkiri</p>";

echo "<p>".$m[2]."</p>"; //concatenate e ühendamine

echo $nn;

echo $nn." ".$nm."<br />";

echo  "$n2 krüpteeritult on: ".md5($n2);

?>