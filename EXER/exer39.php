<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Passagem de parametros por valor e referencia </title>
    </head>
    <body>
        <?php       
            $area_hectare = 1287;
            $metro_hectare = 5267;
            $custo_cubico = 0.17;
            
            /************************ Função **********************************/
            /************************ Calcular o custo safra ******************/
            function calculasafra(&$custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico){
                $qnt_agua = $area_hectare * $metro_hectare;
                $custo_implantacao = ($custo_implantacao * $area_hectare) + ($qnt_agua * $custo_cubico);
                echo "Quantidade de m³ gasto de agua: " . number_format($qnt_agua, 0,",",".") . " m³<br>";
                echo "Custo safra: R$ " . number_format($custo_implantacao, 2,",",".") . "<br>";
                return $qnt_agua;
            }
            
            /*****************************************************************/
            /************************Primeiro Ano ****************************/
            /*****************************************************************/
            echo "<h1>Primeiro ano</h1>";   
            
            /************************ Primeira safra do ano ******************/     
            echo "<h3>Primeira Safra</h3>";
            $custo_implantacao = 1000;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano = $qnt_agua;
            $custo_safra_ano = $custo_implantacao;
            
            /************************ Segunda safra do ano ******************/
            echo "<h3>Segunda Safra</h3>";
            $custo_implantacao = 1000;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano += $qnt_agua;
            $custo_safra_ano += $custo_implantacao;
            
            /************************ Terceira safra do ano ******************/
            echo "<h3>Terceira Safra</h3>";
            $custo_implantacao = 1000;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano += $qnt_agua;
            $custo_safra_ano += $custo_implantacao;
            $custo_cinco_anos = $custo_safra_ano;
            echo "Quantidade de m³ gasto de agua no ano: " . number_format($qnt_agua_ano, 0,",",".") . " m³<br>";
            echo "Custo ano: R$ " . number_format($custo_safra_ano, 2,",",".") . "<br><hr>";
            
            
            /*****************************************************************/
            /************************Segundo Ano ****************************/
            /*****************************************************************/
            echo "<h1>Segundo ano</h1>";    
            
            /************************ Primeira safra do ano ******************/
            echo "<h3>Primeira Safra</h3>";
            $custo_implantacao = 1000;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano = $qnt_agua;
            $custo_safra_ano = $custo_implantacao;
            
            /************************ Segunda safra do ano ******************/
            echo "<h3>Segunda Safra</h3>";
            $custo_implantacao = 1000;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano += $qnt_agua;
            $custo_safra_ano += $custo_implantacao;
            
            /************************ Terceira safra do ano ******************/
            echo "<h3>Terceira Safra</h3>";
            $custo_implantacao = 1000;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano += $qnt_agua;
            $custo_safra_ano += $custo_implantacao;
            $custo_cinco_anos += $custo_safra_ano;
            echo "Quantidade de m³ gasto de agua no ano: " . number_format($qnt_agua_ano, 0,",",".") . " m³<br>";
            echo "Custo ano: R$ " . number_format($custo_safra_ano, 2,",",".") . "<br><hr>";
            
            
            /*****************************************************************/
            /************************Terceiro Ano ****************************/
            /*****************************************************************/
            echo "<h1>Terceiro ano</h1>";   
            
            /************************ Primeira safra do ano ******************/
            echo "<h3>Primeira Safra</h3>";
            $custo_implantacao = 1000;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano = $qnt_agua;
            $custo_safra_ano = $custo_implantacao;
            
            /************************ Segunda safra do ano ******************/
            echo "<h3>Segunda Safra</h3>";
            $custo_implantacao = 1000;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano += $qnt_agua;
            $custo_safra_ano += $custo_implantacao;
            
            /************************ Terceira safra do ano ******************/
            echo "<h3>Terceira Safra</h3>";
            $custo_implantacao = 1000;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano += $qnt_agua;
            $custo_safra_ano += $custo_implantacao;
            $custo_cinco_anos += $custo_safra_ano;
            echo "Quantidade de m³ gasto de agua no ano: " . number_format($qnt_agua_ano, 0,",",".") . " m³<br>";
            echo "Custo ano: R$ " . number_format($custo_safra_ano, 2,",",".") . "<br><hr>";
            
            
            /*****************************************************************/
            /************************Quarto Ano ****************************/
            /*****************************************************************/
            echo "<h1>Quarto ano</h1>"; 
            
            /************************ Primeira safra do ano ******************/
            echo "<h3>Primeira Safra</h3>";
            $custo_implantacao = 1000;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano = $qnt_agua;
            $custo_safra_ano = $custo_implantacao;
            
            /************************ Segunda safra do ano ******************/
            echo "<h3>Segunda Safra</h3>";
            $custo_implantacao = 1000;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano += $qnt_agua;
            $custo_safra_ano += $custo_implantacao;
            
            /************************ Terceira safra do ano ******************/
            echo "<h3>Terceira Safra</h3>";
            $custo_implantacao = 1000;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano += $qnt_agua;
            $custo_safra_ano += $custo_implantacao;
            $custo_cinco_anos += $custo_safra_ano;
            echo "Quantidade de m³ gasto de agua no ano: " . number_format($qnt_agua_ano, 0,",",".") . " m³<br>";
            echo "Custo ano: R$ " . number_format($custo_safra_ano, 2,",",".") . "<br><hr>";
            
            
            /*****************************************************************/
            /************************Quinto Ano ****************************/
            /*****************************************************************/
            echo "<h1>Quinto ano</h1>"; 
            
            /************************ Primeira safra do ano ******************/
            echo "<h3>Primeira Safra</h3>";
            $custo_implantacao = 0;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano = $qnt_agua;
            $custo_safra_ano = $custo_implantacao;
            
            /************************ Segunda safra do ano ******************/
            echo "<h3>Segunda Safra</h3>";
            $custo_implantacao = 0;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano += $qnt_agua;
            $custo_safra_ano += $custo_implantacao;
            
            /************************ Terceira safra do ano ******************/
            echo "<h3>Terceira Safra</h3>";
            $custo_implantacao = 0;
            $qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico);
            $qnt_agua_ano += $qnt_agua;
            $custo_safra_ano += $custo_implantacao;
            $custo_cinco_anos += $custo_safra_ano;
            echo "Quantidade de m³ gasto de agua no ano: " . number_format($qnt_agua_ano, 0,",",".") . " m³<br>";
            echo "Custo ano: R$ " . number_format($custo_safra_ano, 2,",",".") . "<br><hr>";
            
            /*****************************************************************/
            /************************Conclusão após 5 anos *******************/
            /*****************************************************************/
            
            echo "Custo de 5 anos: R$ " . number_format($custo_cinco_anos, 2,",",".") . "<br><hr>";
        ?>
    </body>
</html>


