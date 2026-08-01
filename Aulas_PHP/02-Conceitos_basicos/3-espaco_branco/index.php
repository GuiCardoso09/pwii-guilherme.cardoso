<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço em Branco</title>
</head>
<body>
    <?php
  /*
  Para o PHP, o espaço em branco é ignorado, isto
  porque ele é removido antes da execução;
  A quebra de linha também é ignorada;
  Isso usado de má forma pode gerar erros inesperados
  no código.
  */ 
echo                             "testando espaço em branco <br>";
echo "testando espaço <br>";
echo
"quebra de linha <br>"
;

echo
"quebra de
linha<br>";
    ?>   
    
</body>
</html>