<!DOCTYPE html>
<html>
<head>
    <title>EXER 37</title>
</head>
<body>

    <?php

    $qnt_container = 9;
    $carga_total_navio = 9;


    function statusCarregamento($qnt_container = null, $carga_total_navio)
    {


            if($carga_total_navio == 10){
            $msg = "Carregamento concluído";

        } else {
            $msg = "Carregamento incompleto";
            $carga_total_navio += $qnt_container;
            echo "O navio foi carregado com $qnt_container. <br>";
        }

        return $msg;

    }

    echo statusCarregamento($qnt_container, $carga_total_navio);  

    ?>

</body>
</html>