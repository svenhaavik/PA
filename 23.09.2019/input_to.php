<?php
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$age = $_GET['age'];
$height = $_GET['height'];
$weight = $_GET['weight'];

echo '<h1>Minu Andmed</h1>';
echo 'Eesnimi: '.$firstName.'<br>';
echo 'Perenimi: '.$lastName.'<br>';
echo 'Vanus: '.$age.'<br>';
echo 'Pikkus: '.$height.'<br>';
echo 'Kaal: '.$weight.'<br>';
echo '<br>';
$bmi = $weight / ($height * $height);
echo '<b>'.$firstName.' '.$lastName.'</b>, Sinu KMI on '.$bmi.'<br>';