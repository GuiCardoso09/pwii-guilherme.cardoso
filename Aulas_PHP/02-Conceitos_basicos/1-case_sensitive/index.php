<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Sensitive em PHP</title>
</head>
<body>
    <?php
    //NÃo É CASE SENSITIVE:
    echo "teste <br>";
    Echo "Testando 2 <br>";
    ECHO "Testando 3 <br>"; 
    
    //É CASE SENSITIVE
    $nome = "Guilherme Cardoso";
    $NOME = "TESTE";

    echo $nome , "<br>" , $NOME;
    
    /*Case sensitivity
    É a sensibilidade a casas maiúsculas e minúsculas;
    Para as instruções, não há esta diferença;
    Para variáveis, tem case sensitivity;
    echo = ECHO = eCHO;
    $nome != $NOME.
    
    */
    ?>   


</body>
</html>