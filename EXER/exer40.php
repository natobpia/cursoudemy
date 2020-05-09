<!DOCTYPE html>
<html>
<head>
    <title>EXER 40</title>
</head>
<body>

    <?php

    function subMenu($itens)
    {
        if($itens != 11){
        echo "Item do Submenu: $itens <br>";
        subMenu($itens +1);
    }
    }

    echo "Item do menu: 1 <br>";
    subMenu(5);

    echo "<br>Item do menu: 2 <br>";
    subMenu(5);

    echo "<br>Item do menu: 3 <br>";
    subMenu(5);

    echo "<br>Item do menu: 4 <br>";
    subMenu(5);

    echo "<br>Item do menu: 5 <br>";
    subMenu(5);



    ?>

</body>
</html>