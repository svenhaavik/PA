<?php
$numberOne = $_GET['numberOne'];
$numberTwo = $_GET['numberTwo'];

if(strlen($numberOne) > 0 and strlen($numberTwo) > 0){
    if($numberTwo !=0) {
        echo $numberOne.' / '.$numberTwo.' = '.$numberOne / $numberTwo;
    } else {
        echo 'Nulliga jagamine keelatud';
    }
} else {
    echo 'Sisesta kõik väärtused';
}