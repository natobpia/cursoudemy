<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $result_usuarios = "SELECT COUNT(id) as qnt_usuarios FROM usuarios WHERE situacao_id=3";

    $resultados_usuarios = mysqli_query($conn, $result_usuarios);

    while($row_usuarios = mysqli_fetch_assoc($resultados_usuarios)){
        echo "Quantidade de usuários: " . $row_usuarios['qnt_usuarios'] . "<br>";
    }