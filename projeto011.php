<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <title>IF...ELSEIF...ELSE</title>
</head>
<body>
    <?php

    $a = 1;

    if($a == 2){
        echo "Depositar dinheiro";
    }elseif($a == 1){
        echo "Sacar dinheiro";
    }else{
        echo "Opção encontrada";
    }

    ?>

</body>
</html>