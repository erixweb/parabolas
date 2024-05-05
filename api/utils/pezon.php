<?php
function pezón($a, $b, $c)
{

    echo "<h2>2. Pezón</h2>";
    try {
        $operationX = (-($b)) / (2 * $a);
        echo "<p>\(x = \\frac{-b}{2*a} = \\frac{-($b)}{2 * $a} = $operationX\)</p>";
        $operationY = ($a * $operationX ** 2) + ($b * $operationX) + $c;
        echo "<p>\(y = $a · $operationX^2 + $b · $operationX + $c = $operationY\)</p>";
        echo "<p>\(P($operationX, $operationY)\) --> Pezón X, Y</p> ";
    } catch (Error) {
        die("Esta parábola no es válida porque no se puede dividir entre 0.");
    }
}