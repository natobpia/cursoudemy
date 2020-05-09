<!DOCTYPE html>
<html>
<head>
    <title>EXCER 33</title>
</head>
<body>
    <?php

    $numCarterinhas = 25;
    $ultimoNum = 56898;
    $penultNum = 56897;

    for ($i=$ultimoNum + 1; $i < $ultimoNum + $numCarterinhas ; $i++) { 
        
        echo "Próximas carteirinhas: $i <hr>";
    }



    ?>

</body>
</html>