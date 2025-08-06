<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor 4</title>
</head>
<body>
    <?php
    /*declaracao de vetor com 8 elementos usando colchetes 
      uso de variavel contadora*/
   
    // Criando um vetor com 8 números inteiros
    $numeros = [5, 12, 8, 20, 3, 15, 7, 25];

    // Contador de números maiores que 10
   $contador=0;
  $acum="";
    // Percorrendo o vetor usando foreach para contar quantos números sao maiores que 10*/
   foreach($numeros as $n){
    if($n>10){
    $contador++;
      $acum .= $n."  ";
  }}

    // Exibindo os números
   foreach($numeros as $numbers){
  echo "$numbers <br>";
  }

    // Exibindo a quantidade de números maiores que 10
   echo "<br> quantidade de numeros maiores que 10: $contador";
    //th numbers higher than 10
    echo "<br>numeros maiores do que 10: $acum";
    ?>
</body>
</html>