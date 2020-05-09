<?php

    session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>EXER 49</title>
</head>
<body>

    <?php

    if(isset($_SESSION['msg'])){

        echo $_SESSION['msg'];

        unset($_SESSION['msg']);

    } else{
        echo "Não há sessão 'msg'";
    }

    ?>

</body>
</html>