<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor 5</title>
</head>
<body>
    <?php
    /*declaracao de vetor usando colchetes 
    uso da funcao sort que coloca em ordem alfabetica os itens do vetor*/

    // Criando um vetor contendo uma lista de compras
    $lista = ["leite", "arroz", "açúcar", "macarrão", "abacaxi", "tomate", "azeite"];

    // Ordena em ordem alfabética
sort($lista);

   
    // Exibe a lista ordenada
    echo "<h3> lista ordenada </h3><ul>";
  foreach($lista as $l){
  echo "<li> $l </li>";
  }
  echo "</ul>";
  ?>

    
</body>
</html>