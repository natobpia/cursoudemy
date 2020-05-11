<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $result_usuarios = "SELECT * FROM usuarios WHERE situacao_id = 1 AND niveis_acesso_id = 1";
    $resultado_usuarios = mysqli_query($conn, $result_usuarios);

    while($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)){

        echo "ID: " . $row_usuarios['id'] . "<br>";
        echo "Nome: " . $row_usuarios['nome'] . "<br>";
        echo "Email: " . $row_usuarios['email'] . "<br>";
        echo "Situação: " . $row_usuarios['situacao_id'] . "<br>";
        echo "Nível de Acesso: " . $row_usuarios['niveis_acesso_id'] . "<br>";

    }
