<?php
$numberOne = $_GET['numberOne'];
$numberTwo = $_GET['numberTwo'];

if(strlen($numberOne) > 0 and strlen($numberTwo) > 0){
    if($numberOne > $numberTwo){
        echo $numberOne.' on suurem kui '.$numberTwo;
    } elseif ($numberOne < $numberTwo) {
        echo $numberOne.' on väiksem kui '.$numberTwo;
    } else {
        echo $numberOne.' on võrdne '.$numberTwo;
    }
}