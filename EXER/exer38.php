<!DOCTYPE html>
<html>
<head>
    <title>EXER 38</title>
</head>
<body>

    <?php

        $custo_produto = 520.36;

        function acrescentaLucro(&$custo_produto)
        {

            $custo_produto += ($custo_produto * (70/100));

        }

        acrescentaLucro($custo_produto);

        echo "Valor final do produto: " . number_format($custo_produto, 2, ",", ".");

    ?>

</body>
</html>