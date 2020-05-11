<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $result_usuarios = "DELETE FROM usuarios where id='5'";

    $resultados_usuarios = mysqli_query($conn, $result_usuarios);

    if(mysqli_affected_rows($conn)){
        
        echo "Apagado com sucesso!";
    } else{
        echo "Erro usuário não foi apagado.";
    }
