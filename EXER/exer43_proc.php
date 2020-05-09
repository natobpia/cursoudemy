<?php

    $codigo = $_GET['codigo'];
    $salario = $_GET['salario'];
    $novo_salario = 0;
    $valor_aumento = 0;

    if($codigo == 1){

        echo "Cargo: Escriturário <br>";
        echo "Salário atual: R$" . number_format($salario, 2, ",", ".")  . "<br>";
        echo "Valor do aumento: R$" . number_format($valor_aumento = $salario * 0.5, 2, ",", ".") . "<br>";
        echo "Novo Salário: R$" . number_format($novo_salario = $salario + $valor_aumento, 2, ",", ".") . "<br>";
        

    } elseif($codigo == 2){

        echo "Cargo: Secretário <br>";
        echo "Salário atual: R$" . number_format($salario, 2, ",", ".")  . "<br>";
        echo "Valor do aumento: R$" . number_format($valor_aumento = $salario * 0.35, 2, ",", ".") . "<br>";
        echo "Novo Salário: R$" . number_format($novo_salario = $salario + $valor_aumento, 2, ",", ".") . "<br>";
        
        

    } elseif($codigo == 3){

        echo "Cargo: Caixa <br>";
        echo "Salário atual: R$" . number_format($salario, 2, ",", ".")  . "<br>";
        echo "Valor do aumento: R$" . number_format($valor_aumento = $salario * 0.2, 2, ",", ".") . "<br>";
        echo "Novo Salário: R$" . number_format($novo_salario = $salario + $valor_aumento, 2, ",", ".") . "<br>";
         
        

    } elseif($codigo == 4){

        echo "Cargo: Gerente <br>";
        echo "Salário atual: R$" . number_format($salario, 2, ",", ".")  . "<br>";
        echo "Valor do aumento: R$" . number_format($valor_aumento = $salario * 0.1, 2, ",", ".") . "<br>";
        echo "Novo Salário: R$" . number_format($novo_salario = $salario + $valor_aumento, 2, ",", ".") . "<br>";
        
       

    } elseif($codigo == 5){

        echo "Cargo: Diretor <br>";
        echo "Salário atual: R$" . number_format($salario, 2, ",", ".")  . "<br>";
        echo "Valor do aumento: R$" . number_format($valor_aumento = $salario * 0.05, 2, ",", ".") . "<br>";
        echo "Novo Salário: R$" . number_format($novo_salario = $salario + $valor_aumento, 2, ",", ".") . "<br>";
        
        
    }
