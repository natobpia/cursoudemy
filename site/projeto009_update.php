<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $result_usuarios = "UPDATE usuarios SET situacao_id='1', modified=NOW() WHERE id='5'";

    $resultado_usuarios = mysqli_query($conn, $result_usuarios);

    if(mysqli_affected_rows($conn)){
        echo "Alterado com sucesso";

    }else {
        echo "Erro ao alterar o usuário";
    }