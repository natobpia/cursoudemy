<!DOCTYPE html>
<html>
<head>
    <title>EXER 36</title>
</head>
<body>

    <?php

    $codigo = 1;

    function rastreamento($codigo = null)
    {
        switch($codigo){
            case 1:
                $msg = "Aguardando Pagamento";
            break;

            case 2:
                $msg = "Pago";
            break;

            case 3:
                $msg = "Em Transporte";
            break;

            case 4:
                $msg = "Entregue";
            break;

 
        }

        return $msg;
    }

    echo rastreamento($codigo);

    ?>

</body>
</html>