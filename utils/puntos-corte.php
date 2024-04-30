<?php

function puntosCorte()
{
    global $a, $b, $c;
    echo "<h2>---- Puntos de corte ----</h2>";

    echo "<p>\(Pt. de-corte_y = c = $c\)</p>";
    $insideSqrt = ($b ** 2) - (4 * $a * $c);
    $resultAdd = (-($b) + (sqrt($insideSqrt))) / (2 * $a);
    $resultSubtract = (-($b) - (sqrt($insideSqrt))) / (2 * $a);
    echo "\(Pt. de-corte_x = \\frac{-$b ± √$b^2 - 4 * $a * $c}{2 * $a} = (+) $resultAdd || (-) $resultSubtract\)";
}