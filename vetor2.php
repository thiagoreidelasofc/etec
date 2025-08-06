<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor 2</title>
</head>
<body>
    <?php
    /*Criacao de vetor usando colchetes 
    Uso da função array_sum(), que realiza
    a soma dos elementos de um vetor */

    
    // Criando um vetor com 4 números inteiros
    $numeros = [10, 25, 7, 13];

    // Calculando a soma dos números
   
$soma= array_sum($numeros);
    // Exibindo os números e a soma
   echo "<h3> numeros: </h3>";
   foreach($numeros as $n){
echo "$n <br>";
}
echo "<h3>soma:</h3>$soma";
?>
    
</body>
</html>