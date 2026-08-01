<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheque de Números inteiros</title>
</head>
<body>
    <?php
    
    if(is_int(5)){
        echo "É um inteiro <br>";
    }
    if(is_int("Não é um inteiro")) {
        echo "É um inteiro 2 <br>";
    }
    $a = 10;

    if(is_int($a)){
        echo "É um inteiro 3 <br>";
    }
    
    ?>
</body>
</html>