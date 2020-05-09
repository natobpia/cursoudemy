<!DOCTYPE html>
<html>
<head>
    <title>EXER 34</title>
</head>
<body>

    <?php

    $notas = [9,8,5,7,8,9,10,9,10,8,7,10,9];
    $total_nota = 0;
    $qnt_votos = 0;    

    foreach ($notas as $key => $nota) {
        $total_nota += $nota;
        $qnt_votos++;

    }

    $media = $total_nota / $qnt_votos;
    echo "Média atribuída ao filme: " . number_format($media, 2) . "<br>";
    echo "Quantidade de votos " .$qnt_votos;

    ?>

</body>
</html>