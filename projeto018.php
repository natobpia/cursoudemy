<!DOCTYPE html>
<html>
<head>
    <title>Função</title>
</head>
<body>

    <?php

        $codigo = "cursophp";

        echo promocao($codigo);

        function promocao($codigo)
        {
            if($codigo == "cursophp"){

                $msg = "Código Válido<br>";

            } else {

                $msg = "Código Inválido<br>";

            }
            return $msg;
        }

        $codigo = "PHP1";

        echo promocao($codigo);

    ?>

</body>
</html>