<?php
for($row = 1; $row < 6; $row++) {
    echo $row;
//  spaces
    for($col = 1; $col < (6-$row); $col++) {
        echo '&nbsp;&nbsp;&nbsp;';
    }
//  asterikses - left
    for($col = 1; $col <= ($row * 2 - 1); $col++) {
        echo '*&nbsp;';
    }
    echo '<br>';
}