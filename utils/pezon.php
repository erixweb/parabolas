<?php
function pezón()
{
    global $a;
    global $b;
    global $c;

    echo "<h2>---- Pezón ----</h2>";
    $operationX = (-($b)) / (2 * $a);
    echo "<p>\(x = \\frac{-b}{2*a} = \\frac{-($b)}{2 * $a} = $operationX\)</p>";
    $operationY = ($a * $operationX ** 2) + ($b * $operationX) + $c;
    echo "<p>\(y = $a · $operationX^2 + $b · $operationX + $c = $operationY\)</p>";
    echo "<p>\(P($operationX, $operationY)\) --> Pezón X, Y</p> ";
}