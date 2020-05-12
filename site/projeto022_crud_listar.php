<?php

    session_start();
    include_once("conexao.php");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>CRUD - LISTAR</title>
</head>
<body>

    <a href="projeto023_crud_create.php">Cadastrar</a>

    <?php

    echo "<h1>Listar os usuários</h1>";

    if(isset($_SESSION['msg'])){

        echo "<p>" . $_SESSION['msg'] . "</p>";

        unset($_SESSION['msg']);
    }

    $result_qnt_user = "SELECT COUNT(id) as qnt_usuarios FROM usuarios";

    $resultado_qnt_user = mysqli_query($conn, $result_qnt_user);

    $row_qnt_user = mysqli_fetch_assoc($resultado_qnt_user);
    echo "<h3>Quantidade de Usuários: " . $row_qnt_user['qnt_usuarios'] . "</h3>";

    $result_usuarios = "SELECT user.*,
    sit.nome AS name_sit,
    nivac.nome AS name_nivac
    FROM usuarios AS user
    INNER JOIN situacoes AS sit ON user.situacao_id = sit.id
    INNER JOIN niveis_acessos AS nivac ON user.niveis_acesso_id = nivac.id";

    $resultados_usuarios = mysqli_query($conn, $result_usuarios);

    while($row_usuarios = mysqli_fetch_assoc($resultados_usuarios)){

        echo "ID: " . $row_usuarios['id'] . "<br>";
        echo "Nome: " . $row_usuarios['nome'] . "<br>";
        echo "Email: " . $row_usuarios['email'] . "<br>";
        echo "Situação: " . $row_usuarios['name_sit'] . "<br>";
        echo "Nível de Acesso: " . $row_usuarios['name_nivac'] . "<br>";
        echo "<a href='projeto025_crud_update.php?id=" . $row_usuarios['id'] . "'>Editar</a><br>";
        echo "<a href='projeto027_crud_delete.php?id=" . $row_usuarios['id'] . "'>Deletar</a><hr>";

    }

    ?>

</body>
</html>