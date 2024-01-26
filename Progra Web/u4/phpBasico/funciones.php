<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Las funciones en php son similares a las funciones en JavaScript</h2>
    <p>Por ejemplo:</p>
    echo $'.calculaIntereses(250000.00,10,"semestral");
    <br>
    <?php
    function calculaIntereses($capital, $tasa, $periodo)
    {
        if (strcmp($periodo, "anual")) {
            $tiempo = 1.0;
        }
        if (strcmp($periodo, "trimestral")) {
            $tiempo = 0.25;
        }
        if (strcmp($periodo, "semestral")) {
            $tiempo = 0.5;
        }
        $intereses = $capital * ($tasa / 100) * $tiempo;
        return $intereses;
    }
    echo 'Los intereses a recibir son:
        $' . calculaIntereses(250000.00, 10, "semestral");
    ?>
</body>

</html>
<?php

?>