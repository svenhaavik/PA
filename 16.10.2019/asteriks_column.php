<?php
// for(tjm = alg; tjm <= lopp; tjm++)
// for(tjm = lopp; tjm > alg; tjm--)
for($count = 1; $count <= 25; $count++){
    echo $count;
    if($count < 10) {
        echo '&nbsp;&nbsp;&nbsp;';
    } else {
        echo '&nbsp;';
    }
    echo '*<br>';
}