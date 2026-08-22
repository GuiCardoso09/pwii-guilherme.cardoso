<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumeCheque de Strings</title>
</head>
<body>
    <?php
    /*
    is_string para verificar se um dado é ou não é string;
    A função recebe um valor como parâmetro;
    Recebemos true ou false, dependendo dos dados enviados;
    Sempre precisamos utilizar a estrutura IF para validar o valor.    
    */ 

    $str = "JULIANA";
    $num = 12;

    if(is_string($str)){
        echo "$str é uma string 1<br>";
    }
    
    if (is_string($num)) {
        echo "$num é uma string 2<br>";
    }
    
    if(is_string("asd")){
        echo "É uma string 3<br>";
    }
    
    ?>
</body>
</html>