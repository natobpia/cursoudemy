<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "celke";

    //Criar a conexão
    $conn = mysqli_connect($servidor, $usuario, $senha);

    if(!$conn){
        die("Falha na conexão" . $mysqli_connect_error());
    } else{
        echo "Conexão realizada com sucesso";
    }

