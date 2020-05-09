<?php

    $nome_aluno = $_GET['aluno'];
    $nota_aluno = $_GET['nota'];

    if($nota_aluno >= 8){
        echo "O aluno $nome_aluno teve conceito A com nota: $nota_aluno <br>";
    } elseif($nota_aluno >= 7.0 && $nota_aluno <= 7.9){
        echo "O aluno $nome_aluno teve conceito B com nota: $nota_aluno <br>";
    } elseif($nota_aluno >= 6.0 && $nota_aluno <= 6.9){
        echo "O aluno $nome_aluno teve conceito C com nota: $nota_aluno <br>";
    } elseif($nota_aluno >= 5.0 && $nota_aluno <= 5.9){
        echo "O aluno $nome_aluno teve conceito D com nota: $nota_aluno <br>";
    } elseif($nota_aluno >= 0 && $nota_aluno <= 4.9){
        echo "O aluno $nome_aluno teve conceito E com nota: $nota_aluno <br>";
    }
