<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $result_usuarios = "SELECT AVG(qnt_acessos) as qnt_acessos FROM usuarios";
    $resultado_usuarios = mysqli_query($conn, $result_usuarios);

    while($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)){
        echo "Média de acessos: " . (int)$row_usuarios['qnt_acessos'] . "<br>";
    }