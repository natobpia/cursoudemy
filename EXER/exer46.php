<!DOCTYPE html>
<html>
<head>
    <title>EXER 46</title>
</head>
<body>

    <?php


    if(isset($_COOKIE["id_produto"])){
        echo "Cookie com o ID do produto: ".$_COOKIE["id_produto"] . "<br>";
    } else{

        setcookie("id_produto", "5688", (time() + (180 * 24 * 3600)));
                echo "Criado do cookies<br>";
    }

    ?>

</body>
</html>