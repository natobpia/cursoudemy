<!DOCTYPE html>
<html>
<head>
    <title>Passagem de parametros por valor e referencia</title>
</head>
<body>

    <?php

    echo "<h4>Passagem por valor</h4>";

    function salario($num)
    {
        $num += 5;
        echo "Salario com aumento: $num <br>";
    }

    $salario = 8200;

    salario($salario);

    echo "Salario sem aumento: $salario <br>";

    echo "<h4>Passagem por referencia</h4>";

    function salarioA(&$num)
    {
        $num += 10;
        echo "Salario com aumento: $num <br>";
    }

    $salarioA = 8200;

    salarioA($salarioA);

    echo "Salario com aumento(Referência): $salarioA <br>";

    ?>

</body>
</html>