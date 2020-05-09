<!DOCTYPE html>
<html>
<head>
    <title>FOREACH</title>
</head>
<body>
    <?php

    $alunos = ["A",  "B", "C", "D"];

    foreach ($alunos as $key => $aluno) {
       
       echo "Nome: $aluno <br>";

    }

    ?>

</body>
</html>