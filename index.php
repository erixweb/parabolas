<?php
require_once "./utils/all.php"
?>
<!DOCTYPE html> 
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parábolas</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js" defer ></script>
</head>

<body>
    <main>
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

            echo "<h2>1. Feliz/Triste</h2>";

            echo "<p><strong>" . match (true) {
                isHappy($a) => "Feliz\n",
                !isHappy($a) => "Triste\n"
            } . "</strong><p>";


            pezón();

            puntosCorte();

            extraPoints();
        }
        ?>
    </main>
</body>

</html>