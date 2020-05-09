<?php

    session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>EXER 48</title>
</head>
<body>
    <?php

    $_SESSION['msg'] = "Usuário cadastrado com sucesso";

    echo $_SESSION['msg'];

    ?>

</body>
</html>