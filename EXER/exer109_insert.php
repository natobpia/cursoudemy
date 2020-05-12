<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $nome = "Desativado";
   

    $result_situacaos = "INSERT INTO situacoes (nome, created) 
    VALUES ('$nome', NOW())";

    $resultado_situacaos = mysqli_query($conn, $result_situacaos);

    if(mysqli_insert_id($conn)){
        echo "Cadastro realizado com sucesso!";
        echo "ID: " . mysqli_insert_id($conn) . "<br>";
    } else {
        echo "Erro ao realizar o cadastro!";
    }