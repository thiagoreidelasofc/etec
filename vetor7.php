<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// crie um vetor multidmensional que contera 3 notas de 5 alunos calcule a media e mostre se 
//o aluno esta aprovado ou reprovado sendo que a media de aprovado deve ser a partir de 7 mostre as notas a media e a situacao de cada aluno



$alunos = [
    [
        "nome" => "Maria",
        "notas" => [7, 0, 0],
    ],
    [
        "nome" => "Matheus",
        "notas" => [5, 10, 10],
    ],
    [
        "nome" => "Eiji",
        "notas" => [6, 10, 10],
    ],
    [
        "nome" => "Tabu",
        "notas" => [8, 8, 10],
    ],
    [
        "nome" => "Viera",
        "notas" => [4, 10, 10],
    ]
];

foreach ($alunos as $a) {
    $media = array_sum($a['notas']) / count($a['notas']);
    $situacao = $media >= 7 ? "Aprovado" : "Reprovado";

    echo "Aluno: {$a['nome']}<br>";
    echo "Notas: ";
    foreach ($a['notas'] as $nota) {
        echo "{$nota} ";
    }
    echo "<br>";
    echo "Média: {$media}<br>";
    echo "Situação: {$situacao}<br><br>";
}









?>
</body>
</html>
