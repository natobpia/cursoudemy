<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $result_usuarios = "SELECT id, nome AS nome_usuario FROM usuarios";

    $resultado_usuarios = mysqli_query($conn, $result_usuarios);

    while($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)){

        echo "ID: " . $row_usuarios['id'] . "<br>";
        echo "Nome: " . $row_usuarios['nome_usuario'] . "<br>";
       
    }