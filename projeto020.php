<!DOCTYPE html>
<html>
<head>
    <title>Funções Recursivas</title>
</head>
<body>

    <?php

    function exibe($num)
    {
        if($num != 0){
        echo "Valor passado para função: $num <br>";
        exibe($num-1);
        }
    }

    exibe(10);

    ?>

</body>
</html>