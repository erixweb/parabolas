<html>

<head>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 17px;
        }

        pre * {
            line-height: 15px;
        }
    </style>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script type="text/javascript" id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js"></script>
</head>

<body>
    <form action="" method="get">
        <input type="text" placeholder="a" name="a">
        <input type="text" placeholder="b" name="b">
        <input type="text" placeholder="c" name="c">
        <input type="submit">
    </form>

    <p>
        La <strong>a</strong> es la que tiene el x elevado a 2.
        La <strong>b</strong> la que tiene una x.
        La <strong>c</strong> la que no tiene nada.
    </p>
    <?php
    if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])) {
        $a = (float) $_GET["a"];
        $b = (float) $_GET["b"];
        $c = (float) $_GET["c"];

        function isHappy($a)
        {
            return $a > 0;
        }
        echo "<h2>---- Feliz/Triste ----</h2>";

        echo "<p>" . match (true) {
            isHappy($a) => "Feliz\n",
            !isHappy($a) => "Triste\n"
        } . "<p>";

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


        pezón();


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

        puntosCorte();
    }
    ?>
</body>

</html>