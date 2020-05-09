<?php

    session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>SESSÃO</title>
</head>
<body>
    <?php

    $_SESSION['usuario'] = "natob@hotmail.com";
    $_SESSION['senha'] = "123zbc";

    echo "Usuário: " . $_SESSION['usuario'] . "<br>";
    echo "Senha: " . $_SESSION['senha'] . "<br>";

    //unset($_SESSION['usuario']);

    echo "Usuário: " . $_SESSION['usuario'] . "<br>";
    echo "Senha: " . $_SESSION['senha'] . "<br>";


    ?>

</body>
</html>