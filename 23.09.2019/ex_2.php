<?php
// Muutujad
$eesNimi = "Sven";
$pereNimi = "Haavik";
$vanus = "19";
$pikkus = "1.83";
$kaal = "70";

// Väljastus
echo $eesNimi."<br>";
echo $pereNimi."<br>";
echo 'Vanus: '.$vanus."<br>";
echo 'Pikkus: '.$pikkus."<br>";
echo 'Kaal: '.$kaal."<br>";

// Arvutamine
// $muutuja = väärtus;
$kmi = $kaal / ($pikkus * $pikkus);
echo 'Minu kehamassiindeks: '.$kmi.'<br>';