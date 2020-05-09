<!DOCTYPE html>
<html>
<head>
    <title>EXER 47</title>
</head>
<body>
    <?php

    if(isset($_COOKIE["chave"])){

        echo "Usuário : " . $_COOKIE["chave"] . " logado <br>";

    } else{

        setcookie("chave", "5237", (time() + (2 * 3600)));

    }

    ?>

</body>
</html>