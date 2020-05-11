<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $result_usuarios = "SELECT * FROM usuarios WHERE nome LIKE 'a%'";

    $resultados_usuarios = mysqli_query($conn, $result_usuarios);

    while($row_usuarios = mysqli_fetch_assoc($resultados_usuarios)){
        echo "ID: " . $row_usuarios['id'] . "<br>";
        echo "Nome: " . $row_usuarios['nome'] . "<br>";
        echo "Email: " . $row_usuarios['email'] . "<br>";
    }