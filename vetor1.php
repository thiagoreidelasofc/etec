<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor 1</title>
</head>
<body>
    <?php
     /*Criação de vetor usando colchetes 
     Observe que nesse caso não é necessario
     fazer a referencia do índice. A linguagem entende
     que o 1º valor ser refere ao indice 0 e assim sucessivamente
     Uso do foreach(), uma forma abreviada do for onde é necessário
     referenciar o vetor usado e um apelido para o mesmo*/

     
     // Criando um vetor com nome de 5 cursos
     $cursos = ["Desenvolvimento de Sistemas", "Mecatrônica", "Edificações", "Eletro", "Administração","Exatas"];

    // Exibindo os cursos um por linha
    
foreach($cursos as $C){echo $C . "<br>";}

    ?>
</body>
</html>