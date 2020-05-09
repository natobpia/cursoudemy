<!DOCTYPE html>
<html>
<head>
    <title>EXER 35</title>
</head>
<body>
    <?php

    $sim_nao = ["S","S","S","N","S","N","N","S","S","S","S","N","S","S","N","S","S","S"];
    $qnt_votos =  0;
    $votos_s = 0;
    $votos_n = 0;

    foreach($sim_nao as $voto){
        $qnt_votos++;

        if($voto == "S"){
            $votos_s++;
        } 
        if($voto == "N"){
            $votos_n++;

        }
    }

    echo "Total de VOTOS: $qnt_votos <br>";
    echo "Votos no SIM: $votos_s <br>";
    echo "Votos no NÃO: $votos_n";


    ?>

</body>
</html>