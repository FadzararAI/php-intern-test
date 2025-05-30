<?php

$x = 4; // For the row length: 2 * 4 - 1 = 7 rows

for($i = 0; $i < 2 * $x - 1; $i++){
    for($j = 0; $j < 2 * $x - 1; $j++){
        if($j === $i or $j === 2 * $x - 2 - $i)
            echo "X";
        else
            echo "O";
    }
    echo "\n";
}

?>
