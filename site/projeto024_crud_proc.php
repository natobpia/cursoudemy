<?php

    session_start();

    include_once("conexao.php");

    //$nome = $_POST['nome'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    //$email = $_POST['email'];
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $result_usuarios = "INSERT INTO usuarios (nome, email, situacao_id, niveis_acesso_id, created) 
    VALUES ('$nome', '$email', '2', '3', NOW())";

    $resultado_usuarios = mysqli_query($conn, $result_usuarios);

    if(mysqli_insert_id($conn)){

        $_SESSION['msg'] = "<span style='color: green;'> Usuário cadastrado com sucesso</span>";

        header("Location: projeto022_crud_listar.php");

    } else{

        $_SESSION['msg'] = "<span style='color: red;'> Usuário não foi cadastrado com sucesso</span>";

        header("Location: projeto023_crud_create.php");

    } 
