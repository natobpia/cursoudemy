<?php

    session_start();
    include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

    $result_usuario = "UPDATE usuarios SET 
    nome='$nome',
    email='$email',
    modified=NOW()
    WHERE id='$id'";

    $resultados_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn)){

        $_SESSION['msg'] = "<span style='color: green;'> Usuário editado com sucesso</span>";

        header("Location: projeto022_crud_listar.php");

    } else{

        $_SESSION['msg'] = "<span style='color: red;'> Usuário não foi editado com sucesso</span>";

        header("Location: projeto025_crud_update.php");

    }
