<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <title>FOR - EXERCICIO 32</title>
</head>
<body>
    <?php


   $a = 30;

    for ($i=$a; $i <= $a + 50 ; $i++) { 
        echo "Número: $i <br>";

        echo "Data: " . date('d-m-Y H:i:s') . "<hr>";
    }

    

    
    ?>

</body>
</html>
