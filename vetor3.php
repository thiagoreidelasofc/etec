<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor 3</title>
</head>
<body>
    <?php
    /*declaracao de vetor somente com [] sem valores dentro dele devido
    valores para preencher o vetor serem aleatorios 
    uso da funcao max() que retorna o maior valor do vetor
    uso da funcao min() que retorna o menor valor do vetor*/

    // Criando um vetor com 10 números aleatórios entre 1 e 100
    $numeros = [];
   for($i=0;$i<10;$i++){
    $numeros[]=rand(1,100);
}

    // Encontrando o maior valor
   $maior=max($numeros);

     // Encontrando o menor valor
  $menor=min($numeros);

    // Exibindo os números
   foreach($numeros as $num){
    echo "$num <br>";
}

    // Exibindo o maior número
   echo "maior numero: $maior<br>";

    // Exibindo o menor número
   echo "menor numero: $menor";
?>
    
</body>
</html>