<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $result_usuarios = "SELECT * FROM usuarios LIMIT 2";

    $resultado_usuario = mysqli_query($conn, $result_usuarios);

    while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){

        echo "ID: " . $row_usuario['id'] . "<br>";
        echo "Nome: " . $row_usuario['nome'] . "<br>";
        echo "Email: " . $row_usuario['email'] . "<br><hr>";

    }


    echo "*************** OFFSET *************** <hr>";


    $result_usuarios = "SELECT * FROM usuarios LIMIT 3 OFFSET 2";

    $resultado_usuario = mysqli_query($conn, $result_usuarios);

    while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){

        echo "ID: " . $row_usuario['id'] . "<br>";
        echo "Nome: " . $row_usuario['nome'] . "<br>";
        echo "Email: " . $row_usuario['email'] . "<br><hr>";

    }


