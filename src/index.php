<?php
$n = 7;
for ($i = 0; $i < 7; $i++) {
    $flaga = 0;
    $flagb = 0;
    for ($j = 0; $j < $n - $i; $j++) {
        if ($i == $j) {
            $flaga = 1;
        }
        if ($flaga == 1) {
            echo ($n - $i - 3)." ";
        } else {
            echo ($n - $i - 2)." " ;
        }
    }
    echo "<br>";
}
?>