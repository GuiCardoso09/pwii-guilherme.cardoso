<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheque Booleanos</title>
</head>
<body>
    <?php 
    /*Em PHP, há duas abordanges principais para verificar booleanos, a variar
    se você deseja verificar o tipo primitivo ou se aceita string/números que representam booleanos (true, 1, 2).

    1. Checagem estrita do tipo(is_bool)
    A função nativa verifica se a variável é estritamente do tipo booleano.

    2. Checagm Flexível de Formato(filter_var)
    Se você recebe dados vindos de formulários HTML, requisições HTTP ou APIS,
    o valor pode vir como string("true", "false", "1", "0"). NEsses casos, o is_bool()
    retornará false.
    Para validar e converter esses casos, use filter_var() com a flag FILTER_VALIDATE_BOOLEAN
    
    <?php
    $entrada1 = "true";
    $entrada2 = "1";
    $entrada3 = "Texto_qualquer";
    
    //O parâmetro FILTER_NULL_ON_FAILURE faz a função retornar NULL se não for booleano;
    $resultado1 = filter_var($entrada1, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    $resultado2 = filter_var($entrada2, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    $resultado3 = filter_var($entrada3, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    
    var_dump($resultado1); //bool(true)
    var_dump($resultado2); //bool(true)
    var_dump($resultado3); // NULL 

    */ 
    
    $status = true;
    $ativo = false;
    $texto ="true";
    $num = 1;

    //Retorna true (Boolean
    var_dump(is_bool($status));
    var_dump(is_bool($ativo));

    //Retorna false(não são booleanos primitivos)
    var_dump(is_bool($texto));
    var_dump(is_bool($num));
    ?>
</body>
</html>