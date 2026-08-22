<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
    /*Strings
    Em PHP podemos escrever os textos em aspas simples ou duplas,
    Não há diferença para o texto puro;
    As aspas diplas interpretam variáveis;
    */

    echo "Testando texto de aspas duplas <br>";
    echo 'Testando texto de aspas simples <br>';
    echo "Ele disse: 'Olá!' <br>";
    echo 'Ele disse: "Olá!" <br>';

    $idade = 15;

    echo "Ele tem $idade anos <br>";
    echo 'Ele tem $idade anos';

    ?>
</body>
</html>