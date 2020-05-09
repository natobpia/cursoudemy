<!DOCTYPE html>
<html>
<head>
    <title>EXER 44</title>
</head>
<body>

    <h1>Receber os dados da fazenda irrigada</h1>
    
    <form action="exer44_proc.php " method="POST">
        
        Hectares: <input type="text" name="area_hectares" placeholder="Digite a área" required><br><br>

        Quantidade de m³: <input type="text" name="gasto_agua_por_hectar" placeholder="Digite gasto de água por hectar" required><br><br>

        Preço de agua por m²: <input type="text" name="gasto_agua_por_m3" placeholder="Digite o gasto de água por m³" required><br><br>

        Custo Agregados: <input type="text" name="custos_agregados" placeholder="Digite valores agregados" required><br><br>

        <button type="submit" value="enviar">Enviar</button>

    </form>

</body>
</html>