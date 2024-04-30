<?php
function extraPoints()
{
    global $a, $b, $c;

    echo "<h2>4. Puntos extra</h2>";
    // Arrel quadrada 
    $insideSqrt = ($b ** 2) - (4 * $a * $c);
    // Result +
    $resultAdd = (-($b) + (sqrt($insideSqrt))) / (2 * $a);
    // Result - 
    $resultSubtract = (-($b) - (sqrt($insideSqrt))) / (2 * $a);
    // First extra point
    $addRound1 = round($resultAdd+1);
    $resultY_1 = ($a * $addRound1**2)+($b * $addRound1)+($c);
    
    // Second extra point
    $addRound2 = round($resultAdd+2);
    $resultY_2 = ($a * $addRound2**2)+($b * $addRound2)+($c);

    // Third extra point
    $addRound3 = round($resultAdd+3);
    $resultY_3 = ($a * $addRound3**2)+($b * $addRound3)+($c);
    echo "<br>
    x | y<br>
    $addRound1 | $resultY_1<br>
    $addRound2 | $resultY_2<br>
    $addRound3 | $resultY_3
    ";
}