<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
<?php
/*Arrays
O array é um tipo de dado que serve para agrupar um conjunto de valores, podendo
conter qualquer tipo de dado na lista;
A sintaxe: [1, 2, 3, 4, 5];

*/ 
$a= [1,2,3];

print_r($a);
echo "<br>";
echo $a[0];

$arr=["Guilherme",1069,true];

echo "<br>";
print_r($arr);//imprime a lista: colocando os valores em suas respectivas posições
echo "<br>";
print_r($arr[1]);

?>

</body>
</html>
