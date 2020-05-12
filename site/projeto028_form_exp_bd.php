<?php

    session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Exportar BD</title>
</head>
<body>
    <h1>Exportar base de dados</h1>

    <?php

    if(isset($_SESSION['msg'])){
        echo "<p>" . $_SESSION['msg'] . "</p>";
        unset($_SESSION['msg']);
    }

    ?>

    <form method="POST" action="projeto029_proc_exp_bd.php" enctype="multipart/form-data">
        <label>Servidor: </label>
        <input type="text" name="servidor" placeholder="Digite o Servidor"><br><br>

        <label>Usuário: </label>
        <input type="text" name="usuario" placeholder="Digite o usuário"><br><br>

        <label>Senha: </label>
        <input type="senha" name="senha" placeholder="Senha da base de dados"><br><br>

        <label>Base de dados: </label>
        <input type="text" name="dbname" placeholder="Nome da base de dados"><br><br>

        <input type="submit" value="Exportar">
        
    </form>

</body>
</html>