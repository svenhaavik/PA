<?php
$age = 75;
echo 'Vanus = '.$age.'<br>';
if($age > 0 and $age < 18) {
    echo 'Oled alaealine<br>';
} elseif($age > 17 and $age < 66) {
    echo 'Oled täiskasvanu<br>';
} elseif($age >65) {
    echo 'Oled senioor<br>';
} else {
    echo 'Midagi on nässus';
}