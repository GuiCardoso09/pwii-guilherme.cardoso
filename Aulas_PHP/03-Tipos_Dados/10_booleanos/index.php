<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Booleanos</title>
</head>
<body>
    <?php
    /*BOOLEANOS
    É um tipo de dado que possui dois valores: (TRUE ou FALSE);
    Alguns valores são considerados como falsos: 0, 0.0, "0", [],
    NULL
    */
    
    echo true;
    echo "<br>";
    echo false;

    if(true) {
        echo "É verdadeiro! <br>";
    }

    if(5>2) { //true 
        echo "É verdadeiro! <br>";
    }

    $podeEntrar = true;

    if($podeEntrar){
        echo "O usuário pode entrar";
    }

    ?>
</body>
</html>