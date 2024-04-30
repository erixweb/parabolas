<?php

function puntosCorte()
{
    global $a, $b, $c;
    echo "<h2>3. Puntos de corte</h2>";

    echo "<p>\(PuntoDeCorte_y = c = $c\)</p>";
    // Arrel quadrada 
    $insideSqrt = ($b ** 2) - (4 * $a * $c);
    // Result +
    $resultAdd = (-($b) + (sqrt($insideSqrt))) / (2 * $a);
    // Result - 
    $resultSubtract = (-($b) - (sqrt($insideSqrt))) / (2 * $a);
    
    
    if (!hasSolution($resultAdd)) {
        echo "\(PuntoDeCorte_x = \\frac{-$b ± √$b^2 - 4 · $a · $c}{2 · $a} = NoSolucióReal\)";

        die("<p><strong>Este problema no tiene solución real</strong></p>");
    }
    echo "\(PuntoDeCorte_x = \\frac{-$b ± √$b^2 - 4 · $a · $c}{2 · $a} = (+) $resultAdd || (-) $resultSubtract\)";
}

function hasSolution ($result) {
    if (is_nan($result)) {
        return false;
    }

    return true;
}