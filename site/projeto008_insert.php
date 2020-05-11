<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $nome = "Carlos";
    $email = "carlos@celke.com.br";


    $result_usuarios = "INSERT INTO usuarios (nome, email, situacao_id, niveis_acesso_id, created) 
    VALUES ('$nome', '$email', '2', '3', NOW())";

    $resultado_usuarios = mysqli_query($conn, $result_usuarios);

    if(mysqli_insert_id($conn)){
        echo "Inserido com sucesso!<br>";
        echo "ID: " . mysqli_insert_id($conn);
    }else{
        echo "Erro ao inserir no banco de dados!<br>";
        echo "ID: " . mysqli_insert_id($conn);
    }
