<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $result_usuarios = "SELECT * FROM usuarios WHERE niveis_acesso_id IN ('2' , 3)";

    $resultados_usuarios = mysqli_query($conn, $result_usuarios);

    while($row_usuarios = mysqli_fetch_assoc($resultados_usuarios)){

        echo "ID: " . $row_usuarios['id'] . "<br>";
        echo "Nome: " . $row_usuarios['nome'] . "<br>";
        echo "Nível de acesso: " . $row_usuarios['niveis_acesso_id'] . "<br>";
    }