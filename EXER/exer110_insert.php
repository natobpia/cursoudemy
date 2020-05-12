<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $nome = "Funcionário";

    $result_niveis_acessos = "INSERT INTO niveis_acessos (nome, created) 
    VALUES ('$nome', NOW())";

    $resultado_niveis_acessos = mysqli_query($conn, $result_niveis_acessos);

    if(mysqli_insert_id($conn)){
        echo "Cadastro realizado com sucesso!";
        echo "ID: " . mysqli_insert_id($conn) . "<br>";
    } else {
        echo "Erro ao realizar o cadastro!";
    }